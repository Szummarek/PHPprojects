<?php
class Zwierze {
	
	public $rodzaj, $imie;

	public function __construct($rodzaj,$imie) {

		$this->rodzaj = $rodzaj;
		$this->imie = $imie;

	}

}

$o1 = new Zwierze('Pies','Dupa');
var_dump($o1);

$o2 = clone $o1;
echo "<br>";
var_dump($o2);

echo '<hr/>';



?>