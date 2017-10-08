<?php

namespace gueroverde\gatewayPayment\tests\unit;

use Codeception\Util\Stub;
use gueroverde\gatewayPayment\Exceptions\General;
use gueroverde\gatewayPayment\Models\Gateway;
use gueroverde\gatewayPayment\VirtualPayment;

class VirtualPaymentTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSetGatewayNonExistGateway()
    {
        $GatewayModel = Stub::make(Gateway::class,[]);
        $payment = Stub::construct(VirtualPayment::class,['GatewayModel' => $GatewayModel]);
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage(General::MSGDOESNTIDENTIFIEDGATEWAY);
        $payment->initGateway('wrong gateway');
    }
}
