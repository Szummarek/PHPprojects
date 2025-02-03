<?php
include ('pojazdclass.php');
include ('motorclass.php');

class Samochod extends Pojazd {

}

//Program główny

// $o1 = new Pojazd(4,'czerony','matowy');
// $o2 = new Pojazd(4,'czerony','matowy');
// $o3 = new Pojazd(4,'czerony','matowy');
// $o4 = new Pojazd(4,'czerony','matowy');
// $o5 = new Pojazd(4,'czerony','matowy');
// echo Pojazd::GetSamochody();

$m1 = new Motor(60,'czarny','jakiś','bugatti');
$m2 = clone $m1;
$m1->Info();
Pojazd::GetSamochody();
echo "<br>";
$m2->Info();
















































// class Ksiazka {
// 	public $tytul;
// 	public $liczba_stron;
// 	public $okladka;
// 	public $tab = array();

// 	public function __construct($tytul,$liczba_stron,$okladka) {

// 		$this->tytul = $tytul;
// 		$this->liczba_stron = $liczba_stron;
// 		$this->okladka = $okladka;

// 	}
// 	public function Info() {
		
// 		echo $this->tytul.','.$this->liczba_stron.','.$this->okladka;

// 	}
// 	public function Info2() {
		
// 		return $this->tytul.','.$this->liczba_stron.','.$this->okladka;

// 	}

// }
// class Biblioteka {

// 	public function DodanieWagonu(){

		

// 	}
// 	Public function Spis(){}

// }








// //Program główny
// $o1 = new Ksiazka('Kot1',1,'Twarda1');
// $o2 = new Ksiazka('Kot2',1,'Twarda2');
// $o3 = new Ksiazka('Kot3',1,'Twarda3');
// $o4 = new Ksiazka('Kot4',1,'Twarda4');
// $o5 = new Ksiazka('Kot5',1,'Twarda5');





















// $tablica = array();

// $tablica[0] = $o1;

// // echo $tablica[0];

// var_dump($tablica[0]);


















// var_dump($o1);
// echo $o1->tytul.' , '.$o1->liczba_stron.' , '.$o1->okladka;
// $o1->Info('Kot',1,'Twarda');
// echo '<hr/>';
// $o1->Info2('Kot',1,'Twarda');
// $pudelko = $o1->Info2('Kot',1,'Twarda');
// echo strlen($pudelko);

?>