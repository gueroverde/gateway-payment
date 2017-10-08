<?php
namespace gueroverde\gatewayPayment\Contracts;

/**
 * method to interactue with APis
 * Interface VirtualPaymentInterface
 * @package gueroverde\gatewayPayment\Contracts
 */
interface VirtualPaymentInterface
{
    /**
     * Method to do a charge to data
     */
    public function charge(array $data);
}
