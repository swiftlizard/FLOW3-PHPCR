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

/**
 * Command controller to check seperate task to work
 * related to Doctrine ODM PHPCR
 *
 * @FLOW3\Scope("singleton")
 */
class CheckPhpCrCommandController extends \TYPO3\FLOW3\Cli\CommandController
{

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
     * @var \SwiftLizard\PHPCR\Domain\PHPCR\Repository\Document
     */
    protected $documentRepository;

    /**
     * @var \SwiftLizard\PHPCR\Domain\PHPCR\Repository\Item
     */
    protected $itemRepository;

    /**
     * Helper to inject the repository and init it
     * used this way to get the settings within the repository
     *
     * @param \SwiftLizard\PHPCR\Domain\PHPCR\Repository\Document $repository
     */
    public function injectDocumentRepository(\SwiftLizard\PHPCR\Domain\PHPCR\Repository\Document $documentRepository){
        $this->documentRepository = $documentRepository;
        $this->documentRepository->init();
    }

    /**
     * Helper to inject the repository and init it
     * used this way to get the settings within the repository
     *
     * @param \SwiftLizard\PHPCR\Domain\PHPCR\Repository\Item $repository
     */
    public function injectItemRepository(\SwiftLizard\PHPCR\Domain\PHPCR\Repository\Item $itemRepository){
        $this->itemRepository = $itemRepository;
        $this->itemRepository->init();
    }

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
     * test insert for documents command to see if every thing works fine
     *
     * @param string $path
     * @param string $parent
     * @param string $title
     * @param string $content
     * @return void
     */
    public function dummyInsertDocumentCommand($path, $parent, $title, $content){

        $document = new \SwiftLizard\PHPCR\Domain\PHPCR\Model\Document();
        $document->setParent(
                $this->documentRepository
                     ->getDocumentManager()
                     ->find(
                        null,
                        $parent
                     )
                );
        $document->setNodename($path);
        $document->setTitle($title);
        $document->setContent($content);

        $this->documentRepository->persist($document);
        $this->documentRepository->flush();
    }

    /**
     * test insert for items command to see if every thing works fine
     *
     * @param string $path
     * @param string $parent
     * @param string $title
     * @param string $content
     * @return void
     */
    public function dummyInsertItemCommand($path, $parent, $title, $content){

        $document = new \SwiftLizard\PHPCR\Domain\PHPCR\Model\Item();
        $document->setParent(
            $this->itemRepository
                ->getDocumentManager()
                ->find(
                null,
                $parent
            )
        );
        $document->setNodename($path);
        $document->setTitle($title);
        $document->setContent($content);

        $this->itemRepository->persist($document);
        $this->itemRepository->flush();
    }

    /**
     * will show the content of a document
     * stored on a certain path
     *
     * @param string $path
     */
    public function getDocumentByPathCommand($path)
    {
        /** @var \SwiftLizard\PHPCR\Domain\PHPCR\Model\Document $document*/
        $document = $this->documentRepository->find($path);
        $this->outputLine('Document title: '. $document->getTitle());
        $this->outputLine('Document content: '. $document->getContent());
        $this->outputLine('Document id: '. $document->getId());
        if(is_object($document->getParent()))
        {
            $this->outputLine('Document parent: '. $document->getParent()->getId());
        }
        $this->outputLine('Document nodesname: '. $document->getNodename());
        $this->outputLine('#----------------------------------------#');

        $children = $document->getChildren();
        $this->outputLine('ChildRecords (Collection Type: '.get_class($children).'):');
        $this->outputLine('#----------------------------------------#');
        /** @var \SwiftLizard\PHPCR\Domain\PHPCR\Model\Item $child*/
        foreach($children as $child){
            $this->outputLine('Child id: '. $child->getId());
            $this->outputLine('Child title: '. $child->getTitle());
            $this->outputLine('Child content: '. $child->getContent());
            $this->outputLine('----------------------------------------');
        }
        $this->outputLine('#----------------------------------------#');
    }

    /**
     * will show the content of a document
     * stored on a certain path
     *
     * @param string $path
     */
    public function getItemByPathCommand($path)
    {
        /** @var \SwiftLizard\PHPCR\Domain\PHPCR\Model\Item $item*/
        $item = $this->itemRepository->find($path);
        $this->outputLine('Item title: '. $item->getTitle());
        $this->outputLine('Item content: '. $item->getContent());
        $this->outputLine('Item id: '. $item->getId());
        if(is_object($item->getParent()))
        {
            $this->outputLine('Item parent: '. $item->getParent()->getId());
            $this->outputLine('Item parent Type: '. get_class($item->getParent()));
        }
        $this->outputLine('Item nodesname: '. $item->getNodename());
        $this->outputLine('#----------------------------------------#');
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
