<?php

namespace WSW\LojaIntegrada\Resources;

/**
 * Class Railings
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Railings extends BaseResource
{
    /**
     * SetUp Railings.
     * @return $this
     */
    protected function setUp()
    {
        $this->setEndPoint('/v1/grades');

        $this->validator
            ->requirePresence('nome')
            ->notEmpty('nome', 'Required field');

        return $this;
    }
}
