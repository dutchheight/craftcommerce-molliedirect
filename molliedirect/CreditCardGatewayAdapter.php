<?php
namespace Commerce\Gateways\MollieDirect;

use Commerce\Gateways\OffsiteGatewayAdapter;

class CreditCardGatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "MollieDirect_CreditCard";
    }
}
