<?php
//session_start();
require '../include/config.php';

$_SESSION['message']='';


if (isset($_POST['additem'])) {
	// print_r($_FILES); die;
	$Item=$_POST['Item'];
	$Date=$_POST['Date'];
	$Price=$_POST['Price'];
	$avatar=$_FILES['avatar']['name']; 
	$avatar_tmp=$_FILES['avatar']['tmp_name'];
   move_uploaded_file($avatar_tmp,"C:\\xampp\\htdocs\\sites\\Elecrobits\\img\\$avatar");
	
	 
	$query="INSERT INTO items (Item,Date,Price,avatar) VALUES('$Item','$Date','$Price','$avatar')";
	$result=mysqli_query($con,$query);
	
			# code...
		}
	
	# code...

if (isset($_POST['edititem'])) {
	$Item=$_POST['Item'];
	$Date=$_POST['Date'];
	$Price=$_POST['Price'];
	$id= $_GET['key'];
	$query="UPDATE items SET Item='$Item', Date='$Date', Price='$Price' WHERE id='$id'";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['delete'])) {
   $delid= $_POST['delid'];
   $query = "DELETE FROM items WHERE id='$delid'";
$result = mysqli_query($con,$query);
}
if (isset($_POST['Television'])) {
	$Type=$_POST['Type'];
	$Screen=$_POST['Screen'];
	$Price=$_POST['Price'];
	$query="INSERT INTO Television (Type,Screen,Price) VALUES('$Type','$Screen','$Price')";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['mobile'])) {
	$phone=$_POST['phone'];
	$size=$_POST['size'];
	$price=$_POST['price'];
	$query="INSERT INTO mobiles (phone,size,price) VALUES('$phone','$size','$price')";
	$result=mysqli_query($con,$query);
	# code...
}
if (isset($_POST['Laptops'])) {
	$type=$_POST['type'];
	$screen=$_POST['screen'];
	$storage=$_POST['storage'];
	$disk=$_POST['disk'];
	$core=$_POST['core'];
	$inch=$_POST['inch'];
	$price=$_POST['price'];
	$query="INSERT INTO laptop (type,screen,storage,disk,core,inch,price) VALUES('$type','$screen','$storage','$disk','$core','$inch','$price')";
	$result=mysqli_query($con,$query);
	# code...
}
?>