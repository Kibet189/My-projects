<?php 
session_start();
session_unset();
session_destroy();
ob_clean();
header("Location: ../client-side/Admin_login.php");

 ?>