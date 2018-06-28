<?php

namespace Craft;

class MollieDirectPlugin extends BasePlugin
{

    private $commerceInstalled = false;
    public function init()
    {
        $commerce = craft()->db->createCommand()
            ->select('id')
            ->from('plugins')
            ->where("class = 'Commerce'")
            ->queryScalar();
        if($commerce){
            $this->commerceInstalled = true;
        }
    }

    public function getName()
    {
        return "Mollie Direct";
    }

    /**
     * Returns the plugin’s version number.
     *
     * @return string The plugin’s version number.
     */
    public function getVersion()
    {
        return "1.0";
    }

    /**
     * Returns the plugin developer’s name.
     *
     * @return string The plugin developer’s name.
     */
    public function getDeveloper()
    {
        return "Dutch Height";
    }

    /**
     * Returns the plugin developer’s URL.
     *
     * @return string The plugin developer’s URL.
     */
    public function getDeveloperUrl()
    {
        return "#";
    }

    public function commerce_registerGatewayAdapters(){
        if($this->commerceInstalled) {
            require __DIR__ . '/vendor/autoload.php';
            require_once __DIR__.'/IdealGatewayAdapter.php';
            require_once __DIR__.'/PayPalGatewayAdapter.php';
            require_once __DIR__.'/CreditCardGatewayAdapter.php';
            
            // require_once __DIR__.'/src/Molliedirect_Ideal.php';
            
            return [
                '\Commerce\Gateways\MollieDirect\IdealGatewayAdapter',
                '\Commerce\Gateways\MollieDirect\PayPalGatewayAdapter',
                '\Commerce\Gateways\MollieDirect\CreditCardGatewayAdapter'
            ];
        }
        return [];
    }
}
