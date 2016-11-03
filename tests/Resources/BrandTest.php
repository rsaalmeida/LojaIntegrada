<?php
namespace WSW\LojaIntegrada\Resources;

use PHPUnit_Framework_TestCase;
use WSW\LojaIntegrada\Environments\Production;
use WSW\LojaIntegrada\Credentials;

/**
 * Class BrandTest
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class BrandTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Brand
     */
    private $brand;

    private $resultEndPoint = '/v1/marca';

    protected function setUp()
    {
        $this->credentials = new Credentials(
            '0a0000a0-aaa0-0000-a000-aa0a000000aa',
            '0a0000a0-aaa0-0000-a000-aa0a000000aB',
            new Production()
        );

        $this->brand = new Brand($this->credentials);
    }

    public function testConstructShouldConfigureTheAttributes()
    {
        $this->assertAttributeEquals($this->resultEndPoint, 'endPoint', $this->brand);
    }

    public function testMethodGetEndPoint()
    {
        $this->assertEquals($this->resultEndPoint, $this->brand->getEndPoint());
    }

    public function testMethodSetEndPoint()
    {
        $newEndPoint = 'xpto/Test';
        $this->brand->setEndPoint($newEndPoint);

        $this->assertEquals($newEndPoint, $this->brand->getEndPoint());
        $this->assertAttributeEquals($newEndPoint, 'endPoint', $this->brand);
    }
}
