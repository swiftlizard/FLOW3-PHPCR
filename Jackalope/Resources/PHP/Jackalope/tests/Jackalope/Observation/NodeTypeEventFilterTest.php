<?php

namespace Jackalope\Observation;

use Jackalope\TestCase,
    Jackalope\Observation\Event,
    Jackalope\Observation\Filter\NodeTypeEventFilter;


/**
 * Unit tests for the EventJournal
 */
class NodeTypeEventFilterTest extends TestCase
{
    public function testFilter()
    {
        $filter = $this->getFilter($this->getMyNodeMock(true), array('nt:unstructured'));
        $this->assertFilterMatch($filter, true);

        $filter = $this->getFilter($this->getMyNodeMock(false), array('nt:unstructured'));
        $this->assertFilterMatch($filter, false);
    }

    protected function assertFilterMatch(NodeTypeEventFilter $filter, $expectedResult)
    {
        $event = new Event();
        $event->setPath('/some/unexisting/path');
        $this->assertEquals($expectedResult, $filter->match($event));
    }

    protected function getFilter($node, $nodeTypes)
    {
        return new NodeTypeEventFilter($this->getMySessionMock($node), $nodeTypes);
    }

    /**
     * Returns a mock object for the Session.
     * @param \PHPCR\NodeInterface $node The node returned by getNode
     * @return \PHPCR\SessionInterface
     */
    public function getMySessionMock($node)
    {
        $session = $this->getSessionMock(array('getNode', 'nodeExists'));
        $session
            ->expects($this->any())
            ->method('getNode')
            ->will($this->returnValue($node));
        $session
            ->expects($this->any())
            ->method('nodeExists')
            ->will($this->returnValue(true));
        return $session;
    }

    /**
     * Get a Jackalope\Node mock object that will return $isNodeTypeResult when
     * isNodeType is called on it.
     * @param string $isNodeTypeResult
     * @return object
     */
    protected function getMyNodeMock($isNodeTypeResult)
    {
        $node = $this->getNodeMock(array('isNodeType'));
        $node
            ->expects($this->any())
            ->method('isNodeType')
            ->will($this->returnValue($isNodeTypeResult));
        return $node;
    }

}
