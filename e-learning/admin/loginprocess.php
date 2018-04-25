<?php
session_start();
include_once('../include/config.php');
if (isset($_POST['admin'])) {
  $Usename= $_POST['Username'];
  $password=$_POST['Password'];
  $Username=mysqli_real_escape_string($con,$_POST['Username']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  if ((empty($Username)) ||(empty($password))){
      header("Location: ../Front-end/admin_login.php?signup=empty");
         exit();# code... 
    }
    $sql="SELECT * FROM admin_sign Where Username='$Username' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $resultCheck=mysqli_num_rows($result);
    $row= mysqli_fetch_assoc($result);
    if ($resultCheck < 1) {
      $_SESSION['error']="Your username and password do not match";
      header("Location: /Front-end/admin_login.php?login=invalid");
      exit();}
    }
    if ($sql) {
      header("Location: index.php");
      # code...
    }
  else
  {
    $_SESSION['user'] = $row['$username'];
    header("Location: index.php");
    exit();
  }
  
?>