<?php
// Utwórz klasę błędy dziedzicząca po exception
// Utwórz klasę Matematyka:
// -pole powierzchni trapezu równoramiennego
// - na odwrotność liczby x
// Wykorzystaj w metodach klasę blędy i dokonaj obsługi wyjątków związanych z możliwymi błędami

class Bledy extends Exception{}

class Intcos extends Bledy {}
class Zerocos extends Bledy {}


class Matematyka extends Bledy {

	public function Trapez($a,$b,$h) {
		
		try {

			

			if(!is_int($a) || !is_int($b) || !is_int($h)) {

				throw new Intcos('Zmienne muszą być intami!');
				
			} elseif(  ($a+$b*$h) <= 0 ) {

				throw new Zerocos('Zmienne powinny być większe od zera!');
				
			} else {

				echo  ($a+$b*$h)/2;

			}
		}

		catch (Intcos $wyjatek) {

			echo $wyjatek->getMessage();
		
		}

		catch (Zerocos $wyjatek) {

			echo $wyjatek->getMessage();
		
		}

		catch (Bledy $wyjatek) {

			echo $wyjatek->getMessage();
		
		}


	}
	public function Odwrotnosc($x) {

		try {
			
			if ( $x == 0 ) {

				throw new Zerocos('Zmienna nie może być zerem');
			
			} elseif( !is_int($x) ) {

				throw new Intcos('Zmienna musi być intem');
				
			} else {

				echo 1/$x;
			
			}
		}

		catch (Intcos $wyjatek) {

			echo $wyjatek->getMessage();
		
		}

		catch (Zerocos $wyjatek) {

			echo $wyjatek->getMessage();
		
		}
		
		catch (Bledy $wyjatek) {

			echo $wyjatek->getMessage();
		
		}



	}


}

$o1 = new Matematyka();
$o1->Trapez(0,0,'pies');
echo '<hr/>';
$o1->Odwrotnosc(0);



?>