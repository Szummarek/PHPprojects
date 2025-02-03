<?php

	class Wlasciciel
	{
		public $nazwa = "GAL ANONIM";
		const kraj = "POLSKA";

    	public function __construct($nazwa)
    	{
        	$this->nazwa = $nazwa;
    	}

    	public function setNazwa($nazwa)
    	{
    		$this->nazwa = $nazwa;
    	}
    	public function setKraj($kraj)
    	{
    		$this->kraj = $kraj;
    	}

    	public function getNazwa()
    	{
    		return $this->nazwa;
    	}
    	public function getKraj()
    	{
    		return self::kraj;
    	}

    	public function Info()
    	{
    		echo "Właściciel to: ".$this->nazwa." z ".self::kraj;
    	}

	}

	class Osobowy
	{
		public $model;
		public Wlasciciel $posiadacz;

		public function __construct($model)
		{
			$this->model = $model;
		}

		public function setPosiadacz(Wlasciciel $posiadacz)
		{
			$this->posiadacz = $posiadacz;
		}

		public function setPosiadacz2($posiadacz)
		{
			$this->posiadacz = $posiadacz;
		}
		public function setModel($model)
		{
			$this->model = $model;
		}
		// public function getPosiadacz()
		// {
		// 	return $posiadacz; 		 	   	 	
		// }
		public function getModel()
		{
			return $model;
		}
	}

$o1 = new Wlasciciel('Jan');
// echo Wlasciciel::kraj;
$o1->Info();
echo '<hr/>';
$o2 = new Osobowy('model');
$o2->setPosiadacz($o1);
var_dump($o2->posiadacz);
$o2->getPosiadacz();




?>