<?php

namespace Commerce\Gateways\MollieDirect;

use Commerce\Gateways\OffsiteGatewayAdapter;

class IdealGatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "MollieDirect_Ideal";
    }
}
