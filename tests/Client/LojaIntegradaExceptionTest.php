<?php
namespace WSW\LojaIntegrada\Client;

use PHPUnit_Framework_TestCase;


/**
 * Class LojaIntegradaExceptionTest
 * @package WSW\LojaIntegrada\Client
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class LojaIntegradaExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testInstanceOfException()
    {
        $this->assertInstanceOf('RuntimeException', new LojaIntegradaException());
    }
}
