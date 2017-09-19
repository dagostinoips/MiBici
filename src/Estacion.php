<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    
    protected cantidadBicisDisponibles;
    protected bicisDisponibles;

    public function sacarBici(BicicletaInterface $bici) {
        $this->cantidadBicisDisponibles -= 1;
        $pos = array_search ($bici->patente, $this->bicisDisponibles);
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
