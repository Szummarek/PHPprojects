<?php
class Pojazd {
	public $samochod = 'Opel';
	public $kola;
	public $kolor;
	public $rodzajLakieru;
	static $i = 0;

	public function __construct($kola,$kolor,$rodzajLakieru) {
		
		$this->kola = $kola;
		$this->kolor = $kolor;
		$this->rodzajLakieru = $rodzajLakieru;

		self::$i++;

	}

	static public function GetSamochody() {
		echo "Jest: ".self::$i." pojazdow";
	}



}
?>