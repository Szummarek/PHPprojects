<?php

	class Wlasciciel
	{
		public $nazwa = 'GAL ANONIM';
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

	class Samochod
	{
		public $marka;
		public Wlasciciel $posiadacz;

		public function __construct($marka)
		{
			$this->marka = $marka;
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
		public function getPosiadacz()
		{
			return $posiadacz; 		 	   	 	
		}
		public function getModel()
		{
			return $model;
		}
	}

	class Osobowy extends Samochod
	{
		public $model;

		public function setModel($model)
		{
			$this->model = $model;
		}
		public function getModel()
		{
			return $model;
		}
	}

?>