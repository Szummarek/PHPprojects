<?php
	session_start();
	if (isset($_SESSION['loginOK']) && $_SESSION['loginOK'] == true) {
		echo '<div class="header"><h3>Witaj: '.$_SESSION['username'].'</h3></div>';
		?>	
		  	<div class="panel">			
			<ul>
				<li><a href="#">Dodaj artykuł</a></li>
				<li><a href="edit.php">Edytuj artykuł</a></li>
				<li><a href="#">Zmień swoje hasło</a></li>
				<li><a href="logout.php">Wyloguj się</a></li>
			</ul>
			</div>
		<?php
	} else {
		?>	
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="header">
		  			<h3>Panel Logowania</h3>
		  		</div>
		  			<div class="panel">
				   <p>
				      <input type="text" name="login">
				      <label>Login</label>
				   </p>
				   <p>     
				      <input type="password" name="password">
				      <label>Hasło</label>
				   </p>
				   <p>
				   	<input type="submit" name="submit" value="Zaloguj się">
				   </p>
	<?php
	}

	if (isset($_POST['submit'])) {
		try {
			if (empty($_POST['login']) || empty($_POST['password'])) {
				echo '<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Uzupełnij wszystkie pola</p>';
			} else {
				$login = $_POST['login'];
				$password = $_POST['password'];
				$conn = new PDO("mysql:host=localhost;dbname=2ppgrupa2","root","");
				$query = "SELECT login,password FROM users WHERE login=:login AND password=:password AND active=1 ";
				$result = $conn -> prepare($query);
				$result -> bindParam(":login",$login,PDO::PARAM_STR);
				$result -> bindParam(":password",$password,PDO::PARAM_STR);
				$result -> execute();

				if ($result->rowCount()>0) {
					$_SESSION['loginOK'] = true;
					$_SESSION['username'] = $login;
					header('Location: index.php');
				} else {
					echo '<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Niepoprawny login i/lub hasło</p>';
				}

			}
		}
		catch(PDOException $echo){
			echo $e->getMessage();
		}
	}
?>	
			</div>
		</form>
</body>
</html>
