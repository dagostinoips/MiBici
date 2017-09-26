<?php

namespace MiBici;

use PHPUnit\Framework\TestCase;

class PasajeroTest extends TestCase {
    public function testPasajero() {
        $tarjetula = new Movi(41635174,123463463);
        $pas = new Pasajero($tarjetula);
        $this->assertEquals($pas->moviId,$tarjetula->id);
    }
}
