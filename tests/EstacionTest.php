<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {

    public function testEstacionEnServicio() {
        // Las estaciones nuevas siempre están en servicio.
        $estacion = new Estacion();
        $estacion->desactivarEstacion();
        $this->assertFalse($estacion->enServicio());
        $estacion->activarEstacion();
        $this->assertTrue($estacion->enServicio());
    }

}
