<?php

namespace gueroverde\gatewayPayment;

use gueroverde\gatewayPayment\Contracts\INonPresent;
use gueroverde\gatewayPayment\Exceptions\General;
use gueroverde\gatewayPayment\Models\GatewayModel;
use gueroverde\gatewayPayment\Services\Factory\Gateways as FactoryGateways;

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
     * @return \Exception|Boolean when occured exception or boolean true when is ok
     */
    public function initGateway(string $gateway)
    {
        if (in_array($gateway, GatewayModel::GatewaysAllowed()) === false) {
            throw new \Exception(General::MSGDOESNTIDENTIFIEDGATEWAY);
        }

        $this->gateway = FactoryGateways::generate($gateway);
        return true;
    }
}