<?php
namespace gueroverde\gatewayPayment\Gateways;

use gueroverde\gatewayPayment\Contracts\VirtualPaymentInterface;

class OpenPay implements VirtualPaymentInterface, IGateways
{

    public function charge(array $data)
    {
        // TODO: Implement charge() method.
    }
}
