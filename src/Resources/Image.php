<?php

namespace WSW\LojaIntegrada\Resources;

use WSW\LojaIntegrada\Resources\BaseResource;
use WSW\LojaIntegrada\Client\LojaIntegradaException;

/**
 * Class Image
 * @package WSW\LojaIntegrada\Resources
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Image extends BaseResource
{
    /**
     * @var string
     */
    protected $endPoint = '/v1/produto_imagem';

    /**
     * @var array
     */
    protected $mimeType = ['image/jpeg', 'image/png', 'image/gif'];


    /**
     * SetUp Image
     */
    protected function __setUp()
    {
        $this->validator
            ->requirePresence('imagem_url')
            ->notEmpty('imagem_url', 'Required field')

            ->requirePresence('produto')
            ->notEmpty('produto', 'Required field')

            ->requirePresence('principal')
            ->add('principal', 'boolean', [
                'rule' => 'boolean'
            ])
            ->requirePresence('mime')
            ->add('mime', 'mimeType', [
                'rule' => [$this, 'validateMimeType'],
                'message' => sprintf(
                    'The value provided is invalid. check the valid values: %s',
                    implode(', ', $this->mimeType)
                )
            ]);
    }


    /**
     * @param string $value
     * @param array $context
     * @return bool
     */
    public function validateMimeType($value, array $context)
    {
        return (bool) in_array($value, $this->mimeType);
    }

    /**
     * @param int   $id
     * @param array $fields
     * @throws      LojaIntegradaException
     * @return      void
     */
    public function update($id, array $fields)
    {
        throw new LojaIntegradaException('Feature not supported by API');
    }
}
