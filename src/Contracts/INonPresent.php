<?php
namespace gueroverde\gatewayPayment\Contracts;

/**
 * method to interactue with APis
 * Interface INonPresent
 * @package gueroverde\gatewayPayment\Contracts
 */
interface INonPresent
{
    /**
     * Method to do a charge to data
     */
    public function charge(array $data);
}
