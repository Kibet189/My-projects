<?php
session_start();
include_once('config.php');
if (isset($_POST['login'])) {
	$uid= $_POST['username'];
	$password1=$_POST['password1'];
	$uid=mysqli_real_escape_string($con,$_POST['username']);
	$password1=mysqli_real_escape_string($con,$_POST['password1']);
	
		$sql="SELECT * FROM sign Where uid='$uid' AND password1='$password1'";
		$result=mysqli_query($con,$sql);
		$resultCheck=mysqli_num_rows($result);
		$row= mysqli_fetch_assoc($result);
		if ($resultCheck<2) {
			$_SESSION['error']="Your username and password do not match";
			header("Location: ../Front-end/login.php?login=invalid");
			exit();}}
	
	// {
	// 	$_SESSION['user'] = $row['$uid'];
	// 	header("Location: ../home.php");
	// 	exit();
	// }
	// 