<?php
namespace gueroverde\gatewayPayment;

use gueroverde\gatewayPayment\Contracts\VirtualPaymentInterface;
use gueroverde\gatewayPayment\Exceptions\General;
use gueroverde\gatewayPayment\Models\Gateway;
use gueroverde\gatewayPayment\Services\Factory\Gateways as FactoryGateways;

/**
 * point of entry to do charge and refush in NonPresent Charges
 * Class VirtualPayment
 * @package gueroverde\gatewayPayment
 */
class VirtualPayment implements VirtualPaymentInterface
{
    /**
    * @var IGateways $gateway;
    */
    protected $gateway;

    /**
    * @var Gateway $GatewayModel;
    */
    protected $GatewayModel;

    /**
    * @var FactoryGateways $FactoryGateways;
    */
    protected $FactoryGateways;

    protected $environment;

    public function __construct(Gateway $GatewayModel)
    {
        $this->GatewayModel = $GatewayModel;
    }

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
        if (in_array($gateway, $this->GatewayModel->allowed()) === false) {
            throw new \Exception(General::MSGDOESNTIDENTIFIEDGATEWAY);
        }

        $this->gateway = $this->FactoryGateways->generate($gateway);
    }
}
