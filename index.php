	<?php session_start(); ?>
	 
	<!DOCTYPE html>
	<html>
	<head>
		<title>Session Example</title>
	</head>
	<body>
		<h2>Login Form</h2>
		<form method="POST" action="login.php">
			<label>Username:</label> <input type="text" name="username"><br><br>
			<label>Password:</label> <input type="password" name="password"><br><br>
			<input type="submit" name="submit">
		</form>
		<br>
		<?php
	 
			if (isset($_SESSION['message'])){
				echo $_SESSION['message'];
			}
			unset($_SESSION['message']);
		?>
	</body>
	</html>
