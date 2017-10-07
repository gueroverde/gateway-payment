<?php
namespace gueroverde\gatewayPayment\tests;

class PaymentTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->fixturesFolder = dirname(__DIR__).'/unit/fixtures/env';    
    }

    protected function _after()
    {
    }

    public function testLoadOpenPayVirtualPayment()
    {
        $dotenv = new \Dotenv\Dotenv($this->fixturesFolder,'OpenPay.env');
        $dotenv->load();
        $this->assertSame('stage', getenv('gatewayEnvironmnet'));
        $this->assertSame('Openpay', getenv('virtualgateway')); 
    }

    public function testChargeOpenPayCharge()
    {

    }
}
