<?php

namespace WSW\LojaIntegrada\Resources;

use WSW\LojaIntegrada\Client\LojaIntegradaException;

/**
 * Class Stock
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Stock extends BaseResource
{

    /**
     * SetUp Stock.
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/produto_estoque');
        return $this;
    }


    /**
     * @param array $fields
     * @throws LojaIntegradaException
     * @return void
     */
    public function save(array $fields = [])
    {
        throw new LojaIntegradaException('Feature not supported by API');
    }
}
