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

    public function testLoadOpenPayEnvironmentStage()
    {
        $dotenv = new \Dotenv\Dotenv($this->fixturesFolder,'OpenPayStage.env');
        $dotenv->overload();
        $this->assertSame('stage', getenv('gatewayEnvironmnet'));
        $this->assertSame('Openpay', getenv('virtualgateway')); 
    }

    public function testLoadOpenPayEnvironmentLive()
    {
        $dotenv = new \Dotenv\Dotenv($this->fixturesFolder,'OpenPayLive.env');
        $dotenv->overload();
        $this->assertSame('live', getenv('gatewayEnvironmnet'));
        $this->assertSame('Openpay', getenv('virtualgateway')); 
    }

    public function testLoadOpenPayEnvironmentLocal()
    {
        $dotenv = new \Dotenv\Dotenv($this->fixturesFolder,'OpenPayLocal.env');
        $dotenv->overload();
        $this->assertSame('local', getenv('gatewayEnvironmnet'));
        $this->assertSame('Openpay', getenv('virtualgateway')); 
    }

    public function testLoadOpenPayEnvironmentDontValidate()
    {
        
    }

    public function testChargeOpenPayCharge()
    {

    }
}
