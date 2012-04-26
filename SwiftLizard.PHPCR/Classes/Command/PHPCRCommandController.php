<?php
namespace SwiftLizard\PHPCR\Command;

/*                                                                          *
* This script belongs to the FLOW3 package "SwiftLizard.PHPCR".             *
*                                                                           *
* It is free software; you can redistribute it and/or modify it under       *
* the terms of the GNU General Public License, either version 3 of the      *
* License, or (at your option) any later version.                           *
*                                                                           *
* The TYPO3 project - inspiring people to share!                            *
*                                                                           */

use TYPO3\FLOW3\Annotations as FLOW3;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ODM\PHPCR\Translation\Translation;

use PHPCR\SessionInterface;
use PHPCR\Util\TreeWalker;
use PHPCR\Util\NodeHelper;
use PHPCR\Util\Console\Helper\ConsoleParametersParser;
use PHPCR\Util\Console\Helper\TreeDumper\ConsoleDumperNodeVisitor;
use PHPCR\Util\Console\Helper\TreeDumper\ConsoleDumperPropertyVisitor;
use PHPCR\Util\Console\Helper\TreeDumper\SystemNodeFilter;

use Jackalope\Tools\Console\Helper\JackrabbitHelper;

/**
 * Command controller for tasks related to Doctrine ODM PHPCR
 *
 * @FLOW3\Scope("singleton")
 */
class PHPCRCommandController extends \TYPO3\FLOW3\Cli\CommandController{

	/**
	 * @var array
	 */
	protected $settings = array();

	/**
	 * @var \TYPO3\FLOW3\Package\PackageManagerInterface
	 */
	protected $packageManager;

	/**
	 * @var string
	 */
	protected $currentWorkspace;

	/**
	 * @var \Jackalope\SessionInterface
	 */
	private $phpCrSession;

	/**
	 * Injects the FLOW3 settings, only the persistence part is kept for further use
	 *
	 * @param array $settings
	 * @return void
	 */
	public function injectSettings(array $settings) {
		$this->settings = $settings['Jackrabbit'];
	}

	/**
	 * @param \TYPO3\FLOW3\Package\PackageManagerInterface $packageManager
	 * @return void
	 */
	public function injectPackageManager(\TYPO3\FLOW3\Package\PackageManagerInterface $packageManager) {
		$this->packageManager = $packageManager;
	}

	/**
	 * Start and stop the Jackrabbit server
	 *
	 * The <info>phpcr:jackrabbit</info> command allows to have a minimal
	 * control on the Jackrabbit server from within a command.
	 *
	 * If the <info>jackrabbit_jar</info> option is set, it will be used as the
	 * Jackrabbit server jar file.
	 *
	 * @param string $cmd, command to pass to jar file (start, stop, status)
	 * @param string $jackRabbitJarFile, the location of the jar file, if null value of settings.yaml is taken
	 * @return void
	 */
	public function jackrabbitCommand( $cmd = 'start', $jackRabbitJarFile = null){

		if(is_null($jackRabbitJarFile)){
			$jackRabbitJarFile = $this->packageManager->getPackage('SwiftLizard.PHPCR')->getPackagePath().$this->settings['jar'];
		}

		if (! in_array(strtolower($cmd), array('start', 'stop', 'status'))) {
			$this->writeln('Command not in known command list');
			$this->quit();
		}

		if (! $jackRabbitJarFile) {
			throw new \InvalidArgumentException('Either specify the path to the jackrabbit jar file or configure the command accordingly');
		}

		if (!file_exists($jackRabbitJarFile)) {
			throw new \Exception("Could not find the specified Jackrabbit .jar file '$jackRabbitJarFile'");
		}

		$helper = new JackrabbitHelper($jackRabbitJarFile);

		switch (strtolower($cmd)) {
			case 'start':
				$helper->startServer();
				$this->writeLn('Started Jackrabbit Server');
				break;
			case 'stop':
				$helper->stopServer();
				$this->writeLn('Stoped  Jackrabbit Server');
				break;
			case 'status':
				$this->writeln("Jackrabbit server " . ($helper->isServerRunning() ? 'is running' : 'is not running'));
				break;
		}
	}

