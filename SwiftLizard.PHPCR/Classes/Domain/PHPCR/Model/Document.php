<?php
namespace SwiftLizard\PHPCR\Domain\PHPCR\Model;

/*                                                                          *
* This script belongs to the FLOW3 package "SwiftLizard.PHPCR".             *
*                                                                           *
* It is free software; you can redistribute it and/or modify it under       *
* the terms of the GNU General Public License, either version 3 of the      *
* License, or (at your option) any later version.                           *
*                                                                           *
* The TYPO3 project - inspiring people to share!                            *
*                                                                           */

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * example document
 * @author chris zepernick <chris@swift-lizard.com
 * @package \SwiftLizard\PHPCR
 *
 * @PHPCRODM\Document
 */
class Document{

	/**
	 * @PHPCRODM\Id()
	 */
	protected $path;

	/**
	 * @PHPCRODM\String(name="title"))
	 */
	protected  $title;

	/**
	 * @PHPCRODM\String(name="content")
	 */
	protected $content;

	/**
	 * setter for the path within the CR
	 * @param string $path
	 */
	public function setPath( $path )
	{
		$this->path = $path;
	}

	/**
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}

	/**
	 * @param string $title
	 */
	public function setTitle( $title )
	{
		$this->title = $title;
	}
	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $content
	 */
	public function setContent( $content )
	{
		$this->content = $content;
	}

	/**
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

}
