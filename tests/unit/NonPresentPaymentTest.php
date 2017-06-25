<?php

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
        $payment = Mockery::mock(gueroverde\gatewayPayment\NonPresentPayment::class);
        $payment->shouldReceive('setGateway')->once()->andThrow(\Exception::class,'Doesnt identified gateway');
        $this->expectException(\Exception::class);
        var_dump(typeOf($payment)); exit();
        $payment->setGateway('wrong gateway','prod');
    }
}