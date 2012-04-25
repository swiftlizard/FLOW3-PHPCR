<?php

namespace Jackalope\Query;

use Jackalope\TestCase;

class SqlQueryTest extends TestCase
{
    protected $statement = 'statement';
    protected function getQuery($factory = null, $statement = null, $objectManager = null, $path = null)
    {
        if (! $factory) {
            $factory = new \Jackalope\Factory;
        }
        if (! $statement) {
            $statement = $this->statement;
        }
        if (! $objectManager) {
            $objectManager = $this->getObjectManagerMock();
        }

        return new SqlQuery($factory, $statement, $objectManager, $path);
    }

    public function testBindValue()
    {
        $this->markTestSkipped('TODO: implement');
    }

    public function testExecute()
    {
        $dummyData = 'x';
        $factory = $this->getMock('\Jackalope\Factory');
        $transport = $this->getMock('\Jackalope\Transport\QueryInterface');
        $om = $this->getMock('\Jackalope\ObjectManager', array('getNodeTypes'), array($factory, $transport, $this->getSessionMock()));

        $query = $this->getQuery($factory, null, $om);

        $transport->expects($this->once())
            ->method('query')
            ->with($query)
            ->will($this->returnValue($dummyData));
        $factory->expects($this->once())
                ->method('get')
                ->with('Query\QueryResult', array($dummyData, $om))
                ->will($this->returnValue('result'));

        $result = $query->execute();
        $this->assertEquals('result', $result);
    }
    public function testGetBindVariableNames()
    {
        $this->markTestSkipped('TODO: implement');
    }
    public function testLimit()
    {
        $query = $this->getQuery();
        $query->setLimit(37);
        $this->assertEquals(37, $query->getLimit());
    }
    public function testOffset()
    {
        $query = $this->getQuery();
        $query->setOffset(15);
        $this->assertEquals(15, $query->getOffset());
    }
    public function testGetStatementSql2()
    {
        $query = $this->getQuery();
        $this->assertEquals($this->statement, $query->getStatementSql2());
    }
    public function testGetStatement()
    {
        $query = $this->getQuery();
        $this->assertEquals($this->statement, $query->getStatement());
    }
    public function testGetLanguage()
    {
        $query = $this->getQuery();
        $this->assertEquals(\PHPCR\Query\QueryInterface::JCR_SQL2, $query->getLanguage());
    }

    public function testGetStoredQueryPath()
    {
        $query = $this->getQuery(null, null, null, '/path/query');
        $this->assertSame('/path/query', $query->getStoredQueryPath());
    }

    /**
     * @expectedException \PHPCR\ItemNotFoundException
     */
    public function testGetStoredQueryPathNotStored()
    {
        $query = $this->getQuery();
        $query->getStoredQueryPath();
    }
    public function testStoreAsNode()
    {
        $this->markTestSkipped('TODO: implement feature');
    }
}
