# craftcommerce-molliedirect
Adds different payment gateways for Mollie gateways

Currently supported gateways:

- Ideal
- Creditcard
- Paypal

Dont forget to enable these methode's in the Mollie Settings.

#installation
Add the plugin and install it.

After this you need to make a change to Commerce_PaymentsService.php found in plugins > commerce > services
Add `$handle == 'MollieDirect_PayPal' || $handle == 'MollieDirect_Ideal' || $handle == 'MollieDirect_CreditCard'` to the if

```
// If MOLLIE, the transactionReference will be theirs
// Netbanx Hosted requires the transactionReference is the same
// Authorize.net SIM https://github.com/thephpleague/omnipay-authorizenet/issues/19
// TODO: Move this into the gateway adapter.
$handle = $transaction->paymentMethod->getGatewayAdapter()->handle();
if ($handle == 'Mollie_Ideal' || $handle == 'Mollie' || $handle == 'MollieDirect_PayPal' || $handle == 'MollieDirect_Ideal' || $handle == 'MollieDirect_CreditCard' || $handle == 'NetBanx_Hosted' || $handle == 'AuthorizeNet_SIM') {
    $params['transactionReference'] = $transaction->reference;
}
```
