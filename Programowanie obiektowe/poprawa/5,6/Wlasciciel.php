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

?>