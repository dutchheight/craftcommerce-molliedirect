<?php
namespace Omnipay\MollieDirect\Message;

/**
 * Mollie Purchase Request
 *
 * @method \Omnipay\Mollie\Message\PurchaseResponse send()
 */
class IdealPurchaseRequest extends \Omnipay\Mollie\Message\PurchaseRequest
{

    public function getPaymentMethod() {
        return 'ideal';
    }
}
