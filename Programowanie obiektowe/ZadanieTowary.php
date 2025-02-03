<?php
interface towarowyPociag {
	
	function dodajTowar($nazwa,$ilosc,$waga);
	// arg1 nazwa towaru
	// arg2 ilosc
	// arg3 waga 

	function usunTowar($nazwa,$ilosc);
	// agr1 nazwa Towaru
	// arg2 ilosc

	function info();
	// zwaracała będzie info o towarze, ilości i wadze całkowitej przewozonego towaru

}

interface pasazerskiPociag {
	
	function dodajPasazerow($arg1);
	// arg1 ilosc pasazerow

	function wysadzPasazerow($arg1); 
	// ilosc wysiadajacych pasazerow

	function  info();
	// zwracała będzie info o ilości pasażerów

}

class Towar implements towarowyPociag {
	public $nazwa;
	public $ilosc;
	public $waga;
	public $tab = array();

	function dodajTowar($nazwa,$ilosc,$waga) {
		
	} 

	function usunTowar($nazwa,$ilosc) {

	}

	function info() {

	}

}

class Pasazer implements pasazerskiPociag {

	function dodajPasazerow($pasazerowie);
	// arg1 ilosc pasazerow

	function wysadzPasazerow($pasazerowie,$wysiad_pasazerowie) {
		$this->pasazerowie = $pasazerowie-$wysiad_pasazerowie;
	}
	

	function  info();

}







?>