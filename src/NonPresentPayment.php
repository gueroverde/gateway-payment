<?php
namespace gueroverde\gatewayPayment;

use gueroverde\gatewayPayment\Contracts\INonPresent;
use gueroverde\gatewayPayment\Contracts\Gateways;

/**
 * point of entry to do charge and refush in NonPresent Charges
 * Class NonPresentPayment
 * @package gueroverde\gatewayPayment
 */
class NonPresentPayment implements INonPresent
{
    protected $gateway;

    protected $environment;

    public function charge(array $data)
    {
        // TODO: Implement charge() method.
    }

    /**
     * @param string $gateway
     * @param string $environment
     * @return \Exception when occured exception
     */
    public function setGateway(string $gateway,string $environment):\Exception
    {
        if(in_array($gateway,Gateways::GatewaysAllowed)===false)
        {
            throw new \Exception('Doesnt identified gateway');
        }
    }
}