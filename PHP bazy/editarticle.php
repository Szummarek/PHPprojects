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

				if (!isset($_SESSION['loginOK'])) {
					
					echo '<h1>Brak uprawnień</h1>';

				} else {
					echo 'Można edytować';
					echo $_POST['idArticles'];

					try {
						$conn = new PDO("mysql:host=localhost;dbname=2ppgrupa2","root","");
						$query = "SELECT title,content,datetime,active FROM articles WHERE id=:idArticle";

						$result = $conn->prepare($query);
						$result -> bindParam("idArticle",$_POST['idArticles'], PDO::PARAM_INT);
						$result->execute();

						$row = $result -> fetch(PDO::FETCH_OBJ);

						echo '<input type="text" id="mytextarea" value="'.$row->title.'">';

				}  catch (PDOException $e) {
					$e->getMessage();
				}
				}

			?>
		</section>
	</section>
	<section id="footer">
		FOOTER
	</section>
</body>
</html>