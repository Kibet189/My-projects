<?php
include_once ('config.php');
if (isset($_POST['signup'])) {
	
	//to prevent mysql injection
	

	// $firstname=mysqli_real_escape_string($con,$_POST['firstname']);
	// 	$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
	// 	$email=mysqli_real_escape_string($con,$_POST['email']);
	// 	$uid=mysqli_real_escape_string($con,$_POST['uid']);
	// 	$password1=mysqli_real_escape_string($con,$_POST['password1']);
		//Error checking
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email= $_POST['email'];
	$uid= $_POST['uid'];
	$password1=$_POST['password1'];
	$confirmPassword=$_POST['confirmPassword'];
	$firstname=stripcslashes($firstname);
	$lastname=stripcslashes($lastname);
	$email=stripcslashes($email);
	$uid=stripcslashes($uid);
	$password1=stripcslashes($password1);
	$confirmPassword=stripcslashes($confirmPassword);
		
			//check for validity
			if (!preg_match("/^[a-zA-Z]*$/", $firstname) ||!preg_match("/^[a-zA-Z]*$/ ", $lastname)) {

				header("Location: ../Front-end/sign.php?signup=invalid");
	              exit();# code...
			}
			else{
				if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

					header("Location: ../Front-end/sign.php?signup=email");
	              exit();
				}
				else{
					
					$sql="SELECT * FROM Learning Where uid='$uid'";
					$result=mysqli_query($con,$sql);
					$resultCheck=mysqli_num_rows($result);
					if ($resultCheck>0) {
						header("Location: ../Front-end/sign.php?signup=usertaken");
	              exit();
						# code...
					}
								
					else{
						$hashedPwd=sha1($password1);
						$hashedPwd2=sha1($confirmPassword);
						if (!$password1 == $confirmPassword){
							echo "password Mismatch";
							# code...
						
						}
						else{
					
						  $sql= mysqli_query($con, "INSERT INTO sign (firstname, lastname, email, uid, password1,confirmPassword) VALUES ('$firstname', '$lastname', '$email', '$uid', '$hashedPwd','$hashedPwd2')");
						  $result=mysqli_query($con,$sql);
						  header("Location: ../Front-end/home.php?signup=sucesss");
	              exit();

					}

			}

		}

	# code...
}

}


?>