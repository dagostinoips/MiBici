<?php
namespace Mibici;
use PHPUnit\Framework\TestCase;
class EstacionTest extends TestCase {
    public function testEstacionEnServicio() {
        // Las estaciones nuevas siempre están en servicio.
        // Primero en el construct es anclajes disponibles y el segundo es anclajes totales
        $anclajes = 18;
        $estacion = new Estacion($anclajes);
        $this->assertEquals($estacion->anclajesDisponibles(),$anclajes);
        $this->assertEquals($estacion->anclajesTotales(),$anclajes);
        $this->assertTrue($estacion->enServicio());
    }
}
