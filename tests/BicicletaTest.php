<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class BicicletaTest extends TestCase,Bicicleta {
    
    public function testEstacionEnServicio() {

        $bici = new Bicicleta;
        
        $this-> assertEquals($bici->tiempoEnUso(),$this->tiempo,"La funcion no devuelve el tiempo esperado");
        $this-> assertEquals($bici->estado(),$this->status,"La funcion no devuelve el estado esperado");
        $this->assertInternalType("bool", $this->status);
    }
}
