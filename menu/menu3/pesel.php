<?php
	
	

	$pesel = $_POST['pesel'];
	$plik = 'wynik.txt';
	
	$rok = substr($pesel, 0,-9);
	$miesiac = substr($pesel, 2, -7);
	$dzien = substr($pesel, 4, -5);
	$plec = substr($pesel, 9, -1);

	
	//Określenie roku urodzenia

		if ($rok == '21') 
		{
			$dane_r = 'Rok: 1921';
		} 
		elseif ($rok == '22') 
		{
			$dane_r = 'Rok: 1922';
		} 
		elseif ($rok == '23') 
		{
			$dane_r = 'Rok: 1923';
		} 
		elseif ($rok == '24') 
		{
			$dane_r = 'Rok: 1924';
		} 
		elseif ($rok == '25') 
		{
			$dane_r = 'Rok: 1925';
		} 
		elseif ($rok == '26') 
		{
			$dane_r = 'Rok: 1926';
		} 
		elseif ($rok == '27') 
		{
			$dane_r = 'Rok: 1927';
		} 
		elseif ($rok == '28') 
		{
			$dane_r = 'Rok: 1928';
		} 
		elseif ($rok == '29') 
		{
			$dane_r = 'Rok: 1929';
		} 
		elseif ($rok == '30') 
		{
			$dane_r = 'Rok: 1930';
		} 
		elseif ($rok == '31') {
			$dane_r = 'Rok: 1931';
		} 
		elseif ($rok == '32') 
		{
			$dane_r = 'Rok: 1932';
		} 
		elseif ($rok == '33') 
		{
			$dane_r = 'Rok: 1933';
		} 
		elseif ($rok == '34') 
		{
			$dane_r = 'Rok: 1934';
		} 
		elseif ($rok == '35') 
		{
			$dane_r = 'Rok: 1935';
		} 
		elseif ($rok == '36') 
		{
			$dane_r = 'Rok: 1936';
		} 
		elseif ($rok == '37') {
			$dane_r = 'Rok: 1937';
		} 
		elseif ($rok == '38') 
		{
			$dane_r = 'Rok: 1938';
		} 
		elseif ($rok == '39') 
		{
			$dane_r = 'Rok: 1939';
		} 
		elseif ($rok == '40') 
		{
			$dane_r = 'Rok: 1940';
		} 
		elseif ($rok == '41') 
		{
			$dane_r = 'Rok: 1941';
		} 
		elseif ($rok == '42') 
		{
			$dane_r = 'Rok: 1942';
		} 
		elseif ($rok == '43') 
		{
			$dane_r = 'Rok: 1943';
		} 
		elseif ($rok == '44') 
		{
			$dane_r = 'Rok: 1944';
		} 
		elseif ($rok == '45') 
		{
			$dane_r = 'Rok: 1945';
		} 
		elseif ($rok == '46') 
		{
			$dane_r = 'Rok: 1946';
		} 
		elseif ($rok == '47') 
		{
			$dane_r = 'Rok: 1947';
		} 
		elseif ($rok == '48') 
		{
			$dane_r = 'Rok: 1948';
		} 
		elseif ($rok == '49') {
			$dane_r = 'Rok: 1949';
		} 
		elseif ($rok == '50') 
		{
			$dane_r = 'Rok: 1950';
		} 
		elseif ($rok == '51') 
		{
			$dane_r = 'Rok: 1951';
		} 
		elseif ($rok == '52') 
		{
			$dane_r = 'Rok: 1952';
		} 
		elseif ($rok == '53') 
		{
			$dane_r = 'Rok: 1953';
		} 
		elseif ($rok == '54') 
		{
			$dane_r = 'Rok: 1954';
		} 
		elseif ($rok == '55') 
		{
			$dane_r = 'Rok: 1955';
		} 
		elseif ($rok == '56') 
		{
			$dane_r = 'Rok: 1956';
		} 
		elseif ($rok == '57') 
		{
			$dane_r = 'Rok: 1957';
		} 
		elseif ($rok == '58') 
		{
			$dane_r = 'Rok: 1958';
		} 
		elseif ($rok == '59') 
		{
			$dane_r = 'Rok: 1959';
		} 
		elseif ($rok == '60') {
			$dane_r = 'Rok: 1960';
		} 
		elseif ($rok == '61') 
		{
			$dane_r = 'Rok: 1961';
		} 
		elseif ($rok == '62') 
		{
			$dane_r = 'Rok: 1962';
		} 
		elseif ($rok == '63') 
		{
			$dane_r = 'Rok: 1963';
		} 
		elseif ($rok == '64') 
		{
			$dane_r = 'Rok: 1964';
		} 
		elseif ($rok == '65') 
		{
			$dane_r = 'Rok: 1965';
		} 
		elseif ($rok == '66') 
		{
			$dane_r = 'Rok: 1966';
		} 
		elseif ($rok == '67') 
		{
			$dane_r = 'Rok: 1967';
		} 
		elseif ($rok == '68') 
		{
			$dane_r = 'Rok: 1968';
		} 
		elseif ($rok == '69') 
		{
			$dane_r = 'Rok: 1969';
		} 
		elseif ($rok == '70') 
		{
			$dane_r = 'Rok: 1970';
		} 
		elseif ($rok == '71') 
		{
			$dane_r = 'Rok: 1971';
		} 
		elseif ($rok == '72') 
		{
			$dane_r = 'Rok: 1972';
		} 
		elseif ($rok == '73') 
		{
			$dane_r = 'Rok: 1973';
		} 
		elseif ($rok == '74') 
		{
			$dane_r = 'Rok: 1974';
		} 
		elseif ($rok == '75') 
		{
			$dane_r = 'Rok: 1975';
		} 
		elseif ($rok == '76') 
		{
			$dane_r = 'Rok: 1976';
		} 
		elseif ($rok == '77') 
		{
			$dane_r = 'Rok: 1977';
		} 
		elseif ($rok == '78') 
		{
			$dane_r = 'Rok: 1978';
		} 
		elseif ($rok == '79') 
		{
			$dane_r = 'Rok: 1979';
		} 
		elseif ($rok == '80') 
		{
			$dane_r = 'Rok: 1980';
		} 
		elseif ($rok == '81') 
		{
			$dane_r = 'Rok: 1981';
		} 
		elseif ($rok == '82') 
		{
			$dane_r = 'Rok: 1982';
		} 
		elseif ($rok == '83') 
		{
			$dane_r = 'Rok: 1983';
		} 
		elseif ($rok == '84') 
		{
			$dane_r = 'Rok: 1984';
		} 
		elseif ($rok == '85') 
		{
			$dane_r = 'Rok: 1985';
		} 
		elseif ($rok == '86') 
		{
			$dane_r = 'Rok: 1986';
		} 
		elseif ($rok == '87') 
		{
			$dane_r = 'Rok: 1987';
		} 
		elseif ($rok == '88') 
		{
			$dane_r = 'Rok: 1988';
		} 
		elseif ($rok == '89') 
		{
			$dane_r = 'Rok: 1989';
		} 
		elseif ($rok == '90') 
		{
			$dane_r = 'Rok: 1990';
		} 
		elseif ($rok == '91') 
		{
			$dane_r = 'Rok: 1991';
		} 
		elseif ($rok == '92') 
		{
			$dane_r = 'Rok: 1992';
		} 
		elseif ($rok == '93') 
		{
			$dane_r = 'Rok: 1993';
		} 
		elseif ($rok == '94') 
		{
			$dane_r = 'Rok: 1994';
		} 
		elseif ($rok == '95') 
		{
			$dane_r = 'Rok: 1995';
		} 
		elseif ($rok == '96') 
		{
			$dane_r = 'Rok: 1996';
		} 
		elseif ($rok == '97') 
		{
			$dane_r = 'Rok: 1997';
		} 
		elseif ($rok == '98') 
		{
			$dane_r = 'Rok: 1998';
		} 
		elseif ($rok == '99') 
		{
			$dane_r = 'Rok: 1999';
		} 
		elseif ($rok == '00') 
		{
			$dane_r = 'Rok: 2000';
		} 
		elseif ($rok == '01') 
		{
			$dane_r = 'Rok: 2001';
		} 
		elseif ($rok == '02') 
		{
			$dane_r = 'Rok: 2002';
		} 
		elseif ($rok == '03') 
		{
			$dane_r = 'Rok: 2003';
		} 
		elseif ($rok == '04') 
		{
			$dane_r = 'Rok: 2004';
		} 
		elseif ($rok == '05') 
		{
			$dane_r = 'Rok: 2005';
		} 
		elseif ($rok == '06') 
		{
			$dane_r = 'Rok: 2006';
		} 
		elseif ($rok == '07') 
		{
			$dane_r = 'Rok: 2007';
		} 
		elseif ($rok == '08') 
		{
			$dane_r = 'Rok: 2008';
		} 
		elseif ($rok == '09') 
		{
			$dane_r = 'Rok: 2009';
		} 
		elseif ($rok == '10') 
		{
			$dane_r = 'Rok: 2010';
		} 
		elseif ($rok == '11') 
		{
			$dane_r = 'Rok: 2011';
		} 
		elseif ($rok == '12') 
		{
			$dane_r = 'Rok: 2012';
		} 
		elseif ($rok == '13') 
		{
			$dane_r = 'Rok: 2013';
		} 
		elseif ($rok == '14') 
		{
			$dane_r = 'Rok: 2014';
		} 
		elseif ($rok == '15') 
		{
			$dane_r = 'Rok: 2015';
		} 
		elseif ($rok == '16') 
		{
			$dane_r = 'Rok: 2016';
		} 
		elseif ($rok == '17') 
		{
			$dane_r = 'Rok: 2017';
		} 
		elseif ($rok == '18') 
		{
			$dane_r = 'Rok: 2018';
		} 
		elseif ($rok == '19') 
		{
			$dane_r = 'Rok: 2019';
		} 
		elseif ($rok == '20') 
		{
			$dane_r = 'Rok: 2020';
		}
		
		
	
	//Określenie miesiąca urodzenia
	
		if ($miesiac == '01' || $miesiac == '21') 
		{
			$dane_m = 'Miesiąc: Styczeń';
		} 
		elseif ($miesiac == '02' || $miesiac == '22') 
		{
			$dane_m = 'Miesiąc: Luty';
		} 
		elseif ($miesiac == '03' || $miesiac == '23') 
		{
			$dane_m = 'Miesiąc: Marzec';
		} 
		elseif ($miesiac == '04' || $miesiac == '24') 
		{
			$dane_m = 'Miesiąc: Kwiecień';
		} 
		elseif ($miesiac == '05' || $miesiac == '25') 
		{
			$dane_m = 'Miesiąc: Maj';
		} 
		elseif ($miesiac == '06' || $miesiac == '26') 
		{
			$dane_m = 'Miesiąc: Czerwiec';
		} 
		elseif ($miesiac == '07' || $miesiac == '27') 
		{
			$dane_m = 'Miesiąc: Lipiec';
		} 
		elseif ($miesiac == '08' || $miesiac== '28') 
		{
			$dane_m = 'Miesiąc: Sierpień';
		} 
		elseif ($miesiac == '09' || $miesiac== '29')
		{
			$dane_m = 'Miesiąc: Wrzesień';
		} 
		elseif ($miesiac == '10' || $miesiac == '30') 
		{
			$dane_m = 'Miesiąc: Październik';
		} 
		elseif ($miesiac == '11' || $miesiac == '31') 
		{
			$dane_m = 'Miesiąc: Listopad';
		} 
		elseif ($miesiac == '12' || $miesiac == '32') 
		{
			$dane_m = 'Miesiąc: Grudzień';
		}
		else 
		{
			$dane_m = "Miesiąc: Błędnie podany pesel";
		}
		
	
	//Określenie dnia urodzenia

	
		if ($dzien == '01') 
		{
			$dane_d = 'Dzień: 1';
		} 
		elseif ($dzien == '02') 
		{
			$dane_d = 'Dzień: 2';
		} 
		elseif ($dzien == '03') 
		{
			$dane_d = 'Dzień: 3';
		} 
		elseif ($dzien == '04') 
		{
			$dane_d = 'Dzień: 4';
		} 
		elseif ($dzien == '05') 
		{
			$dane_d = 'Dzień: 5';
		} 
		elseif ($dzien == '06') 
		{
			$dane_d = 'Dzień: 6';
		} 
		elseif ($dzien == '07') 
		{
			$dane_d = 'Dzień: 7';
		} 
		elseif ($dzien == '08') 
		{
			$dane_d = 'Dzień: 8';
		} 
		elseif ($dzien == '09') 
		{
			$dane_d = 'Dzień: 9';
		} 
		elseif ($dzien == '10') 
		{
			$dane_d = 'Dzień: 10';
		} 
		elseif ($dzien == '11') 
		{
			$dane_d = 'Dzień: 11';
		} 
		elseif ($dzien == '12') 
		{
			$dane_d = 'Dzień: 12';
		} 
		elseif ($dzien == '13') 
		{
			$dane_d = 'Dzień: 13';
		} 
		elseif ($dzien == '14') 
		{
			$dane_d = 'Dzień: 14';
		} 
		elseif ($dzien == '15') 
		{
			$dane_d = 'Dzień: 15';
		} 
		elseif ($dzien == '16') 
		{
			$dane_d = 'Dzień: 16';
		} 
		elseif ($dzien == '17') 
		{
			$dane_d = 'Dzień: 17';
		} 
		elseif ($dzien == '18') 
		{
			$dane_d = 'Dzień: 18';
		} 
		elseif ($dzien == '19') 
		{
			$dane_d = 'Dzień: 19';
		} 
		elseif ($dzien == '20') 
		{
			$dane_d = 'Dzień: 20';
		} 
		elseif ($dzien == '21') 
		{
			$dane_d = 'Dzień: 21';
		} 
		elseif ($dzien == '22') 
		{
			$dane_d = 'Dzień: 22';
		} 
		elseif ($dzien == '23') 
		{
			$dane_d = 'Dzień: 23';
		} 
		elseif ($dzien == '24') 
		{
			$dane_d = 'Dzień: 24';
		} 
		elseif ($dzien == '25') 
		{
			$dane_d = 'Dzień: 2';
		} 
		elseif ($dzien == '26') 
		{
			$dane_d = 'Dzień: 26';
		} 
		elseif ($dzien == '27') 
		{
			$dane_d = 'Dzień: 7';
		} 
		elseif ($dzien == '28') 
		{
			$dane_d = 'Dzień: 28';
		} 
		elseif ($dzien == '29') 
		{
			$dane_d = 'Dzień: 29';
		} 
		elseif ($dzien == '30') 
		{
			$dane_d = 'Dzień: 30';
		} 
		elseif ($dzien == '31') 
		{
			$dane_d = 'Dzień: 31';
		}
		else 
		{
			$dane_d = "Dzień: Błędny pesel";
		}

		
		
	
	//Określenie Płci
	
		if ($plec %2 =='0') 
		{
			$dane_p = 'Płeć: Kobieta';
		} 
		else 
		{
			$dane_p = 'Płeć: Mężczyzna';
		}
		

	//Wyświetlanie

		echo "<h3><b>Data urodzenia</b></h3>";
		echo $dane_r;
		echo "</br>";
		echo $dane_m;
		echo "</br>";
		echo $dane_d;
		echo "</br>";
		echo $dane_p;


	//tworzenie zmiennej do zapisu w pliku

		$dane = ''.$pesel.';'.$dane_r.';'.$dane_m.';'.$dane_d.';'.$dane_p.';';

	//Dodawanie informacji do pliku

	if ($dane_m !== 'Miesiąc: Błędnie podany pesel' && $dane_d !== 'Dzień: Błędny pesel')
	{	
		$uchwyt = fopen('wynik.txt', 'a');
		fputs($uchwyt, $dane."\n");
		fclose($uchwyt);
	}

?>