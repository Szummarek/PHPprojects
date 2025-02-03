<?php
abstract class Samochod implements WszystkiePojazdy{
	public $marka;
	public $posiadacz;

	public function __construct($marka) {
		$this->marka = $marka;
	}
}
?>