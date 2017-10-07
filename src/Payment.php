<?php
namespace gueroverde\gatewayPayment;

class Payment
{
    /**
    * var gueroverde\gatewayPayment\Contracts\VirtualPaymentInterface $virtualPayment
    */
    protected $virtualPayment;

    public function __construct()
    {
        $dotenv = new Dotenv\Dotenv(__DIR__);
        $dotenv->load();
        $this->virtualPayment = new VirtualPayment();
        $this->setVirtualPayment();
    }

    protected function setVirtualPayment()
    {
        $this->virtualPayment->initGateway(getenv('virtualgateway'));
    }

    
    public function charge(array $data)
    {
        return $this->virtualPayment->charge($data);
    }
}
