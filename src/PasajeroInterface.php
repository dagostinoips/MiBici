<?php

namespace Mibici;

interface PasajeroInterface {

    function getDNI();

    function getSaldo();

    function getPlan();

    function getTiposdeplan();

    function getViajesdisponibles();

    function agregarViajes();

    function agregarSaldo();

    function retirarSaldo();

    function comprarPlan();

    function usarViaje();

}
