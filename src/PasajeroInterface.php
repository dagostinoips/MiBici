<?php

namespace Mibici;

interface PasajeroInterface {

	public $tiposdeplan;

	protected $dni, $saldo, $plan, $viajesdisponibles;

    public function getDNI();

    public function getSaldo();

    public function getPlan();

    public function getViajesDisponibles();

    protected function agregarSaldo();

    protected function retirarSaldo();

    protected function comprarPlan();

    protected function usarViaje(ViajeInterface $viaje);

}