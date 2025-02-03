<?php

interface WszystkiePojazdy {

	public function setTankuj($ilosc_paliwa);
	public function jedzPojazdem($ilosc_kilometrow);

}

include('wlascicielClass.php');
include('samochodClass.php');
include('osobowyClass.php');
























































// 	class Wlasciciel {

// 		public $nazwa = "GAL ANONIM";
// 		public const kraj = "POLSKA";

// 		public function __construct($nazwa) {

// 			$this->nazwa = $nazwa;

// 		}

// 		public function getNazwa(){

// 			return $nazwa;

// 		}

// 		public function getKraj(){

// 			return self::kraj;

// 		}

// 		public function setNazwa($nazwa){

// 			$this->nazwa = $nazwa;

// 		}


// 	}

// 	class Osobowy {

// 		public $model;
// 		public $posiadacz;

// 		public function __construct($model) {

// 			$this->model = $model;

// 		}

// 		public function setPosiadacz(Wlasciciel $ag) {

// 			$this->posiadacz = $ag;

// 		}

// 		public function getModel(){

// 			return $this->model;

// 		}
// 		public function getPosiadacz(){

// 			return $this->posiadacz;

// 		}

// 		public function setModel($model) {

// 			$this->model = $model;

// 		}

// 		public function setPosiadacz2($posiadacz) {

// 			$this->posiadacz = $posiadacz;

// 		}


// 	}

// $o1 = new Wlasciciel('Nazwa');
// echo $o1->getKraj();

?>