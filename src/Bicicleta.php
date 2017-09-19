<?php

namespace Mibici;

class Bicicleta implements BicicletaInterface {

    protected $tiempo;
    protected $status;

    public function patente(){}

    public function tiempoEnUso(){

        return $this->tiempo;
    }

    public function estado(){

        return $this->status;
    }

}
