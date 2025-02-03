<?php

//Klasy i obiekty w PHP
/*
	class Samochod {
		public $marka = 'Opel';
		public $model;
		public $rokProdukcji = 2017;
	}
	
	$samochod = new Samochod();
	$samochod->model = 'Insignia';
	
	echo $samochod->marka . ' ' . $samochod->model . ' ' . $samochod->rokProdukcji;


*/
//Metody i właściwości klas w PHP
/*	
	class Samochod {
		public $model;
		public $iloscPaliwa = 10;
		public $spalanie = 5;
		
		public function getSpalanie() {
		return $this->spalanie;
	}
    
		public function setSpalanie($spalanie) {
			$wartoscSpalania = intval($spalanie);
			if ($wartoscSpalania > 0 && $wartoscSpalania < 100)
			$this->spalanie = $wartoscSpalania;
		}
		public function ilePrzejedzie() {
		return $this->iloscPaliwa / $this->spalanie * 100;
		}
	}
		
		$samochod = new Samochod();
		$samochod->setSpalanie ('abcde');
		echo $samochod->ilePrzejedzie();
*/
/*
	class Samochod {
		public function przedstawSie() {
		echo "Jestem Samochodem";
	}
	}
	class Terenowy extends Samochod {
		public function przedstawSie() {
		echo "Jestem Terenówką";
	}
	}
		$terenowy = new Terenowy();
		$terenowy->przedstawSie(); //wyświetli Jestem Terenówką
*/



?>