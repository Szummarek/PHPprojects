<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Klasa 2PP - PHP - BAZY - EGZAMIN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styl.css">
	<script src="https://kit.fontawesome.com/d9cd8b3c1c.js" crossorigin="anonymous"></script>
</head>
<body>
	<section id="baner">
		BANER
	</section>
	<section id="menu">
		<?php require_once('menu.php');?>
	</section>
	<section id="main">
		<section id="left">
			<?php require_once('left.php');?>
		</section>
		<section id="right">
			<?php
				function showarticle($content,$max,$moretext) {
					if (strlen($content)>$max) {
						$max -= strlen($moretext);
						$content = substr($conte, 0, $max);
					}
					return $content;
				}
				try {
					$conn = new PDO("mysql:host=localhost;dbname=2ppgrupa2","root","");
					$query = "SELECT a.id,title,content,datetime,login FROM articles a INNER JOIN users u ON a.iduser=u.id WHERE a.id= :id";

					$result = $conn->prepare($query);
					$result -> bindParam(":id",$_GET['id'],PDO::PARAM_INT);
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
									echo '<p>'.$row->content.'</p>';
								echo '</td>';
							echo '</tr>';
							echo '<tr>';
								echo '<td>';
									 echo '<p style="text-align: right"><a href="index.php">Powrót</a></p>';
								echo '</td>';
							echo '</tr>';
							echo '<hr>';
						echo '</table>';

					}

				} catch (PDOException $e) {
					$e->getMessage();
				}

			?>
		</section>
	</section>
	<section id="footer">
		FOOTER
	</section>
</body>
</html>