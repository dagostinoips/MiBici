<?php

namespace Mibici;

interface PasajeroInterface {

    function getDNI();

    function getSaldo();

    function getPlan();

    function getTiposdeplan();

    function getViajesdisponibles();

    function agregarViajes($viajes);

    function agregarSaldo($dinero);

    function retirarSaldo($dinero);

    function comprarPlan($tipodeplan);

    function usarViaje(ViajeInterface $viaje);

}
