<?php

namespace Omnipay\MollieDirect;

use Omnipay\Mollie\Gateway;

class IdealGateway extends Gateway
{
    public function getName()
    {
        return 'Mollie Direct - Ideal';
    }

    /**
     * @param  array $parameters
     * @return \Omnipay\MollieDirect\Message\IdealPurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MollieDirect\Message\IdealPurchaseRequest', $parameters);
    }
}
