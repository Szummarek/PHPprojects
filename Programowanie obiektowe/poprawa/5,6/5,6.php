<?php
require_once("Wlasciciel.php");
require_once("Samochod.php");
require_once("Osobowy.php");

	interface WszystkiePojazdy
	{
		function setTankuj($ilosc_paliwa){}
		function jedzPojazdem($ilosc_kilometrow){}
	}
	
?>