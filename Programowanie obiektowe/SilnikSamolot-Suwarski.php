<?php
class Silnik {
	static $moc = 40;

}
class Samolot {
	public $fundusze;
	public $samolot = 0;

	public $nazwa;
	public function __construct($fundusze,$nazwa) {
		$this->fundusze = $fundusze;
		$this->nazwa = $nazwa;
		switch($fundusze) {
			case ($fundusze<1000):
			$this->samolot = 0;
			echo 'Masz za mało hajsu';
			break;

			case ($fundusze>=1000 && $fundusze<2000):
			$this->samolot = 1;
			$this->fundusze -= 1000;
			
			break;

			case ($fundusze>=2000 && $fundusze<3000): 
			$this->samolot = 2;
			$this->fundusze -= 2000;
			
			break;

			case ($fundusze>=3000 && $fundusze<4000):
			$this->samolot = 3;
			$this->fundusze -= 3000;
			
			break;

			case ($fundusze>=4000):
			$this->samolot = 4;
			$this->fundusze -= 4000;
			
			break;
		}	


	}
		function Wyswietl() {
			echo $this->fundusze.' , '.$this->nazwa;
		}


}

$s1 = new Samolot(1,'samolot1');
$s2 = new Samolot(3000,'samolot2');
$s3 = new Samolot(4000,'samolot3');

echo var_dump($s1);






?>