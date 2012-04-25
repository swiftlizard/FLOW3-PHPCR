<?php

namespace Jackalope\Observation;

use Jackalope\TestCase,
    Jackalope\Observation\Event,
    Jackalope\Observation\Filter\UuidEventFilter;


/**
 * Unit tests for the EventJournal
 */
class UuidEventFilterTest extends TestCase
{
    public function setUp()
    {
    }

    public function testFilter()
    {
        $filter = $this->getFilter(array('1', '2', '3'));
        $this->assertTrue($filter->match($this->getEvent('/1/2')));
        $this->assertTrue($filter->match($this->getEvent('/2/2')));
        $this->assertTrue($filter->match($this->getEvent('/3/2')));
        $this->assertFalse($filter->match($this->getEvent('/1/2/3')));
        $this->assertFalse($filter->match($this->getEvent('/4/1')));
        $this->assertFalse($filter->match($this->getEvent('/1')));
    }

    public function testNoMatchFilter()
    {
        $filter = $this->getFilter(array());
        $this->assertFalse($filter->match($this->getEvent('/1/2')));
        $this->assertFalse($filter->match($this->getEvent('/2/2')));
        $this->assertFalse($filter->match($this->getEvent('/3/2')));
        $this->assertFalse($filter->match($this->getEvent('/1/2/3')));
        $this->assertFalse($filter->match($this->getEvent('/4/1')));
        $this->assertFalse($filter->match($this->getEvent('/1')));
    }

    /**
     * Get an Event with the given path
     * @param string $path
     * @return Event
     */
    protected function getEvent($path)
    {
        $event = new Event();
        $event->setPath($path);
        return $event;
    }

    /**
     * Get a UuidEventFilter matching the given UUIDs.
     * Additionally set the session getNodesByIdentifier to return an array of nodes
     * that will match the requirements of the filter
     * @param $uuids
     * @return Filter\UuidEventFilter
     */
    protected function getFilter($uuids)
    {
        $nodes = array();
        foreach ($uuids as $uuid) {
            $nodes[] = $this->getMyNodeMock($uuid);
        }
        return new UuidEventFilter($this->getMySessionMock($nodes), $uuids);
    }

    /**
     * Returns a mock object for the Session.
     * @param array $nodesByIdentifier An array of nodes returned by the function getNodesByIdentifier
     * @return \Jackalope\Session
     */
    public function getMySessionMock($nodesByIdentifier)
    {
        $session = $this->getSessionMock(array('getNodesByIdentifier'));
        $session
            ->expects($this->any())
            ->method('getNodesByIdentifier')
            ->will($this->returnValue($nodesByIdentifier));
        return $session;
    }

    /**
     * Get a Jackalope\Node mock object that will return "/uuid" as path
     * @param string $uuid
     * @return object
     */
    protected function getMyNodeMock($uuid)
    {
        $node = $this->getNodeMock(array('getPath'));
        $node
            ->expects($this->any())
            ->method('getPath')
            ->will($this->returnValue('/' . $uuid));
        return $node;
    }
}
