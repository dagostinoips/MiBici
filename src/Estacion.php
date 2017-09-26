<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    protected $anclajesTotales;
    protected $anclajesLibres;
    protected $bicis = array();
    public function __construct($anclajesTotalesxD){
    $this->anclajesTotales = $anclajesTotalesxD;
    $this->anclajesLibres = $this->anclajesTotales;
    $this->bicis = ();
    }

    public function sacarBici(BicicletaInterface $bici) {

    }

    public function dejarBici(BicicletaInterface $bici) {

    }

    public function anclajesDisponibles() {
        return $this->anclajesLibres;
    }

    public function anclajesTotales() {
        return $this->anclajesTotales;  
    }

    public function bicicletasDisponibles() {
        print_r($bicis);
        return;
    }

    public function enServicio() {
        return TRUE;
    }

}
