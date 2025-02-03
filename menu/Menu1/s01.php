<?php

	define("ZERO", 273.15);

	function Kelwin ($arg) {
		return $arg + ZERO;
	}

	function Fahrenheit ($arg) {
		return $arg * 1.8 + 32;
	}

	// Program główny
	$c = $_POST['c'];
	echo '<p>Stopnie Celsjusza: '.$c.'</p>';
	echo '<p>Stopnie Kelwina: '.Kelwin($c).'</p>';
	echo '<p>Stopnie Fahrenheita: '.Fahrenheit($c).'</p>';

	// zadanie dla Was
	// wykonać walidację aby możliwe było tylko użycie cyfr oraz kropki



?>