<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class BicicletaTest extends TestCase {
    
    public function testEstacionEnServicio() {

        $bici = new Bicicleta;
    
        $this->assertInternalType( "bool", $this->estado() );
    }
}
