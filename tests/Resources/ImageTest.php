<?php
namespace WSW\LojaIntegrada\Resources;

use PHPUnit_Framework_TestCase;
use WSW\LojaIntegrada\Environments\Production;
use WSW\LojaIntegrada\Credentials;
use WSW\LojaIntegrada\Client\LojaIntegradaException;

/**
 * Class ImageTest
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ImageTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Image
     */
    private $image;

    /**
     * @var string
     */
    private $resultEndPoint = '/v1/produto_imagem';

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

        $this->image = new Image($this->credentials);
    }


    public function testConstructShouldConfigureTheAttributes()
    {
        $this->assertAttributeEquals($this->resultEndPoint, 'endPoint', $this->image);
    }

    public function testMethodGetEndPoint()
    {
        $this->assertEquals($this->resultEndPoint, $this->image->getEndPoint());
    }

    public function testMethodSetEndPoint()
    {
        $newEndPoint = 'xpto/Test';
        $this->image->setEndPoint($newEndPoint);

        $this->assertEquals($newEndPoint, $this->image->getEndPoint());
        $this->assertAttributeEquals($newEndPoint, 'endPoint', $this->image);
    }

    public function testValidatorMimeType()
    {
        $this->assertTrue($this->image->validateMimeType('image/jpeg', []));
        $this->assertFalse($this->image->validateMimeType('image/bmp', []));
    }


    /**
     * @expectedException RuntimeException
     */
    public function testExceptionUpdate()
    {
        $this->image->update(1, []);
    }
}
