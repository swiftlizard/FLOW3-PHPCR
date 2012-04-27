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
class Jackrabbit {

	/**
	 * @var array
	 */
	protected $settings = array();

	/**
	 * @var \TYPO3\FLOW3\Package\PackageManagerInterface
	 */
	protected $packageManager;

	/**
	 * @var \Doctrine\ODM\PHPCR\DocumentManager
	 */
	protected $documentManager;

	/**
	 * @var \Doctrine\ODM\PHPCR\DocumentRepository
	 */
	protected $localRepository;

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
		$this->initRepository($this->settings['JackrabbitRepository']['workspace']);
		$this->localRepository = $this->documentManager->getRepository('\SwiftLizard\PHPCR\Domain\PHPCR\Model\Document');
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
						     $this->packageManager->getPackage('SwiftLizard.PHPCR')->getClassesPath().'/Domain/PHPCR/Model/'
						)
					);

		$config = new \Doctrine\ODM\PHPCR\Configuration();
		$config->setMetadataDriverImpl($driver);

		$documentManager = new \Doctrine\ODM\PHPCR\DocumentManager(
									$session,
									$config
								);

		$this->localRepository = $documentManager->getRepository('\SwiftLizard\PHPCR\Domain\PHPCR\Model\Document');
		$this->documentManager = $this->localRepository->getDocumentManager();
	}

	/**
	 * Find a single document by its id
	 *
	 * The id may either be a PHPCR path or UUID
	 *
	 * @param string $id document id
	 * @return object document or null
	 */
	public function find($ids){
		return $this->localRepository->find($ids);
	}

	/**
	 * Finds all documents in the repository.
	 *
	 * @return array The entities.
	 */
	public function findAll(){
		return $this->localRepository->findAll();
	}

	/**
	 * Finds document by a set of criteria.
	 *
	 * Optionally sorting and limiting details can be passed. An implementation may throw
	 * an UnexpectedValueException if certain values of the sorting or limiting details are
	 * not supported.
	 *
	 * @throws UnexpectedValueException
	 * @param array $criteria
	 * @param array|null $orderBy
	 * @param int|null $limit
	 * @param int|null $offset
	 * @return mixed The objects.
	 */
	public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = 0){
		return $this->localRepository->findBy($criteria, $orderBy , $limit, $offset);
	}

	/**
	 * Finds a single document by a set of criteria.
	 *
	 * @param array $criteria
	 * @return object
	 */
	public function findOneBy(array $criteria){
		return $this->localRepository->findOneBy($criteria);
	}

	/**
	 * Find many document by id
	 *
	 * The ids may either be PHPCR paths or UUID's, but all must be of the same type
	 *
	 * @param array $ids document ids
	 * @return array of document objects
	 */
	public function findMany(array $ids){
		return $this->localRepository->findMany( $ids);
	}
}
