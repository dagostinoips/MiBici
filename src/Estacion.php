<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    protected $bicisDisponibles;

    public function sacarBici(BicicletaInterface $bici) {
        $pos = array_search($bici->patente, $this->bicisDisponibles);
        unset ($this->bicisDisponibles[$pos]);
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
        return TRUE;
    }

}
