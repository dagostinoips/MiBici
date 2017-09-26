<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class BicicletaTest extends TestCase {
    
    public function testEstacionEnServicio() {

        $bici = new Bicicleta;
        
        $this-> assertEquals($bici->tiempoEnUso(),$this->tiempo,"La funcion no devuelve el tiempo en uso guardado en la variable tiempo");
        $this-> assertEquals($bici->estado(),$this->status,"La funcion no devuelve el estado de la bicicleta guardado en la variable status");
        $this->assertInternalType( "bool", $this->estado() );
    }
}
