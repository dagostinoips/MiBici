<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {

    public function testEstacionEnServicio() {
        // Las estaciones nuevas siempre están en servicio.
        $estacion = new Estacion;
        $this->assertTrue($estacion->enServicio());
    }

}

class PasajeroTest extends TestCase {
    public function testPasajeroEsInstanciado() {
        $pasajero_test = new Pasajero("12345678");
        $this->assertTrue($pasajero_test->getViajesDisponibles() == 0);
    }

    public function testPasajeroCargaSaldoYCompraViajes() {
        $pasajero_test = new Pasajero("12345678");
        $pasajero_test->agregarSaldo(100);
        $pasajero_test->comprarPlan("Mensual");
        $this->assertTrue($pasajero_test->getViajesDisponibles() == 60);
    }
}