	/**
	 * Register system node types in the PHPCR repository
	 *
	 * Register system node types in the PHPCR repository.
	 * This command registers the node types necessary for the ODM to work.
	 *
	 * Method will create the phpcr namespace for given workspace
	 * needed for use with Doctrine.ODM.PHPCR
	 *
	 * @param string $workspace
	 * @return void
	 */
	public function register_PhpCR_NS_In_JackrabbitCommand($workspace){
		$this->initPHPCR($workspace);

		$this->outputLine('Register phpcr namespace in Jackrabbit CR');

		$phpcrNamespace     = 'phpcr';
		$phpcrNamespaceUri  = 'http://www.doctrine-project.org/projects/phpcr_odm';
		$localeNamespace    = Translation::LOCALE_NAMESPACE;
		$localeNamespaceUri = Translation::LOCALE_NAMESPACE_URI;

		$cnd = <<<CND
// register phpcr_locale namespace
<$localeNamespace='$localeNamespaceUri'>
// register phpcr namespace
<$phpcrNamespace='$phpcrNamespaceUri'>
[phpcr:managed]
  mixin
  - phpcr:class (STRING)
CND
		;

		$ntm = $this->phpCrSession->getWorkspace()->getNodeTypeManager();
		$ntm->registerNodeTypesCnd($cnd, true);
		$this->outputLine('Registration of phpcr namespace in Jackrabbit repository done');
	}

	/**
	 * Create a workspace in the configured repository
	 *
	 * The <info>phpcr:createWorkspaceInJackRabbit</info> command creates a workspace with the specified name.
	 * It will fail if a workspace with that name already exists or if the repository implementation
	 * does not support this operation.
	 *
	 * @param string $baseWorkspace
	 * @param string $newWorkspace
	 * @throws \Exception
	 */
	public function create_Workspace_In_JackRabbitCommand($baseWorkspace, $newWorkspace){
		$this->initPHPCR($baseWorkspace);

		$workspace = $this->phpCrSession->getWorkspace();

		if (! $this->phpCrSession->getRepository()->getDescriptor(\PHPCR\RepositoryInterface::OPTION_WORKSPACE_MANAGEMENT_SUPPORTED)) {
			throw new \Exception('Your PHPCR implemenation does not support workspace management. Please refer to the documentation of your PHPCR implementation to learn how to create a workspace.');
		}

		$workspace->createWorkspace($newWorkspace);
	}

	/**
	 * Register node types in the PHPCR repository.
	 *
	 * This command allows to register node types in the repository that are defined
	 * in a CND (Compact Namespace and Node Type Definition) file as used by jackrabbit.
	 *
	 * Custom node types can be used to define the structure of content repository
	 * nodes, like allowed properties and child nodes together with the namespaces
	 * and their prefix used for the names of node types and properties.
	 *
	 * If you use --allow-update existing node type definitions will be overwritten
	 * in the repository.
	 *
	 * @param string $workspace, the workspace in CR to work on
	 * @param string $cdnFile, the cdn file (path/to/cdn.file) to work with
	 * @param bool  $allowUpdate, param to force updates
	 */
	public function register_NodeTypes_For_PHPCRCommand($workspace, $cdnFile, $allowUpdate = true){
		if (!file_exists($cdnFile)) {
			throw new \InvalidArgumentException(
				sprintf("Node type definition file '<info>%s</info>' does not exist.", $cdnFile)
			);
		} elseif (!is_readable($cdnFile)) {
			throw new \InvalidArgumentException(
				sprintf("Node type definition file '<info>%s</info>' does not have read permissions.", $cdnFile)
			);
		}

		$this->initPHPCR($workspace);

		$cnd = file_get_contents($cdnFile);

		$this->updateFromCnd($this->phpCrSession, $cnd, $allowUpdate);

		$this->outputLine(PHP_EOL.sprintf('Successfully registered node types from "<info>%s</info>"', $cdnFile) . PHP_EOL);
	}

