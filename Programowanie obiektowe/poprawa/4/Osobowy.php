<?php

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