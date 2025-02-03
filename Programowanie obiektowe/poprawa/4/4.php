<?php


require_once("Wlasciciel.php");
require_once("Samochod.php");
require_once("Osobowy.php");

$o1 = new Wlasciciel('Jan');
// echo Wlasciciel::kraj;
$o1->Info();
echo '<hr/>';
$o2 = new Osobowy('model');
$o2->setPosiadacz($o1);
var_dump($o2->posiadacz);
$o2->getPosiadacz();
?>