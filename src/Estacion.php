<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    
    protected cantidadBicisDisponibles;
    protected bicisDisponibles;

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
        return TRUE;
    }

}
