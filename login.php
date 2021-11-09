	<?php
		session_start();
		include('conn.php');
	 
		$username=$_POST['username'];
		$password=$_POST['password'];
	 
		$query=mysqli_query($conn,"select * from `user` where username='$username' && password='$password'");
		$numrows=mysqli_num_rows($query);
	 
		if ($numrows==0){
			$_SESSION['message']="User not found!";
			header('location:index.php');
		}
		else{
			$row=mysqli_fetch_array($query);
			$_SESSION['id']=$row['userid'];
			header('location:success.php');
		}
	?>
