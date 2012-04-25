<?php

namespace Jackalope\Transport;

/**
 * TODO make this extensible
 *
 * Utility class for transports that do not use jackrabbit to provide the
 * standard node type information.
 *
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class StandardNodeTypes
{
    /**
     * Returns all the default nodes provided by the JCR 2.0 as well as the PHPCR
     * specification.
     *
     * Data is in array format according to TransportInterface::getNodeTypes()
     * so that transports that do not use jackrabbit can provide the standard
     * node types.
     *
     * @return array list of node type arrays to create node type objects from
     */
    static public function getNodeTypeData()
    {
        return array(
            0 =>
            array(
                'name' => 'phpcr:managed',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'phpcr:managed',
                        'name' => 'phpcr:class',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            1 =>
            array(
                'name' => 'mix:created',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:created',
                        'name' => 'jcr:createdBy',
                        'isAutoCreated' => true,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:created',
                        'name' => 'jcr:created',
                        'isAutoCreated' => true,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 5,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            2 =>
            array(
                'name' => 'mix:etag',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:etag',
                        'name' => 'jcr:etag',
                        'isAutoCreated' => true,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            3 =>
            array(
                'name' => 'mix:language',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:language',
                        'name' => 'jcr:language',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            4 =>
            array(
                'name' => 'mix:lastModified',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:lastModified',
                        'name' => 'jcr:lastModifiedBy',
                        'isAutoCreated' => true,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:lastModified',
                        'name' => 'jcr:lastModified',
                        'isAutoCreated' => true,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 5,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            5 =>
            array(
                'name' => 'mix:lifecycle',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:lifecycle',
                        'name' => 'jcr:lifecyclePolicy',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 3,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:lifecycle',
                        'name' => 'jcr:currentLifecycleState',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 3,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            6 =>
            array(
                'name' => 'mix:lockable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:lockable',
                        'name' => 'jcr:lockIsDeep',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:lockable',
                        'name' => 'jcr:lockOwner',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            7 =>
            array(
                'name' => 'mix:mimeType',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:mimeType',
                        'name' => 'jcr:encoding',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:mimeType',
                        'name' => 'jcr:mimeType',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            8 =>
            array(
                'name' => 'mix:referenceable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:referenceable',
                        'name' => 'jcr:uuid',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 3,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            9 =>
            array(
                'name' => 'mix:shareable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            10 =>
            array(
                'name' => 'mix:simpleVersionable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:simpleVersionable',
                        'name' => 'jcr:isCheckedOut',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                        'defaultValues' =>
                        array(
                            0 => 'true',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            11 =>
            array(
                'name' => 'mix:title',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:title',
                        'name' => 'jcr:description',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:title',
                        'name' => 'jcr:title',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            12 =>
            array(
                'name' => 'mix:versionable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                    1 => 'mix:simpleVersionable',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'mix:versionable',
                        'name' => 'jcr:predecessors',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 9,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'mix:versionable',
                        'name' => 'jcr:mergeFailed',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 9,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'mix:versionable',
                        'name' => 'jcr:activity',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:activity',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'mix:versionable',
                        'name' => 'jcr:configuration',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:configuration',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'mix:versionable',
                        'name' => 'jcr:versionHistory',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:versionHistory',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    5 =>
                    array(
                        'declaringNodeType' => 'mix:versionable',
                        'name' => 'jcr:baseVersion',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            13 =>
            array(
                'name' => 'nt:activity',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                    1 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:activity',
                        'name' => 'jcr:activityTitle',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            14 =>
            array(
                'name' => 'nt:address',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:workspace',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:path',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 8,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:host',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:port',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:protocol',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    5 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:repository',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    6 =>
                    array(
                        'declaringNodeType' => 'nt:address',
                        'name' => 'jcr:id',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 10,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            15 =>
            array(
                'name' => 'nt:base',
                'isAbstract' => true,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:base',
                        'name' => 'jcr:mixinTypes',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 4,
                        'requiredType' => 7,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:base',
                        'name' => 'jcr:primaryType',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 4,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            16 =>
            array(
                'name' => 'nt:childNodeDefinition',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:requiredPrimaryTypes',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                        'defaultValues' =>
                        array(
                            0 => 'nt:base',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:autoCreated',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:defaultPrimaryType',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:protected',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:name',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    5 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:mandatory',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    6 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:sameNameSiblings',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    7 =>
                    array(
                        'declaringNodeType' => 'nt:childNodeDefinition',
                        'name' => 'jcr:onParentVersion',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'COPY',
                            1 => 'VERSION',
                            2 => 'INITIALIZE',
                            3 => 'COMPUTE',
                            4 => 'IGNORE',
                            5 => 'ABORT',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            17 =>
            array(
                'name' => 'nt:configuration',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:versionable',
                    1 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:configuration',
                        'name' => 'jcr:root',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            18 =>
            array(
                'name' => 'nt:file',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => 'jcr:content',
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:hierarchyNode',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:file',
                        'name' => 'jcr:content',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:base',
                        ),
                    ),
                ),
            ),
            19 =>
            array(
                'name' => 'nt:folder',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:hierarchyNode',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:folder',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 2,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:hierarchyNode',
                        ),
                    ),
                ),
            ),
            20 =>
            array(
                'name' => 'nt:frozenNode',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => true,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                    1 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:frozenNode',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 0,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:frozenNode',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 0,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:frozenNode',
                        'name' => 'jcr:frozenUuid',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'nt:frozenNode',
                        'name' => 'jcr:frozenPrimaryType',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'nt:frozenNode',
                        'name' => 'jcr:frozenMixinTypes',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 7,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:frozenNode',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => true,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:base',
                        ),
                    ),
                ),
            ),
            21 =>
            array(
                'name' => 'nt:hierarchyNode',
                'isAbstract' => true,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:created',
                    1 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            22 =>
            array(
                'name' => 'nt:linkedFile',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => 'jcr:content',
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:hierarchyNode',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:linkedFile',
                        'name' => 'jcr:content',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            23 =>
            array(
                'name' => 'nt:nodeType',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:hasOrderableChildNodes',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:isQueryable',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:isMixin',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:nodeTypeName',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:isAbstract',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    5 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:primaryItemName',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    6 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:supertypes',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:childNodeDefinition',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'allowsSameNameSiblings' => true,
                        'defaultPrimaryTypeName' => 'nt:childNodeDefinition',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:childNodeDefinition',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:nodeType',
                        'name' => 'jcr:propertyDefinition',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'allowsSameNameSiblings' => true,
                        'defaultPrimaryTypeName' => 'nt:propertyDefinition',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:propertyDefinition',
                        ),
                    ),
                ),
            ),
            24 =>
            array(
                'name' => 'nt:propertyDefinition',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:autoCreated',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:isQueryOrderable',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:protected',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:name',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:valueConstraints',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    5 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:isFullTextSearchable',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    6 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:onParentVersion',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'COPY',
                            1 => 'VERSION',
                            2 => 'INITIALIZE',
                            3 => 'COMPUTE',
                            4 => 'IGNORE',
                            5 => 'ABORT',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    7 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:requiredType',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'STRING',
                            1 => 'URI',
                            2 => 'BINARY',
                            3 => 'LONG',
                            4 => 'DOUBLE',
                            5 => 'DECIMAL',
                            6 => 'BOOLEAN',
                            7 => 'DATE',
                            8 => 'NAME',
                            9 => 'PATH',
                            10 => 'REFERENCE',
                            11 => 'WEAKREFERENCE',
                            12 => 'UNDEFINED',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    8 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:multiple',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    9 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:availableQueryOperators',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    10 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:defaultValues',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 0,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    11 =>
                    array(
                        'declaringNodeType' => 'nt:propertyDefinition',
                        'name' => 'jcr:mandatory',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 6,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            25 =>
            array(
                'name' => 'nt:query',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:query',
                        'name' => 'jcr:statement',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:query',
                        'name' => 'jcr:language',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            26 =>
            array(
                'name' => 'nt:resource',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => 'jcr:data',
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:lastModified',
                    1 => 'mix:mimeType',
                    2 => 'mix:referenceable',
                    3 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:resource',
                        'name' => 'jcr:data',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 2,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            27 =>
            array(
                'name' => 'nt:unstructured',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => true,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:unstructured',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 0,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:unstructured',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 0,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:unstructured',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 2,
                        'allowsSameNameSiblings' => true,
                        'defaultPrimaryTypeName' => 'nt:unstructured',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:base',
                        ),
                    ),
                ),
            ),
            28 =>
            array(
                'name' => 'nt:version',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                    1 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:version',
                        'name' => 'jcr:predecessors',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 9,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:version',
                        'name' => 'jcr:activity',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:activity',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:version',
                        'name' => 'jcr:created',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 5,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'nt:version',
                        'name' => 'jcr:successors',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 9,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:version',
                        'name' => 'jcr:frozenNode',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:frozenNode',
                        ),
                    ),
                ),
            ),
            29 =>
            array(
                'name' => 'nt:versionHistory',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                    1 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:versionHistory',
                        'name' => 'jcr:copiedFrom',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 10,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:versionHistory',
                        'name' => 'jcr:versionableUuid',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:versionHistory',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:version',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:version',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'nt:versionHistory',
                        'name' => 'jcr:versionLabels',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:versionLabels',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:versionLabels',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'nt:versionHistory',
                        'name' => 'jcr:rootVersion',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:version',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:version',
                        ),
                    ),
                ),
            ),
            30 =>
            array(
                'name' => 'nt:versionLabels',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:versionLabels',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:version',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            31 =>
            array(
                'name' => 'nt:versionedChild',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'nt:versionedChild',
                        'name' => 'jcr:childVersionHistory',
                        'isAutoCreated' => true,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'requiredType' => 9,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'nt:versionHistory',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            32 =>
            array(
                'name' => 'rep:ACE',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:ACE',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 0,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:ACE',
                        'name' => 'rep:privileges',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 7,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'rep:ACE',
                        'name' => 'rep:glob',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'rep:ACE',
                        'name' => 'rep:nodePath',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 8,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'rep:ACE',
                        'name' => 'rep:principalName',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            33 =>
            array(
                'name' => 'rep:ACL',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => true,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'rep:Policy',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:ACL',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:GrantACE',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:ACE',
                        ),
                    ),
                ),
            ),
            34 =>
            array(
                'name' => 'rep:AccessControl',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:AccessControl',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:AccessControl',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:AccessControl',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:PrincipalAccessControl',
                        ),
                    ),
                ),
            ),
            35 =>
            array(
                'name' => 'rep:AccessControllable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:AccessControllable',
                        'name' => 'rep:policy',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Policy',
                        ),
                    ),
                ),
            ),
            36 =>
            array(
                'name' => 'rep:Activities',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Activities',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:Activities',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Activities',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:Activities',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:activity',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:activity',
                        ),
                    ),
                ),
            ),
            37 =>
            array(
                'name' => 'rep:Authorizable',
                'isAbstract' => true,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'mix:referenceable',
                    1 => 'nt:hierarchyNode',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Authorizable',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 0,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:Authorizable',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 1,
                        'requiredType' => 0,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'rep:Authorizable',
                        'name' => 'rep:principalName',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Authorizable',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 2,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:unstructured',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:base',
                        ),
                    ),
                ),
            ),
            38 =>
            array(
                'name' => 'rep:AuthorizableFolder',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:hierarchyNode',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:AuthorizableFolder',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 2,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:AuthorizableFolder',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:AuthorizableFolder',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:AuthorizableFolder',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 2,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:User',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Authorizable',
                        ),
                    ),
                ),
            ),
            39 =>
            array(
                'name' => 'rep:Configurations',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Configurations',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:Configurations',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Configurations',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:Configurations',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:configuration',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:configuration',
                        ),
                    ),
                ),
            ),
            40 =>
            array(
                'name' => 'rep:DenyACE',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'rep:ACE',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            41 =>
            array(
                'name' => 'rep:GrantACE',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'rep:ACE',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            42 =>
            array(
                'name' => 'rep:Group',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'rep:Authorizable',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Group',
                        'name' => 'rep:members',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 10,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'rep:Authorizable',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Group',
                        'name' => 'rep:members',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 2,
                        'allowsSameNameSiblings' => true,
                        'defaultPrimaryTypeName' => 'rep:Members',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Members',
                        ),
                    ),
                ),
            ),
            43 =>
            array(
                'name' => 'rep:Impersonatable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Impersonatable',
                        'name' => 'rep:impersonators',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            44 =>
            array(
                'name' => 'rep:Members',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => true,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Members',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 10,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'valueConstraints' =>
                        array(
                            0 => 'rep:Authorizable',
                        ),
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:Members',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'allowsSameNameSiblings' => true,
                        'defaultPrimaryTypeName' => 'rep:Members',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Members',
                        ),
                    ),
                ),
            ),
            45 =>
            array(
                'name' => 'rep:Policy',
                'isAbstract' => true,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            46 =>
            array(
                'name' => 'rep:PrincipalAccessControl',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'rep:AccessControl',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:PrincipalAccessControl',
                        'name' => 'rep:policy',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Policy',
                        ),
                    ),
                ),
            ),
            47 =>
            array(
                'name' => 'rep:RepoAccessControllable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:RepoAccessControllable',
                        'name' => 'rep:repoPolicy',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => NULL,
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Policy',
                        ),
                    ),
                ),
            ),
            48 =>
            array(
                'name' => 'rep:RetentionManageable',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:RetentionManageable',
                        'name' => 'rep:retentionPolicy',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 0,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:RetentionManageable',
                        'name' => 'rep:hold',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 5,
                        'requiredType' => 0,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            49 =>
            array(
                'name' => 'rep:User',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'rep:Authorizable',
                    1 => 'rep:Impersonatable',
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:User',
                        'name' => 'rep:password',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:User',
                        'name' => 'rep:disabled',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 1,
                        'multiple' => false,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            50 =>
            array(
                'name' => 'rep:VersionReference',
                'isAbstract' => false,
                'isMixin' => true,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                ),
                'declaredPropertyDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:VersionReference',
                        'name' => 'rep:versions',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 1,
                        'requiredType' => 9,
                        'multiple' => true,
                        'fullTextSearchable' => true,
                        'queryOrderable' => true,
                        'availableQueryOperators' =>
                        array(
                            0 => 'jcr.operator.equal.to',
                            1 => 'jcr.operator.not.equal.to',
                            2 => 'jcr.operator.greater.than',
                            3 => 'jcr.operator.greater.than.or.equal.to',
                            4 => 'jcr.operator.less.than',
                            5 => 'jcr.operator.less.than.or.equal.to',
                            6 => 'jcr.operator.like',
                        ),
                    ),
                ),
                'declaredNodeDefinitions' =>
                array(
                ),
            ),
            51 =>
            array(
                'name' => 'rep:nodeTypes',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:nodeTypes',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:nodeType',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:nodeType',
                        ),
                    ),
                ),
            ),
            52 =>
            array(
                'name' => 'rep:root',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => true,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:unstructured',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:root',
                        'name' => 'jcr:system',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => false,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:system',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:system',
                        ),
                    ),
                ),
            ),
            53 =>
            array(
                'name' => 'rep:system',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => true,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:system',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => false,
                        'onParentVersion' => 5,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:base',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:base',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:system',
                        'name' => 'jcr:versionStorage',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:versionStorage',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:versionStorage',
                        ),
                    ),
                    2 =>
                    array(
                        'declaringNodeType' => 'rep:system',
                        'name' => 'jcr:activities',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:Activities',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Activities',
                        ),
                    ),
                    3 =>
                    array(
                        'declaringNodeType' => 'rep:system',
                        'name' => 'jcr:configurations',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:Configurations',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:Configurations',
                        ),
                    ),
                    4 =>
                    array(
                        'declaringNodeType' => 'rep:system',
                        'name' => 'jcr:nodeTypes',
                        'isAutoCreated' => false,
                        'isMandatory' => true,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:nodeTypes',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:nodeTypes',
                        ),
                    ),
                ),
            ),
            54 =>
            array(
                'name' => 'rep:versionStorage',
                'isAbstract' => false,
                'isMixin' => false,
                'isQueryable' => true,
                'hasOrderableChildNodes' => false,
                'primaryItemName' => NULL,
                'declaredSuperTypeNames' =>
                array(
                    0 => 'nt:base',
                ),
                'declaredPropertyDefinitions' =>
                array(
                ),
                'declaredNodeDefinitions' =>
                array(
                    0 =>
                    array(
                        'declaringNodeType' => 'rep:versionStorage',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'nt:versionHistory',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'nt:versionHistory',
                        ),
                    ),
                    1 =>
                    array(
                        'declaringNodeType' => 'rep:versionStorage',
                        'name' => '*',
                        'isAutoCreated' => false,
                        'isMandatory' => false,
                        'isProtected' => true,
                        'onParentVersion' => 6,
                        'allowsSameNameSiblings' => false,
                        'defaultPrimaryTypeName' => 'rep:versionStorage',
                        'requiredPrimaryTypeNames' =>
                        array(
                            0 => 'rep:versionStorage',
                        ),
                    ),
                ),
            ),
        );
    }
}
