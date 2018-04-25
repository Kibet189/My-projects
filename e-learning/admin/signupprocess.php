
<?php
include'../include/config.php';



if (isset($_POST['sign'])) {
	
	//to prevent mysql injection
	

	$Username=$_POST['Username'];
	$lastname=$_POST['lastname'];
	$email= $_POST['email'];
	//$user= $_POST['user'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	$Username=stripcslashes($Username);
	$lastname=stripcslashes($lastname);
	$email=stripcslashes($email);
	//$user=stripcslashes($user);
	$password=stripcslashes($password);
	$confirmPassword=stripcslashes($confirmPassword);
		if ((empty($Username)) ||(empty($lastname))||(empty($email))||  (empty($password)) ||(empty($confirmPassword))){
			header("Location: admin_sign.php?signup=empty");
	       exit();# code... 
		}
		else{
			//check for validity
			if (!preg_match("/^[a-zA-Z]*$/", $Username) ||!preg_match("/^[a-zA-Z]*$/ ", $lastname)) {

				header("Location: admin_sign.php?signup=invalid");
	              exit();# code...
			}
			else{
				if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

					header("Location: admin_sign.php?signup=email");
	              exit();
				}
				else{
					
					$sql="SELECT * FROM Learning Where Username='$Username'";
					$result=mysqli_query($con,$sql);
					$resultCheck=mysqli_num_rows($result);
					if ($resultCheck>0) {
						header("Location: sign.php?signup=usertaken");
	              exit();
						# code...
					}
							
					else{
						$hashedPwd=sha1($password);
						$hashedPwd2=sha1($confirmPassword);
						if (!$password == $confirmPassword){
							echo "password Mismatch";
							# code...
						
						}


					
						  $sql= mysqli_query($con, "INSERT INTO admin_sign (Username, lastname, email, password, confirmPassword) VALUES ('$Username', '$lastname', '$email',  '$hashedPwd', '$hashedPwd2')");
						  $result=mysqli_query($con,$sql);
if ($sql) {
        header("Location: ../Front-end/admin_login.php");
        exit();}
        else{
        	echo "connection error";
        }

					}

				}
			}

		}

	# code...
}
?>
