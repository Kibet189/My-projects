<?php require '../include/config.php';

if (isset($_POST['contact'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$query="INSERT INTO contact (name,email,mobile) VALUES ('$name','$email','$mobile')";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['login'])) {
	session_start();  
	$Password=md5($_POST['password']);
	$Email=$_POST['email'];
	$query="SELECT * FROM signin WHERE Password='$Password' AND Email='$Email'" or die("error occured");
	$result=mysqli_query($con,$query);

	if (!$result) {
		# code...
		echo "string";
	}
	foreach ($result as $k) {
		$_SESSION['name']= $k['Name'];
		$_SESSION['email']= $k['Email'];
		$_SESSION['add']= $k['Address'];
		$_SESSION['mobile']= $k['Phone'];
		$_SESSION['password']= $k['Password'];
		$_SESSION['id']=$k['Id'];
		header("Location: ../RealEstateClient/index.php");
	}

	
}
if (isset($_POST['Account'])) {
	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Password=$_POST['Password'];
	$hashpwd=md5($Password);
	$Name=mysqli_real_escape_string($con,$_POST['Name']);
	$Address=mysqli_real_escape_string($con,$_POST['Address']);
	$Email=mysqli_real_escape_string($con,$_POST['Email']);
	$Phone=mysqli_real_escape_string($con,$_POST['Phone']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	$query="INSERT INTO signin (Name,Address,Email,Phone,Password) VALUES ('$Name','$Address','$Email','$Phone','$hashpwd')";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['add'])) {
	$name=$_POST['name'];
	$charge=$_POST['charge'];
	$space=$_POST['space'];
	$floor=$_POST['floor'];
	$bath=$_POST['bath'];
	$bed=$_POST['bed'];
	$balcony=$_POST['balcony'];
	$description=$_POST['description'];
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$charge=mysqli_real_escape_string($con,$_POST['charge']);
	$space=mysqli_real_escape_string($con,$_POST['space']);
	$floor=mysqli_real_escape_string($con,$_POST['floor']);
	$bath=mysqli_real_escape_string($con,$_POST['bath']);
	$bed=mysqli_real_escape_string($con,$_POST['bed']);

	$balcony=mysqli_real_escape_string($con,$_POST['balcony']);
	$description=mysqli_real_escape_string($con,$_POST['description']);
	$avatar=$_FILES['avatar']['name']; 
	$avatar_tmp=$_FILES['avatar']['tmp_name'];
   move_uploaded_file($avatar_tmp,"C:\\xampp\\htdocs\\sites\\Realestate\\img\\$avatar");

	$query="INSERT INTO post (name,charge,space,floor,bath,bed,balcony,description,avatar) VALUES ('$name','$charge','$space','$floor','$bath','$bed', '$balcony', '$description','$avatar')";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['add'])) {
	$name=$_POST['name'];
	$charge=$_POST['charge'];
	$space=$_POST['space'];
	$floor=$_POST['floor'];
	$bath=$_POST['bath'];
	$bed=$_POST['bed'];
	$balcony=$_POST['balcony'];
	$description=$_POST['description'];
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$charge=mysqli_real_escape_string($con,$_POST['charge']);
	$space=mysqli_real_escape_string($con,$_POST['space']);
	$floor=mysqli_real_escape_string($con,$_POST['floor']);
	$bath=mysqli_real_escape_string($con,$_POST['bath']);
	$bed=mysqli_real_escape_string($con,$_POST['bed']);

	$balcony=mysqli_real_escape_string($con,$_POST['balcony']);
	$description=mysqli_real_escape_string($con,$_POST['description']);
	$avatar=$_FILES['avatar']['name']; 
	$avatar_tmp=$_FILES['avatar']['tmp_name'];
   move_uploaded_file($avatar_tmp,"C:\\xampp\\htdocs\\sites\\Realestate\\img\\$avatar");

	$query="INSERT INTO barek (name,charge,space,floor,bath,bed,balcony,description,avatar) VALUES ('$name','$charge','$space','$floor','$bath','$bed', '$balcony', '$description','$avatar')";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['profile'])) {

	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Password=$_POST['Password'];
	$Id= $_GET['key'];
	$query="UPDATE signin SET Name='$Name', Address='$Address', Email='$Email', Phone='$Phone',Password='$Password' WHERE id='$Id'";
	$result=mysqli_query($con,$query);
	# code...
}
?>
