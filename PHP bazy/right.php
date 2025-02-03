<?php
	function showarticle($content,$max,$moretext) {
		if (strlen($content)>$max) {
			$max -= strlen($moretext);
			$content = strrev(strstr(strrev(substr($content, 0, $max)),' '));
			$content .= '...';
			$content .= $moretext;
		}
		return $content;
	}
	try {
		$conn = new PDO("mysql:host=localhost;dbname=2ppgrupa2","root","");
		$query = "SELECT a.id,title,content,datetime,login FROM articles a INNER JOIN users u ON a.iduser=u.id WHERE a.active=1";

		$result = $conn->prepare($query);
		$result->execute();

		while($row = $result->fetch(PDO::FETCH_OBJ)) {

			echo '<table>';

				echo '<tr>';
					echo '<td>';
						echo $row->login.', '.$row->datetime;
					echo '</td>';
				echo '</tr>';
				echo '<tr>';
					echo '<td>';
						echo '<h2>'.$row->title.'</h2>';
					echo '</td>';
				echo '</tr>';
				echo '<tr>';
					echo '<td>';
						$href = '<p style="text-align:right;"><a href="showarticle.php?id='.$row->id.'">Czytaj więcej</a></p>';
						echo '<p>'.showarticle($row->content,350,$href).'</p>';
						// echo '<p><a href="showarticle.php?id='.$row->id.'">Czytaj więcej</a></p>';
					echo '</td>';
				echo '</tr>';
				echo '<hr>';
			echo '</table>';

		}

	} catch (PDOException $e) {
		$e->getMessage();
	}

?>