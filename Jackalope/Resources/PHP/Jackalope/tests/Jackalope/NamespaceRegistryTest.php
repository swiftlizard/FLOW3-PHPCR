<?php

namespace Jackalope;

class NamespaceRegistryTest extends TestCase
{
    /*************************************************************************/
    /* Fixtures
    /*************************************************************************/

    protected $defaultNamespaces = array(
            "jcr" => "http://www.jcp.org/jcr/1.0",
            "nt"  => "http://www.jcp.org/jcr/nt/1.0",
            "mix" => "http://www.jcp.org/jcr/mix/1.0",
            "xml" => "http://www.w3.org/XML/1998/namespace",
            ""    => ""
        );

    /**
     * Creates a Mock object of the dummy implementation of the TransportInterface.
     *
     * @return Jackalope\Transport\TransportInterface
     */
    public function getTransportMockFixture()
    {
        // this was TransportDummy before, but you can mock interfaces!
        $transport = $this->getMock('Jackalope\Transport\TransportInterface');
        return $transport;
    }

    /**
     * Create an object of the namespaceRegistry
     *
     * @param array $namespaces
     */
    public function getNamespaceRegistryFixture($namespaces,$getNamespaceHasToBeCalled = true)
    {
        if ($getNamespaceHasToBeCalled) {
            $expects = $this->once();
        } else {
            $expects = $this->any();
        }

        $factory = new \Jackalope\Factory;
        $transport = $this->getTransportMockFixture();
        $transport
            ->expects($expects)
            ->method('getNamespaces')
            ->will($this->returnValue($namespaces));
        $nsr = new NamespaceRegistry($factory, $transport);
        return $nsr;
    }

    /*************************************************************************/
    /* Tests
    /*************************************************************************/

    /**
     * @dataProvider constructorDataprovider
     * @covers Jackalope\NamespaceRegistry::__construct
     */
    public function testConstruct($expected, $namespaces)
    {
        $nsr = $this->getNamespaceRegistryFixture($namespaces,false);

        $this->assertAttributeInstanceOf('Jackalope\Transport\TransportInterface', 'transport', $nsr);
        //after construct, userNamespaces is supposed to be null due to lazyLoading
        $this->assertAttributeEquals(null, 'userNamespaces', $nsr);
        //after we get the prefixes, userNamespaces is supposed to have the userNamespaces
        $nsr->getPrefixes();
        $this->assertAttributeEquals($expected, 'userNamespaces', $nsr);
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::registerNamespace
     * @expectedException NotImplementedException
     */
    public function testRegisterNamespace()
    {
        $this->markTestIncomplete('Write operations are currently not supported.');
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::unregisterNamespace
     * @expectedException NotImplementedException
     */
    public function testUnregisterNamespace()
    {
        $this->markTestIncomplete('Write operations are currently not supported.');
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getPrefixes
     */
    public function testGetPrefixes()
    {
        $namespaces = array(
            'beastie' => 'http://beastie.lo/beastie/1.0',
        );

        $nsr = $this->getNamespaceRegistryFixture($namespaces);
        $expected = array( "jcr", "nt" , "mix", "xml", "", "beastie");

        $this->assertEquals($expected, $nsr->getPrefixes());
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getPrefix
     */
    public function testGetPrefixFromDefaultNamespace()
    {
        $nsr = $this->getNamespaceRegistryFixture(array(),false);
        $this->assertEquals("xml", $nsr->getPrefix("http://www.w3.org/XML/1998/namespace"));
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getPrefix
     */
    public function testGetPrefixFromUserNamespace()
    {
        $namespaces = array(
            'beastie' => 'http://beastie.lo/beastie/1.0',
        );
        $nsr = $this->getNamespaceRegistryFixture($namespaces);
        $this->assertEquals("beastie", $nsr->getPrefix("http://beastie.lo/beastie/1.0"));
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getPrefix
     * @expectedException \PHPCR\NamespaceException
     */
    public function testGetPrefixExpectingNamespaceException()
    {
        $namespaces = array(
            'beastie' => 'http://beastie.lo/beastie/1.0',
        );
        $nsr = $this->getNamespaceRegistryFixture($namespaces);
        $nsr->getPrefix("InvalidURI");
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getURIs
     */
    public function testGetUris()
    {
        $namespaces = array(
            'beastie' => 'http://beastie.lo/beastie/1.0',
        );

        $nsr = $this->getNamespaceRegistryFixture($namespaces);
        $expected = array(
            "http://www.jcp.org/jcr/1.0",
            "http://www.jcp.org/jcr/nt/1.0" ,
            "http://www.jcp.org/jcr/mix/1.0",
            "http://www.w3.org/XML/1998/namespace",
            "",
            "http://beastie.lo/beastie/1.0");

        $this->assertEquals($expected, $nsr->getURIs());
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getURI
     */
    public function testGetUriFromDefaultNamespace()
    {
        $nsr = $this->getNamespaceRegistryFixture(array());
        $this->assertEquals("http://www.w3.org/XML/1998/namespace", $nsr->getURI("xml"));
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getURI
     */
    public function testGetUriFromUserNamespace()
    {
        $namespaces = array(
            'beastie' => 'http://beastie.lo/beastie/1.0',
        );

        $nsr = $this->getNamespaceRegistryFixture($namespaces);
        $this->assertEquals('http://beastie.lo/beastie/1.0', $nsr->getURI('beastie'));
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::getURI
     * @expectedException \PHPCR\NamespaceException
     */
    public function testGetUriExpectingNamespaceException()
    {
        $nsr = $this->getNamespaceRegistryFixture(array());
        $nsr->getURI('beastie');
    }

    /**
     * @covers \Jackalope\NamespaceRegistry::checkPrefix
     */
    public function testCheckPrefix()
    {
        $factory = new \Jackalope\Factory;
        $prefix = 'beastie';
        $ns = $this->getNamespaceRegistryFixture(array(),false);

        $this->assertNull($ns->checkPrefix($prefix));
    }

    /**
     * @dataProvider checkPrefixDataprovider
     * @covers \Jackalope\NamespaceRegistry::checkPrefix
     * @expectedException \PHPCR\NamespaceException
     */
    public function testCheckPrefixExpexctingNamespaceException($prefix)
    {
        $factory = new \Jackalope\Factory;
        $ns = $this->getNamespaceRegistryFixture(array(),false);
        $ns->checkPrefix($prefix);
    }



    /*************************************************************************/
    /* Dataproivder
    /*************************************************************************/

    public static function constructorDataprovider()
    {
        return array(
            'prefix not in default namespaces' => array(
                array('beastie' => 'http://beastie.lo/beastie/1.0'),
                array('beastie' => 'http://beastie.lo/beastie/1.0'),
             ),
            'prefix in default namespaces' => array(
                 array(),
                 array('xml' => 'http://beastie.lo/xml/1.0')
             ),
        );
    }

    public static function checkPrefixDataprovider()
    {
        return array(
            'XML as prefix' => array('xml'),
            'prefix in list of default namespaces' => array('jcr'),
            'empty prefix' => array(''),
        );
    }

}



class NamespaceRegistryProxy extends \Jackalope\NamespaceRegistry
{
    public function checkPrefix($prefix)
    {
        return parent::checkPrefix($prefix);
    }
}
