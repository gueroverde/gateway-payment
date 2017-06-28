<?php

namespace gueroverde\gatewayPayment\tests\unit;

use Codeception\Util\Stub;
use gueroverde\gatewayPayment\Exceptions\General;

class NonPresentPaymentTest extends \Codeception\Test\Unit
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
        $payment = Stub::make(\gueroverde\gatewayPayment\NonPresentPayment::class, []);
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage(General::MSGDOESNTIDENTIFIEDGATEWAY);
        $payment->initGateway('wrong gateway');
    }
}