<?php
namespace Omnipay\MollieDirect\Message;

/**
 * Mollie Purchase Request
 *
 * @method \Omnipay\Mollie\Message\PurchaseResponse send()
 */
class CreditCardPurchaseRequest extends \Omnipay\Mollie\Message\PurchaseRequest
{

    public function getPaymentMethod() {
        return 'creditcard';
    }
}
