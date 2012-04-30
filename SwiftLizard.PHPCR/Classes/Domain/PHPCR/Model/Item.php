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
class Item{

	/**
	 * @PHPCRODM\Id()
	 */
	protected $id;

    /**
     * presence of this annotation changes default id strategy
     * to "parent and name" strategy this attribute will contain
     * the parent object
     *
     * @var \SwiftLizard\PHPCR\Domain\PHPCR\Model\Document
     * @PHPCRODM\ParentDocument()
     */
    protected $parent;

    /**
     * @PHPCRODM\Nodename
     */
    protected $nodename;

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
	 * @param string $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

    /**
     * @param \SwiftLizard\PHPCR\Domain\PHPCR\Model\Document $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return \SwiftLizard\PHPCR\Domain\PHPCR\Model\Document
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param string $nodename
     */
    public function setNodename($nodename)
    {
        $this->nodename = $nodename;
    }

    /**
     * @return string
     */
    public function getNodename()
    {
        return $this->nodename;
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
