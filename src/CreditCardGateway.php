<?php

namespace Omnipay\MollieDirect;

use Omnipay\Mollie\Gateway;


class CreditCardGateway extends Gateway
{
    public function getName()
    {
        return 'Mollie Direct - CreditCard';
    }

    /**
     * @param  array $parameters
     * @return \Omnipay\MollieDirect\Message\CreditCardPurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MollieDirect\Message\CreditCardPurchaseRequest', $parameters);
    }
}
