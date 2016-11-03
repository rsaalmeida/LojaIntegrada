<?php

namespace WSW\LojaIntegrada\Resources;

/**
 * Class Brand
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Brand extends BaseResource
{

    /**
     * SetUp Brand
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/marca');

        $this->validator
            ->requirePresence('nome')
            ->notEmpty('nome', 'Required field');

        return $this;
    }
}
