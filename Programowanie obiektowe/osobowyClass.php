<?php

class Osobowy extends Samochod {
	public $model;
	public $spalanie;
	public $pojemnoscBaku = 50;
	public $wlasciciel;
	public $nrRejestracji;
	public $stan_paliwa;

	public function __construct($wlasciciel,$nrRejestracji) {
		$this->wlasciciel = $wlasciciel;
		$this->nrRejestracji = $nrRejestracji;
	}
	public function setTankuj($ile_paliwa) {
		if($ile_paliwa > $pojemnoscBaku) {
			echo "Too much";
		} else {
			$this->stan_paliwa = $ile_paliwa;
		}
	}
	public function jedzPojazdem($ile_kilometrow) {

		$ile_kilometrow = $stan_paliwa/$spalanie;

	}
	public function setSpalanie($spalanie){
		$this->spalanie = $spalanie;
	}
}

?>