	/**
	 * Dump the content repository
	 *
	 * The <info>dump</info> command recursively outputs the name of the node specified
	 * by the <info>path</info> argument and its subnodes in a yaml-like style.
	 *
	 * If the <info>props</info> option is set to yes the nodes properties are
	 * displayed as yaml arrays.
	 *
	 * By default the command filters out system nodes and properties (i.e. nodes and
	 * properties with names starting with 'jcr:'), the <info>sys_nodes</info> option
	 * allows to turn this filter off.
	 *
	 * @param string $workspace, the workspace in CR to work on
	 * @param string $path, Path of the node to dump
	 * @param boolean $sys_nodes, Set to "true" to dump the system node default is false
	 * @param boolean $props, Set to "true" to dump the node properties default is false
	 */
	public function dump_PHPCR_by_nodePathCommand($workspace, $path ,$sysnodes = false, $props = false){

		$this->initPHPCR($workspace);

		$nodeVisitor = new \SwiftLizard\PHPCR\Utility\Console\Dumper\Visitor\Node($this);

		$propVisitor = null;
		if ($props) {
			$propVisitor = new \SwiftLizard\PHPCR\Utility\Console\Dumper\Visitor\Property($this);
		}

		$walker = new TreeWalker($nodeVisitor, $propVisitor);

		if (!$sysnodes) {
			$filter = new SystemNodeFilter();
			$walker->addNodeFilter($filter);
			$walker->addPropertyFilter($filter);
		}

		// do not catch error but let user see the node was not found
		$walker->traverse($this->phpCrSession->getNode($path));
	}

	/**
	 * Remove all content from the repository
	 *
	 * The <info>phpcr:purge_content_repository</info> command remove all the
	 * non-standard nodes from the content repository
	 *
	 * @param string $workspace, the workspace in CR to work on
	 * @param boolean $force, will force purging if set to true
	 * @return void
	 */
	public function purge_Content_repositoryCommand($workspace, $force = false){
		$this->initPHPCR($workspace);

		$res = 'no';
		if (! $force) {
			$res = $this->dialog('Are you sure you want to delete all the nodes of the content repository for '.$workspace.'?  [yes|no]: ');
		}

		if ($force || strtolower($res) == 'yes') {
			NodeHelper::deleteAllNodes($this->phpCrSession);
			$this->phpCrSession->save();
			$this->writeln("Done\n");
		} else {
			$this->writeln("Aborted\n");
		}

	}

	/**
	 * helper to access outputline method of command controller
	 *
	 * @param $message
	 * @param array $arguments
	 */
	public function writeLn($message, array $arguments = array()){
		$this->outputLine($message, $arguments);
	}

	/**
	 * Actually do the update.
	 *
	 * @param SessionInterface $session the phpcr session to talk to
	 * @param string $cnd the compact namespace and node type definition in string form
	 *
	 * @throws \PHPCR\NodeType\NodeTypeExistsException if the node already exists and allowUpdate is false
	 * @throws \PHPCR\RepositoryException on other errors
	 */
	protected function updateFromCnd(SessionInterface $session, $cnd, $allowUpdate)
	{
		if (! $session instanceof \Jackalope\Session) {
			throw new \Exception('PHPCR only provides an API to register node types. Your implementation is not Jackalope (which provides a method for .cnd). TODO: parse the file and do the necessary API calls');
		}

		try {
			$ntm = $session->getWorkspace()->getNodeTypeManager();
			$ntm->registerNodeTypesCnd($cnd, $allowUpdate);
		} catch (\PHPCR\NodeType\NodeTypeExistsException $e) {
			if (!$allowUpdate) {
				$this->outputLine(PHP_EOL.'<error>The node type(s) you tried to register already exist.</error>'.PHP_EOL);
				$this->outputLine(PHP_EOL.'If you want to override the existing definition call this command with the ');
				$this->outputLine('<info>--allow-update</info> option.'.PHP_EOL);
			}
			throw $e;
		}
	}

	/**
	 * protected helper to inititalize phpCR for Jackalope
	 * will init phpCR according to the settings of the current workspace
	 *
	 * @param string $workspace, the workspace in CR to work on
	 * @return void
	 */
	protected function initPHPCR($workspace){
		$this->currentWorkspace = $workspace;

		$connector          = new \SwiftLizard\PHPCR\Utility\Jackrabbit\Connector();
		$this->phpCrSession = $connector->connectToJackrabbitServer($this->currentWorkspace);

		$this->outputLine('Jackrabbit Session created');
	}

	/**
	 * Helper to create Dialogs in CLI mode
	 * will return the cli answer by user
	 *
	 * @param string $text
	 * @param array $arguments
	 *
	 * @return string
	 */
	protected function dialog($text = '', array $arguments = array()) {

		// check if we got more then one argument
		if(count($arguments) > 0){
			echo vsprintf($text, $arguments);
		}else{
			echo $text;
		}

		return trim(fgets(STDIN));
	}
}
