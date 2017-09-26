<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    
    protected $estado = True;
    protected $anclajes = 15;
    protected $aDisponible;
    protected $bicis;
    
    public function __construct($e, $b) {
        $this->estado = $e;
        $this->bicis = $b;
    }    
    
    public function sacarBici(BicicletaInterface $bici) {
        if ($this->bicis > 0) {
            $this->aDisponible = $this->aDisponible + 1;
            $this->bicis = $this->bicis - 1;
        }
        else {
            return "no se puede sacar la bici";
        }
    }

    public function dejarBici(BicicletaInterface $bici) {
        if ($this->aDisponible > 0) {
            $this->aDisponible = $this->aDisponible - 1;
            $this->bicis = $this->bicis + 1;
        }
        else {
            return "no se puede dejar la bici";
        }
    }

    public function anclajesDisponibles() {
        $this->aDisponible = $this->anclajes - $this->bicis;     
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
