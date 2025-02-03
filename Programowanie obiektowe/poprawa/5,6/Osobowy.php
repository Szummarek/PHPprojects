<?php

	class Osobowy extends Samochod
	{
		public $model;
		public $spalanie;
		public $pojemnoscBaku;
		public $wlasciciel;
		public $nrRejestracji;

		public function __construct($wlasciciel, $nrRejestracji)
		{
			$this->wlasciciel = $wlasciciel;
			$this->nrRejestracji = $nrRejestracji;


		}

		public function setTankuj($ilePaliwa)
		{
			if($ilePaliwa>$pojemnoscBaku)
			{
				echo "Chłopie! Tyle paliwa się nie zmieśći!";
			}
		}

		public function jedzPojazdem($ileKilometrow)
		{
			
		}

		public function setSpalanie($spalanie)
		{
			$this->spalanie = $spalanie;
		}
	}

?>