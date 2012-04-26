<?php
namespace SwiftLizard\PHPCR\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "SwiftLizard.PHPCR".          *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Standard controller for the SwiftLizard.PHPCR package
 *
 * @FLOW3\Scope("singleton")
 */
class StandardController extends \TYPO3\FLOW3\Mvc\Controller\ActionController {

	/**
	 * @var \SwiftLizard\PHPCR\Domain\PHPCR\Repository\Jackrabbit
	 */
	protected $repository;

	/**
	 * Helper to inject the repository and init it
	 * used this way to get the settings within the repository
	 *
	 * @param \SwiftLizard\PHPCR\Domain\PHPCR\Repository\Jackrabbit $repository
	 */
	public function injectRepository(\SwiftLizard\PHPCR\Domain\PHPCR\Repository\Jackrabbit $repository){
		$this->repository = $repository;
		$this->repository->init();
	}

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {

		$document = new \SwiftLizard\PHPCR\Domain\PHPCR\Model\Document();
		$document->setPath('/chris');
		$document->setTitle('Test Document 1');
		$document->setContent('Lorem Ipsum und so weiter.');

		$this->repository->persist($document);
		$this->repository->flush();
	}

}

?>
