<?php

namespace gueroverde\gatewayPayment\Models;

class Gateway
{
    const CONEKTA = 'Conekta';
    const PAGOFACIL = 'PagoFacil';

    /**
     * @return array
     */
    public function allowed()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
