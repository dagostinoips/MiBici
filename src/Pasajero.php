<?php

namespace Mibici;

class Pasajero implements PasajeroInterface {

    protected $dni, $saldo, $plan, $viajesdisponibles;

    protected $tiposdeplan = array('NoPlan' => (0,0), 'Ocasional' => (2,10), 'Semanal' => (14,50), 'Mensual' => (60,100)); // ¡Preliminarísimo! (Viajes,Precio)

    public function __construct($dni){
        $this->dni = $dni;
        $this->saldo = 0;
        $this->viajesdisponibles = 0;
        $this->comprarPlan('NoPlan');
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getTiposdeplan(){
        return $this->tiposdeplan;
    }

    public function getViajesdisponibles(){
        return $this->viajesdisponibles;
    }

    public function comprarPlan($tipodeplan) {
        if(in_array($tipodeplan, $this->getTiposdeplan())) {
            $viajesdeplan = $this->getTiposdeplan()[$tipodeplan][0];
            $preciodeplan = $this->getTiposdeplan()[$tipodeplan][1];
            if($this->getSaldo() >= $preciodeplan) {
                $this->plan = $tipodeplan;
                $this->saldo -= $preciodeplan;
                $this->viajesdisponibles += $viajesdeplan;
                print_r("Agregado el plan por $" . $preciodeplan . ".\n");
            } else {
                print_r("No hay suficiente saldo.\n");
            }
        } else {
            print_r("No existe el plan.\n");
        }
        print_r("Saldo actual: $" . $this->getSaldo() . ". Viajes disponibles: " . $this->getViajesdisponibles() . ".\n")
    }

}