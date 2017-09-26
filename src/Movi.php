<?php

namespace Mibici;

class Movi implements MoviInterface {

    protected $dni, $id, $saldo, $plan, $viajesdisponibles;

    protected $tiposdeplan = array('NoPlan' => [0,0], 'Ocasional' => [2,10], 'Semanal' => [14,50], 'Mensual' => [60,100]); // ¡Preliminarísimo! (Viajes,Precio)

    public function __construct($dni, $id){
        $this->dni = $dni;
        $this->id = $id;
        $this->saldo = 0;
        $this->viajesdisponibles = 0;
        $this->comprarPlan('NoPlan');
    }

    public function getDNI() {
        return $this->dni;
    }

    public function getID() {
        return $this->id;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getPlan() {
        return $this->plan;
    }

    public function getTiposDePlan() {
        return $this->tiposdeplan;
    }

    public function getViajesDisponibles() {
        return $this->viajesdisponibles;
    }

    protected function agregarViajes($viajes) {
        $this->viajesdisponibles += $viajes;
    }

    public function agregarSaldo($dinero) {
        $this->saldo += $dinero;
    }

    protected function retirarSaldo($dinero) {
        $this->saldo -= $dinero;
    }

    public function comprarPlan($tipodeplan) {
        r = "";
        if(in_array($tipodeplan, $this->getTiposdeplan())) {
            $viajesdeplan = $this->getTiposdeplan()[$tipodeplan][0];
            $preciodeplan = $this->getTiposdeplan()[$tipodeplan][1];
            if($this->getSaldo() >= $preciodeplan) {
                $this->plan = $tipodeplan;
                $this->retirarSaldo($preciodeplan);
                $this->agregarViajes($viajesdeplan);
                r .= "Agregado el plan por $" . $preciodeplan . ".\n";
            } else {
                r .= "No hay suficiente saldo.\n";
            }
        } else {
            r .= "No existe el plan.\n";
        }
        r .= "Saldo actual: $" . $this->getSaldo() . ". Viajes disponibles: " . $this->getViajesdisponibles() . ".\n";
        return r;
    }

    public function usarViaje(ViajeInterface $viaje) {
        $fecha = new DateTime();
        $viaje->iniciar(BicicletaInterface $bici, EstacionInterface $estacion, $this, $fecha->getTimestamp());
        if($viaje->datos()['dni_pasajero'] == $this->DNI) { // Condicion de que funciona el viaje, por ahora.
            $this->viajesdisponibles--;
            return True;
        } else {
            return False;
        }
    }

}
