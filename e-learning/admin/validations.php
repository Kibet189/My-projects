<?php
$msg="";
	/**
	**Username validation 
	**/
	if(empty($username)){
		$msg="This field is required";
		header("Location: ../adminhm.php?signup=emptyu");
		exit();
	}
	if(strlen($username)<=9||strlen($username>=31)){
		$msg="This field should contain at least 8, and at most 30 characters";
		header("Location: ../adminhm.php?signup=length");
		exit();
	}else{
		$pattern='/^[a-zA-Z0-9]{8,30}$/';
		if (!preg_match($pattern, $username)) {
			$msg="Username or Title contains invalid characters";
			header("Location: ../adminhm.php?signup=invalidu");
			exit();
		}else{

			$sql="SELECT * FROM tbusers WHERE username='$username' OR email='$username';";
			$result=mysqli_query($conn,$sql)OR die($msg="Couldnt Execute Query");
			$resCount=mysqli_num_rows($conn,$result);

			if($resCount>0){
				$msg="Username already taken";
				header("Location: ../adminhm.php?signup='username taken'");
				exit();
			}
		}
	}

	/**
	**Password Validation
	**/
	if(empty($password)){
		$msg="Password is required";
		header("Location: ../adminhm.php?signup=emptyp");
		exit();
	}elseif(strlen($password)<8){
		$msg="Password should be 8 characters or more";
		header("Location: ../adminhm.php?signup=shortp");
		exit();
		}elseif(!preg_match('/^[:alnum:][ ][:punct:]$/',$password)){
			$msg="Password must be atleast 8 alphanumeric characters,atleast one number andone punctuation";
			header("Location: ../adminhm.php?signup=ivalidp");
			exit();
		}

	/**
	**Firstname Validation
	**/
	if(empty($fname)){
		$msg="First name cannot be empty";
		header("Location: ../adminhm.php?signup=emptyf");
		exit();
	}elseif(!preg_match('/^[:alnum:]{5}$/',$fname)){
		$msg="First name can contain atleast 5 characters <br/>alphanumeric and numbers only";
		header("Location: ../adminhm.php?signup=ivalidf");
		exit();
	}

	/**
	**Firstname Validation
	**/
	if(empty($lname)){
		$msg="First name cannot be empty";
		header("Location: ../adminhm.php?signup=emptyl");
		exit();
	}elseif(!preg_match('/^[:alnum:]$/',$lname)){
		$msg="First name can contain atleast 5 characters<br/>alphanumeric characters and numbers only";
		header("Location: ../adminhm.php?signup=ivalidl");
		exit();
	}

	/**
	**Id number Validation
	**/
	if(empty($idnumber)){
		$msg="ID number cannot be empty";
		header("Location: ../adminhm.php?signup=emptyi");
		exit();
	}elseif(!preg_match('/^[:alnum:]{5,10}$/',$idnumber)){
		$msg="ID number can contain atleast 5 characters<br/>alphanumeric and numbers only";
		header("Location: ../adminhm.php?signup=ivalidi");
		exit();
	}

	/**
	**Email Validation
	**/
	if(empty($email)){
		$msg="Email cannot be empty";
		header("Location: ../adminhm.php?signup=emptye");
		exit();
	}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$msg="Email is in wrong format";
		header("Location: ../adminhm.php?signup=invalide");
		exit();
	}

	/**
	**Phone number Validation
	**/
	if(!preg_match('/^[:digit:]{4}[-]|[ ][:digit:]{6}]$/',$phone)){
		$msg="Phone number can contain only 10 digits(07xx-xxxxxx)";
		header("Location: ../adminhm.php?signup=ivalidp");
		exit();
	}

	/**
	**Id number Validation
	**/
	if(!preg_match('/^[:alnum:]{5,10}$/',$idnumber)){
		$msg="ID number can contain atleast 5 characters<br/>alphanumeric and numbers only";
		header("Location: ../adminhm.php?signup=ivalidid");
		exit();
	}

}
<? php
if (isset($_POST["submit"])) {
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Website=$_POST["Website"];
$Comment=$_POST["Comment"];
$Gender=$_POST["Gender"];

}
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
  else {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
  else{
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

?>
?>