<?php

namespace Omnipay\MollieDirect;

use Omnipay\Mollie\Gateway;


class PayPalGateway extends Gateway
{
    public function getName()
    {
        return 'Mollie Direct - PayPal';
    }

    /**
     * @param  array $parameters
     * @return \Omnipay\MollieDirect\Message\PayPalPurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MollieDirect\Message\PayPalPurchaseRequest', $parameters);
    }
}
