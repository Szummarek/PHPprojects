<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
		<p>Podaj długości boków: </p>
		<p>Podaj bok a<input type="text" name="a"></p>
		<p>Podaj bok b<input type="text" name="b"></p>
		<p>Podaj bok c<input type="text" name="c"></p>
		<p><input type="submit"></p>
	</form>
</body>
</html>
<?php  

	function Heron ($arg1, $arg2, $arg3) {
		$p = ($arg1 + $arg2 + $arg3) / 2;

		return sqrt($p*($p-$arg1)*($p-$arg2)*($p-$arg3));
	}

	if (!isset($_GET['a']) || (!isset($_GET['b']) || (!isset($_GET['c'])) {
		echo 'Nie ma jeszcze danych';
	} else {
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];
	}

	echo Heron($a, $b, $c);

?>
