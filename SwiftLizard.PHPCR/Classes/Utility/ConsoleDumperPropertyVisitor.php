<?php
namespace SwiftLizard\PHPCR\Utility;

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
use PHPCR\PropertyInterface;

/**
 * Console Dumper Property Visitor port for Flow3
 *
 * @author Daniel Barsotti <daniel.barsotti@liip.ch>
 * @author chris zepernick <chris@swift-lizard.com>
 */
class ConsoleDumperPropertyVisitor implements ItemVisitorInterface{
	/**
	 * @var \SwiftLizard\PHPCR\Command\PHPCRCommandController
	 */
	protected $commandLineController;

	/**
	 * @var int
	 */
	protected $maxLineLength = 120;

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
	public function __construct(\SwiftLizard\PHPCR\Command\PHPCRCommandController $commandLineController, $maxLineLength = null){
		$this->commandLineController = $commandLineController;
		if((int) $maxLineLength > 0){
			$this->maxLineLength = (int) $maxLineLength;
		}
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

		if (! $item instanceof PropertyInterface) {
			throw new \Exception("Internal error: did not expect to visit a non-node object: $item");
		}

		/** @var PropertyInterface $item */
		$value = $item->getString();

		if (! is_string($value)) {
			$value = print_r($value, true);
		}

		if (strlen($value) > $this->maxLineLength) {
			$value = substr($value, 0, $this->maxLineLength) . '...';
		}

		$value = str_replace(array("\n", "\t"), '', $value);

		$this->commandLineController->writeLn(str_repeat('  ', $this->level + 1) . '- <info>' . $item->getName() . '</info> = ' . $value);
	}
}
