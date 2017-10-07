<?php

namespace gueroverde\gatewayPayment\Gateways;

use gueroverde\gatewayPayment\Contracts\VirtualPaymentInterface;

class PagoFacil implements VirtualPaymentInterface, IGateways
{

    public function charge(array $data)
    {
        // TODO: Implement charge() method.
    }
}
