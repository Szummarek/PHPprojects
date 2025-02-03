<?php
	class Ubranie {
		public $nazwa;
		public $jakosc;
		public $ilosc_kopii;

		public function __construct($nazwa) {
			$this->nazwa = $nazwa;
			$this->jakosc = 1;
			$this->ilosc_kopii = 0;
		}
		public function infoUbranie() {
			if($this->jakosc>1) {
				return $this->nazwa." , podróbka,  ".$this->jakosc." , ".$this->ilosc_kopii;
			}else {
				return $this->nazwa." , oryginał,  ".$this->jakosc." , ".$this->ilosc_kopii;
			}
		}
		private function __clone() {
			$this->jakosc++;
		}
		public function podrobka() {
			$pies
		}
	}

	$sukienka = new Ubranie('sukienka');
	$sukienka2 = clone $sukienka;
	echo var_dump($sukienka2);
	echo $sukienka->nazwa." , ".$sukienka->jakosc." , ".$sukienka->ilosc_kopii;
	echo '<br/>';
	echo $sukienka->infoUbranie();

?>