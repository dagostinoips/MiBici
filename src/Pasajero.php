<?php

namespace Mibici;

include 'PasajeroInterface.php', 'ViajeInterface.php', 'MoviInterface.php';

class Pasajero implements PasajeroInterface {

    public function __construct(MoviInterface $movi) {
        $this->movi = $movi;
    }

}
