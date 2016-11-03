<?php

namespace WSW\LojaIntegrada\Resources;

/**
 * Class Products
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Products extends BaseResource
{
    /**
     * SetUp Products.
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/produto');
        return $this;
    }
}
