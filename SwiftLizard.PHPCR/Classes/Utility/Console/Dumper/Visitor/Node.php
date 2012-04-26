<?php
namespace SwiftLizard\PHPCR\Utility\Console\Dumper;

/*                                                                          *
* This script belongs to the FLOW3 package "SwiftLizard.PHPCR".             *
*                                                                           *
* It is free software; you can redistribute it and/or modify it under       *
* the terms of the GNU General Public License, either version 3 of the      *
* License, or (at your option) any later version.                           *
*                                                                           *
* The TYPO3 project - inspiring people to share!                            *
*                                                                           */

use PHPCR\ItemVisitorInterface;
use PHPCR\ItemInterface;
use PHPCR\NodeInterface;

/**
 * Console Dumper Node  Visitor port for Flow3
 *
 * @author Daniel Barsotti <daniel.barsotti@liip.ch>
 * @author chris zepernick <chris@swift-lizard.com>
 */
class NodeVisitor implements ItemVisitorInterface
{
	/**
	 * @var \SwiftLizard\PHPCR\Command\PHPCRCommandController
	 */
	protected $commandLineController;

	/**
	 * @var int
	 */
	protected $level = 0;

	/**
	 * constructor setting the commandline
	 * controller to work with
	 *
	 * @param \SwiftLizard\PHPCR\Command\PHPCRCommandController $commandLineController
	 */
	public function __construct(\SwiftLizard\PHPCR\Command\PHPCRCommandController $commandLineController){
		$this->commandLineController = $commandLineController;
	}

	/**
	 * setter for level
	 *
	 * @param int $level
	 */
	public function setLevel($level){
		$this->level = (int) $level;
	}

	/**
	 * This method is called when the ItemVisitor is passed to the accept
	 * method of a Node or Property.
	 *
	 * If this method throws an exception the visiting process is aborted.
	 *
	 * PHPCR Note: you need to distinguish between Node and Property objects
	 * being visited in your implementation.
	 *
	 * @param \PHPCR\ItemInterface $item a node or property accepting this  visitor
	 * @throws \PHPCR\RepositoryException if an error occurs
	 * @return void
	 */
	public function visit(ItemInterface $item){

		if (! $item instanceof NodeInterface) {
			throw new \Exception("Internal error: did not expect to visit a non-node object: $item");
		}

		$name = $item->getName();

		if ($item->getDepth() == 0) {
			$name = 'ROOT';
		}

		$this->commandLineController->writeln(str_repeat('  ', $this->level) . '<comment>' . $name . '</comment>:');
	}
}
