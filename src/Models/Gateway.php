<?php

namespace gueroverde\gatewayPayment\Models;

class Gateway
{
    const CONEKTA = 'Conekta';
    const PAGOFACIL = 'PagoFacil';
    const OPENPAY = 'OpenPay';

    /**
     * @return array
     */
    public function allowed()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
