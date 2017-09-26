<?php

namespace Mibici;

Class Viaje {
    
    protected $bici;
    protected $estacion;
    protected $pasajero;
    pretected $tiempoini;
    protected $tiempofin;
    protected $estacionini;
    protected $estacionfin;
    
    public function iniciar(
        BicicletaInterface $bici,
        EstacionInterface $estacion,
        PasajeroInterface $pasajero,
        $timestamp){
            
            $this->bici = $bici;
            $this->estacionini = $estacion;
            $this->pasajero = $pasajero;
            $this->tiempoini = $timestamp;
        
        }
        
    
    public function terminar(
        BicicletaInterface $bici,
        EstacionInterface $estacion,
        PasajeroInterface $pasajero,
        $timestamp){
        
            $this->estacionfin = $estacion;
            $this->tiempofin = $timestamp;
        
        }
    
    public function datos(){
    
        $datos = [
            'desde' => $this->estacionini->nombre,
            'hasta' => $this->estacionfin->nombre,
            'tiempo' => $this->tiempofin - $this->tiempoini,
            'dni_pasajero' => $this->pasajero->dni;
        ];
    }
    
    

}
