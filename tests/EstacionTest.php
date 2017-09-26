<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {

    public function testEstacionEnServicio() {
        // Las estaciones nuevas siempre están en servicio.

        // Primero en el construct es anclajes disponibles y el segundo es anclajes totales
        $anclajesdisp = 10;
        $anclajestota = 18;
        $bicisdisponibles = 3;
        $estacion = new Estacion($anclajesdisp,$anclajestota);
        $estacion->bicicletas=["aaa","bbb","ccc"];
        $this->assertEquals($estacion->anclajesDisponibles(),$anclajesdisp);
        $this->assertEquals($estacion->anclajesTotales(),$anclajestota);
      
        $estacion->desactivarEstacion();
        $this->assertFalse($estacion->enServicio());
        $estacion->activarEstacion();
        $this->assertTrue($estacion->enServicio());

        $this->assertEquals($estacion->bicicletasDisponibles() , $bicisdisponibles);
    }

}

class PasajeroTest extends TestCase {
    public function testPasajeroEsInstanciado() {
        $movi_test = new Movi("12345678", "1242145")
        $pasajero_test = new Pasajero($movi_test);
        $this->assertTrue($pasajero_test->movi->getViajesDisponibles() == 0);
    }

    public function testPasajeroCargaSaldoYCompraViajes() {
        $movi_test = new Movi("12345678", "1242145")
        $pasajero_test = new Pasajero($movi_test);
        $pasajero_test->movi->agregarSaldo(100);
        $pasajero_test->movi->comprarPlan("Mensual");
        $this->assertTrue($pasajero_test->movi->getViajesDisponibles() == 60);
    }
}
