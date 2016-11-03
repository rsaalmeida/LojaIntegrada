<?php
namespace WSW\LojaIntegrada\Resources;

use PHPUnit_Framework_TestCase;
use WSW\LojaIntegrada\Environments\Production;
use WSW\LojaIntegrada\Credentials;

/**
 * Class CategoryTest
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CategoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Category
     */
    private $category;

    private $resultEndPoint = '/v1/categoria';

    protected function setUp()
    {
        $this->credentials = new Credentials(
            '0a0000a0-aaa0-0000-a000-aa0a000000aa',
            '0a0000a0-aaa0-0000-a000-aa0a000000aB',
            new Production()
        );

        $this->category = new Category($this->credentials);
    }

    public function testConstructShouldConfigureTheAttributes()
    {
        $this->assertAttributeEquals($this->resultEndPoint, 'endPoint', $this->category);
    }

    public function testMethodGetEndPoint()
    {
        $this->assertEquals($this->resultEndPoint, $this->category->getEndPoint());
    }

    public function testMethodSetEndPoint()
    {
        $newEndPoint = 'xpto/Test';
        $this->category->setEndPoint($newEndPoint);

        $this->assertEquals($newEndPoint, $this->category->getEndPoint());
        $this->assertAttributeEquals($newEndPoint, 'endPoint', $this->category);
    }
}
