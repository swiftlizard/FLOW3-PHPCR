<?php
namespace Jackalope\Query\QOM;

use PHPCR\Query\QOM\DescendantNodeJoinConditionInterface;

/**
 * {@inheritDoc}
 *
 * @api
 */
class DescendantNodeJoinCondition implements DescendantNodeJoinConditionInterface
{
    /**
     * @var string
     */
    protected $descendantSelectorName;

    /**
     * @var string
     */
    protected $ancestorSelectorNode;

    /**
     * Constructor
     *
     * @param string $descendantSelectorName
     * @param string $ancestorSelectorName
     */
    public function __construct($descendantSelectorName, $ancestorSelectorName)
    {
        $this->ancestorSelectorNode = $ancestorSelectorName;
        $this->descendantSelectorName = $descendantSelectorName;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    function getDescendantSelectorName()
    {
        return $this->descendantSelectorName;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    function getAncestorSelectorName()
    {
        return $this->ancestorSelectorNode;
    }
}
