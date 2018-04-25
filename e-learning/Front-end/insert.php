<?php

$con = mysqli_connect('localhost', 'root', '','Learning');

if (!$con) {
	die("error" .mysqli_connect_error());
	# code...
}

	if (isset($_POST['signup'])){
	
		$firstname=$_POST['firstname'];
		$lastname=$_POST['Lastname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password1=$_POST['password1'];

		 $query= mysqli_query($con, "INSERT INTO new (firstname, lastname, email, phone, password1) VALUES ('$firstname', '$lastname', '$email', '$phone', '$password1')");
	
		
}

	if (isset($_POST['login'])){
	
		$Username=$_POST['Username'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
		$confirmPassword=$_POST['confirmPassword'];
		

		 $query= mysqli_query($con, "INSERT INTO old (Username,  Email, Password, confirmPassword) VALUES ('$Username', '$Email', '$Password', '$confirmPassword')");
		
}
}
?>