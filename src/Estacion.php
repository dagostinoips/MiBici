<?php

namespace Mibici;

class Estacion implements EstacionInterface {

    protected $estado = True;
    
    public function sacarBici(BicicletaInterface $bici) {

    }

    public function dejarBici(BicicletaInterface $bici) {

    }

    public function anclajesDisponibles() {

    }

    public function anclajesTotales() {

    }

    public function bicicletasDisponibles() {

    }

    public function enServicio() {

        return $this->estado;
    }

    public function desactivarEstacion() { 

        $this->estado = False;
    }

    public function activarEstacion() {

        $this->estado = True;
    }
}
