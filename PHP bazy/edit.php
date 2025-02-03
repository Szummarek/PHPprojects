<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Klasa 2PP - PHP - BAZY - EGZAMIN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styl.css">
	<script src="https://kit.fontawesome.com/d9cd8b3c1c.js" crossorigin="anonymous"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

	<script>
      tinymce.init({
        selector: '#mytextarea',
        language: 'pl'
      });
    </script>

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

					try {
						$conn = new PDO("mysql:host=localhost;dbname=2ppgrupa2","root","");
						$query = "SELECT id,title FROM articles";

						$result = $conn->prepare($query);
						$result->execute();

					echo '<h1>Wybierz artykuł z listy</h1>';
					echo '<form action="editarticle.php">';
					echo '<select name="idArticles">';
					while($row = $result->fetch(PDO::FETCH_OBJ)) {
						echo '<option value="$row->id">';
						echo $row->title;
						echo '<option>';
					}
					echo '</select>';
					echo '<input type="submit" value="Edytuj">';
					echo '</form>';

				} catch (PDOException $e) {
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