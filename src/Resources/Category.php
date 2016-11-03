<?php

namespace WSW\LojaIntegrada\Resources;

/**
 * Class Category
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Category extends BaseResource
{
    /**
     * SetUp Category.
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/categoria');

        $this->validator
            ->requirePresence('nome')
            ->notEmpty('nome', 'Required field');

        return $this;
    }
}
