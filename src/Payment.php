<?php
namespace gueroverde\gatewayPayment;

use Dotenv\Dotenv;

class Payment
{
    /**
    * var gueroverde\gatewayPayment\Contracts\VirtualPaymentInterface $virtualPayment
    */
    protected $virtualPayment;

    public function __construct()
    {
        $dotenv = new Dotenv(__DIR__);
        $dotenv->load();
        $this->validateEnvironment($dotenv);
        $this->setVirtualPayment();
    }

    protected function setVirtualPayment()
    {
        $this->virtualPayment = new VirtualPayment();
        $this->virtualPayment->initGateway(getenv('virtualgateway'));
    }

    
    public function charge(array $data)
    {
        return $this->virtualPayment->charge($data);
    }

    protected function validateEnvironment(Dotenv $dotenv)
    {
        $dotenv->required(['virtualgateway', 'gatewayEnvironmnet']);
    }
}
