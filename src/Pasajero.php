<?php

namespace Mibici;

class Pasajero implements PasajeroInterface {
    protected $dni;
    protected $saldo;

    function __construct($doc,$dinero) {
        $this->dni=$doc;
        $this->saldo=$dinero;
    }
    public function dni(){
        return $this->dni;
    }
}


