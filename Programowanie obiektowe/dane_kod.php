<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title> Generowanie losowych danych</title>
</head>

<body>
	<?php
	// generuje nazwisko
	function genRandStr($length)
	{
		return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
	}

	// generuje plec
	function gender($length = 1)
	{
		return substr(str_shuffle("MK"), 0, $length);
	}

	$nazwadane = "dane1";

	$tekst = "INSERT INTO ".$nazwadane." (imie, nazwisko, plec, zarobki, data_zatr) \r\n VALUES \r\n";

	$dane = "USE BigDane; \r\n";
	$dane .= "DROP TABLE IF EXISTS dane;\r\n";
	$dane .= "CREATE TABLE ".$nazwadane." (id INT PRIMARY KEY AUTO_INCREMENT, imie VARCHAR(11), nazwisko VARCHAR(16), plec CHAR(1), zarobki INT, data_zatr DATE);\r\n";
	$dane .= $tekst;

	$names = array(
		'Zuzanna', 'Lena', 'Julia', 'Maja', 'Zofia',
		'Jakub', 'Antoni', 'Szymon', 'Jan', 'Filip', 'Robert', 'Suwarski'
	);

	$fp = fopen('C:\dane\dane.sql', 'w');
	$ile = 210000;
	echo "Generowany jest plik z danymi: ".$ile."<br>";
	$wart = 0;
	for ($i = 1; $i <= $ile; $i++) {
		// losowe daty pomiędzy datą bieżącą a data maksymalnie 5000 dni wcześniejszą
		$d = date('Y-m-d', strtotime('-' . mt_rand(0, 5000) . ' days'));
		$random_name = $names[mt_rand(0, sizeof($names) - 1)];
                $dane .=
			"('" .
			$random_name .
			"', '" .
			strtoupper(genRandStr(mt_rand(1, 1))) .
			genRandStr(mt_rand(3, 15)) .
			"', '" .
			gender() .
			"', " .
			rand(1, 5000) .
			", '" .
			$d .
			"')";
		if ($i % 1000 == 0) {
			$dane .= ";\r\n";
			$dane .= $tekst;
		} else {
			$dane .= ",\r\n";
		}
	}
	fwrite($fp, $dane);
	fclose($fp);
	echo "Utworzono plik <br>";
	?>

</body>

</html>
