<?php

namespace gueroverde\gatewayPayment\Models;


class GatewayModel
{
    const CONEKTA = 'Conekta';
    const PAGOFACIL = 'PagoFacil';

    /**
     * @return array
     */
    public static function GatewaysAllowed()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}