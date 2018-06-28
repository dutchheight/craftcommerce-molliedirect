<?php
namespace Commerce\Gateways\MollieDirect;

use Commerce\Gateways\OffsiteGatewayAdapter;

class PayPalGatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "MollieDirect_PayPal";
    }
}
