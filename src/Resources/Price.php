<?php

namespace WSW\LojaIntegrada\Resources;

use WSW\LojaIntegrada\Resources\BaseResource;
use WSW\LojaIntegrada\Client\LojaIntegradaException;

/**
 * Class Price
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Price extends BaseResource
{

    /**
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/produto_preco');
        return $this;
    }

    /**
     * @param array $fields
     * @exception LojaIntegradaException
     * @return void
     */
    public function save(array $fields = [])
    {
        throw new LojaIntegradaException('Feature not supported by API');
    }
}
