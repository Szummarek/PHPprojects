<?php
class Droga {
	private $poczatek = array('x'=>0, 'y'=>0);
	private $koniec = array('x'=>0, 'y'=>0);
	public $tryb_poruszania;
	static $calaDroga;
	static $calyCzas;


	
	
	public function wspolrzedne($x1,$y1,$x2,$y2) {
		
		$this->poczatek['x'] = $x1;
		$this->poczatek['y'] = $y1;
		
		$this->koniec['x'] = $x2;
		$this->koniec['y'] = $y2;
		
	}

	public function obliczDroge($tryb_poruszania) {

		$droga = sqrt( pow(($this->koniec['x']-$this->poczatek['x']),2) + pow(($this->koniec['y']-$this->poczatek['y']),2));
		
		self::$calaDroga += $droga;

		

		if ($tryb_poruszania == 'spacer') {
			
			$czas = $droga/0.56;
			self::$calyCzas += $czas;
			echo 'Dystans o długości: '.round($droga,1).'m zostanie pokonany w: '.round($czas,1).'s';
			echo "<br>";

		}elseif($tryb_poruszania == 'marsz') {

			$czas = $droga/1.39;
			self::$calyCzas += $czas;
			echo 'Dystans o długości: '.round($droga,1).'m zostanie pokonany w: '.round($czas,1).'s';
			echo "<br>";

		}elseif($tryb_poruszania == 'bieg') {
			
			$czas = $droga/3.33;
			self::$calyCzas += $czas;
			echo 'Dystans o długości: '.round($droga,1).'m zostanie pokonany w: '.round($czas,1).'s';
			echo "<br>";

		}
	
	}

	function calaDroga(...$obiekt) {

		foreach ( $obiekt as $ob ) {

			if ( $ob == end($obiekt) ) {

				echo '<hr/>';
				echo 'Cały dystans: '.self::$calaDroga.'m zostanie pokonany w: '.round(self::$calyCzas,1).'s';

			}
		
		}

	}	
}

// Program główny

$o1 = new Droga();
$o1-> wspolrzedne(-3,6,5,6);

echo $o1->obliczDroge('spacer');

$o2 = new Droga();
$o2-> wspolrzedne(6,12,10,9);

echo $o2->obliczDroge('marsz');

$o3 = new Droga();
$o3-> wspolrzedne(9,16,25,4);

echo $o3->obliczDroge('bieg');

echo $o3->calaDroga($o1,$o2,$o3);

?>