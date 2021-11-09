	<?php
		session_start();
		include('conn.php');
		$userid=$_SESSION['id'];
	 
		$userq=mysqli_query($conn,"select * from `user` where userid='$userid'");
		$userrow=mysqli_fetch_array($userq);
	?>
	<!doctype html>
	<html>
	<head>
		<title>Session Example</title>
	</head>
	<body>
		<h2>User Found! </h2>
		Welcome, <?php echo $userrow['fullname']; ?>
	</body>
	</html>
