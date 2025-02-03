<?php
abstract class Tabela {
	protected $szerokosc;
	protected $wysokosc;
	protected $tab = array();

	public function __construct($szerokosc,$wysokosc) {
		
		$this->szerokosc = $szerokosc;
		$this->wysokosc = $wysokosc;
		

		$tab2 = array();
		
		for($i=0;$i<$szerokosc;$i++) {
			$tab2[$i] = '*';
		}

		for($i=0;$i<$wysokosc;$i++) {
			$this->tab[$i] = $tab2;
		}
	
	}
	
	abstract function rysujTabele();
	
	public final function wpiszPole($x,$y,$cos) {
		$this->tab[$x][$y] = $cos;
	}

}

class TabelaHTML extends Tabela {
	
	public $szerokoscTabeli;

	public function __construct($szerokosc,$wysokosc,$szerTabeli) {
		
		parent::__construct($szerokosc,$wysokosc);
		$this->szerokoscTabeli = $szerTabeli;

	}
	
	public function rysujTabele() {
		echo '<table>';

		for($i=0;$i<$this->wysokosc;$i++) {
			
			echo '<tr>';

			for($j=0;$j<$this->szerokosc;$j++) {
				
				echo '<td style="border:
            1px solid red;width:'.$this->szerokoscTabeli.'px">'.$this->tab[$i][$j].'</td>';

				
			}


			echo '</tr>';
		}

		echo '</table>';
	}
}

$o1 = new TabelaHTML(2,4,90);
$o1->wpiszPole(3,0,3);
$o1->rysujTabele();

?>