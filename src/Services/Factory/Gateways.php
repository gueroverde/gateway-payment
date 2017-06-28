<?php

namespace gueroverde\gatewayPayment\Services\Factory;

use gueroverde\gatewayPayment\Exceptions\General;
use Mockery\Exception;

/**
 * this class is the factory of gateways
 * Class Gateways
 * @package gueroverde\gatewayPayment\Services\Factory
 */
class Gateways
{
    /**
     * factory to create a instance of Gateway
     * @param string $gateway
     * @return \gueroverde\gatewayPayment\Gateways\IGateways
     * @author Miguel Ángel Sánchez Palafox <gueroverde@gmail.com>
     */
    public static function generate(string $gateway)
    {
        $namespace = '\\gueroverde\\gatewayPayment\\Gateways\\';
        $className = $namespace . $gateway;
        if (class_exists($className) === false) {
            throw new Exception(General::MSGDOESNTEXISTCLASSGATEWAY, General::DOESNTEXISTCLASSGATEWAY);
        }
        return new $className();
    }
}