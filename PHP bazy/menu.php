	<?php
		try {
			$conn = new PDO("mysql:host=localhost;dbname=2ppgrupa2","root","");
			$query = "SELECT id,name,href,icon FROM menu WHERE active=1";
			$result = $conn -> prepare($query);
			$result -> execute();
			echo '<ul>';
			while ($menu = $result -> fetch(PDO::FETCH_OBJ)) {
				// $row->id
				echo '<li>';
				echo "<a class='btn' href='$menu->href'>$menu->name</a>";
				echo '<ul>';
				$query2 = "SELECT name,href,icon FROM submenu WHERE active=1 AND menuid=:id";
				$result2 = $conn -> prepare($query2);
				$result2 -> bindParam(':id',$menu->id,PDO::PARAM_INT);
				$result2 -> execute();
				while ($submenu = $result2 -> fetch(PDO::FETCH_OBJ)) {
					echo '<li >';
					echo "<a class='btn' href='$submenu->href'>$submenu->name</a>";
					echo '</li>';
				}
				echo '</ul>';
				echo '</li>';
			}
			echo '</ul>';			
		} catch(PDOException $e) {
			$e -> getMessage();
		}
	?>	