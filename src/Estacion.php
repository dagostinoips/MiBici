<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    protected $anclajeLibres;
    protected $anclajeTotales;
    
    
    public function sacarBici(BicicletaInterface $bici) {
        
    }

    public function dejarBici(BicicletaInterface $bici) {
        array_push ($this->bicis, $bici => $bici->patente);
    }

    public function anclajesDisponibles() {
        return $this->anclajeLibres;
    }

    public function anclajesTotales() {
        return $this->anclajeTotales; 
    }

    public function bicicletasDisponibles() {
        return $this->anclajeTotales - $this->anclajeLibres;
    }

    public function enServicio() {
        return TRUE;
    }
    
    public function __construct($a,$b){
        $this->anclajeLibres=$a;
        $this->anclajeTotales=$b;
    }

}
