<?php

namespace Jackalope\Query\QOM;

use PHPCR\Query\QOM\NotInterface;
use PHPCR\Query\QOM\ConstraintInterface;

/**
 * {@inheritDoc}
 *
 * @api
 */
class NotConstraint implements NotInterface
{
    /**
     * @var \PHPCR\Query\QOM\ConstraintInterface
     */
    protected $constraint;

    /**
     * Create a new not constraint
     *
     * @param ConstraintInterface $constraint
     */
    public function __construct(ConstraintInterface $constraint)
    {
        $this->constraint = $constraint;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Gets all constraints including itself
     *
     * @return array the constraints
     *
     * @api
     */
    function getConstraints() {
        $constraints = $this->getConstraint()->getConstraints();
        $constraints[] = $this;
        return $constraints;
    }
}
