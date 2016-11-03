<?php
namespace WSW\LojaIntegrada\Resources;

use PHPUnit_Framework_TestCase;
use WSW\LojaIntegrada\Environments\Production;
use WSW\LojaIntegrada\Credentials;

/**
 * Class ProductsTest
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ProductsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Products
     */
    private $service;

    /**
     * @var string
     */
    private $resultEndPoint = '/v1/produto';

    /**
     * SetUp Test
     */
    protected function setUp()
    {
        $this->credentials = new Credentials(
            '0a0000a0-aaa0-0000-a000-aa0a000000aa',
            '0a0000a0-aaa0-0000-a000-aa0a000000aB',
            new Production()
        );

        $this->service = new Products($this->credentials);
    }


    public function testConstructShouldConfigureTheAttributes()
    {
        $this->assertAttributeEquals($this->resultEndPoint, 'endPoint', $this->service);
    }

    public function testMethodGetEndPoint()
    {
        $this->assertEquals($this->resultEndPoint, $this->service->getEndPoint());
    }

    public function testMethodSetEndPoint()
    {
        $newEndPoint = 'xpto/Test';
        $this->service->setEndPoint($newEndPoint);

        $this->assertEquals($newEndPoint, $this->service->getEndPoint());
        $this->assertAttributeEquals($newEndPoint, 'endPoint', $this->service);
    }
}
