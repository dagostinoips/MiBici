<?php

namespace Mibici;

interface PasajeroInterface {

	protected $dni, $saldo, $plan, $viajesdisponibles, $tiposdeplan;

    public function getDNI();

    public function getSaldo();

    public function getPlan();

    public function getTiposdeplan();

    public function getViajesdisponibles();

    protected function agregarSaldo();

    protected function retirarSaldo();

    protected function comprarPlan();

    protected function usarViaje(ViajeInterface $viaje);

}