<?php

namespace Mibici;

class Estacion implements EstacionInterface{

	protected $anclajeLibres;
	protected $anclajeTotales;

	public function _construct($a,$b){
		$this->anclajeLibres=$a;
		$this->anclajeTotales=$b;
	}

	public function anclajesTotales(){
		return $this->anclajeTotales;
	}

	public function anclajesDisponibles(){
		return $this->anclajeLibres;
	}

	public function bicicletasDisponibles(){
		return ($this->anclajeTotales - $this->anclajeLibres);
	}

	public function enServicio() {
		protected $ 
		if () {
			return TRUE;
		}
		return FALSE;
	}
}
