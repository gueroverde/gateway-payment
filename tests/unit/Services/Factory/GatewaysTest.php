<?php

namespace gueroverde\gatewayPayment\tests\unit\Services\Factory;

use Codeception\Util\Stub;
use gueroverde\gatewayPayment\Exceptions\General;
use gueroverde\gatewayPayment\Models\Gateway;

class GatewaysTest extends \Codeception\Test\Unit
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
    public function testGenerateWhenDoesntExistGateway()
    {
        $payment = Stub::make(\gueroverde\gatewayPayment\Services\Factory\Gateways::class, []);
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage(General::MSGDOESNTEXISTCLASSGATEWAY);
        $payment::generate('wrong gateway');
    }

    public function testGenerateConektaInstance()
    {
        $payment = Stub::make(\gueroverde\gatewayPayment\Services\Factory\Gateways::class, []);
        $conektaClass = $payment::generate(Gateway::CONEKTA);
        $this->assertInstanceOf(\gueroverde\gatewayPayment\Gateways\Conekta::class, $conektaClass);
    }

    public function testGeneratePagofacilInstance()
    {
        $payment = Stub::make(\gueroverde\gatewayPayment\Services\Factory\Gateways::class, []);
        $pagofacilClass = $payment::generate(Gateway::PAGOFACIL);
        $this->assertInstanceOf(\gueroverde\gatewayPayment\Gateways\PagoFacil::class, $pagofacilClass);
    }
}