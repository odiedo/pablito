<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>MSU Social</title>
</head>
<body>
<?php
	// ob_start();
	session_start();
	$l=mysqli_connect("localhost","root","","msu_social");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from `users` where  `username`='".$username."' and `Password`='".$password."'";
	
	$res=mysqli_query($l, $q);
	if(mysqli_num_rows($res)>0)
	{
	  $_SESSION['username']=$username;
		if ($username == 'kiddoneljanca,' && $password == 'jhdbssnbskadmin123') {
			session_write_close();
			header("location: admin_panel.php");
			exit();
		}else{
			echo "<script>window.location='index1.php';</script>";
		}
	}
	else
	{
		$message="Incorrect username/password found! Please confirm your login credentials and try again!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='index.php';</script>";
		echo"<script>close()</script>";
	}
?>
</body>
</html>