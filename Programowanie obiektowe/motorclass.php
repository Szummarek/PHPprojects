<?php

class Motor extends Pojazd{

	public $model;

	public function __construct($kola,$kolor,$rodzajLakieru,$model) {

		parent::__construct($kola,$kolor,$rodzajLakieru);
		$this->model = $model;

	}

	public function Info() {

		echo 'Model roweru to: '.$this->model;

	}

}

?>