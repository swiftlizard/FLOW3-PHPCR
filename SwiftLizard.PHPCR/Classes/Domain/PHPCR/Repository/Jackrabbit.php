<?php
namespace SwiftLizard\PHPCR\Domain\PHPCR\Repository;

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

/**
 * example Repository for Jackrabbit CR
 *
 * @FLOW3\Scope("singleton")
 */
class Jackrabbit extends \Doctrine\ODM\PHPCR\DocumentRepository{

	/**
	 * @var array
	 */
	protected $settings = array();

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
	 * override constructor to get the
	 * setting via init
	 */
	public function __construct(){
		$this->settings = array();
	}

	/**
	 * init method to be called by inject method
	 * @return void
	 */
	public function init(){
		parent::__construct(
			$this->initRepository($this->settings['JackrabbitRepository']['workspace']),
			new \Doctrine\ODM\PHPCR\Mapping\ClassMetadata('\SwiftLizard\PHPCR\Domain\PHPCR\Model\Document')
		);
	}

	public function persist($document){
		$this->dm->persist($document);
	}

	public function flush(){
		$this->dm->flush();
	}

	/**
	 * @param string $workspace
	 */
	protected function initRepository($workspace){

		$connector  = new \SwiftLizard\PHPCR\Utility\Jackrabbit\Connector();
		$session    = $connector->connectToJackrabbitServer($workspace);

		$reader = new \Doctrine\Common\Annotations\AnnotationReader();
		$driver = new \Doctrine\ODM\PHPCR\Mapping\Driver\AnnotationDriver(
						$reader,
						array(
						     __dir__.'/../Model/'
						)
					);

		$config = new \Doctrine\ODM\PHPCR\Configuration();
		$config->setMetadataDriverImpl($driver);

		$documentManager = new \Doctrine\ODM\PHPCR\DocumentManager(
									$session,
									$config
								);

		return $documentManager;
	}
}
