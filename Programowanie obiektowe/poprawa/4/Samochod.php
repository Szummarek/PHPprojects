<?php

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

?>