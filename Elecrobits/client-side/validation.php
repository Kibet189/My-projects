 <?php

        require '../include/config.php';

        

        if (isset($_POST['notification'])) {
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $date=$_POST['date'];
        $message=$_POST['message'];
        $query="INSERT INTO contact(name,contact,date,message) VALUES('$name','$contact','$date','$message')";
        $result=mysqli_query($con,$query);


            # code...
        }
//         if (isset(['quantity'])) {

// INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
// (1, '3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
// (2, 'External Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
// (3, 'Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00);

//             # code...
//         }

    if (isset($_POST['sign'])) {
        if ($_POST['password'] == $_POST['confirmpassword']) {
            $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];
        $hashpwd1=md5($password);
        $hashpwd2=md5($confirmpassword);
        $query="INSERT INTO sign(firstname,lastname,username,email,password,confirmpassword)VALUES('$firstname','$lastname','$username','$email','$hashpwd1','$hashpwd2')";
        $result=mysqli_query($con,$query);
//         if (mysqli_query($con,$query) === true) {
//             $_SESSION['name']="$username,Registration succesful ";
//             header("Location:login.php");exit();
//          } 
//            else {
//              $_SESSION['name']="$username,Registration unsuccesful ";
//             header("Location: sign.php?sign=invalid Registration");
//            } # code...
//         }
        
// else{
//    $_SESSION['name']="password do not match"  ;
//    header("Location: sign.php?sign=password mismatch"); 
}
    }
    if (isset($_POST['login'])) {
        session_start();
        $username=$_POST['Username'];
        $password=$_POST['Password'];
        $query="SELECT  * FROM sign WHERE username='$username' || password='$password'"or die("error occured");
        $result=mysqli_query($con,$query);
        if (!$result) {
        # code...
        echo "string";
    }
    foreach ($result as $k) {
        $_SESSION['name']= $k['Username'];
        
        header("Location: index.php");
    }
        

    }
    if (isset($_POST['Get'])) {
        $organization=$_POST['organization'];
        $date=$_POST['date'];
        $license=$_POST['license'];
        $query="INSERT INTO license (organization,date,license)VALUES('$organization','$date','$license')";
        $result=mysqli_query($con,$query);
    }
if (isset($_POST['network'])) {
    $Organization=$_POST['Organization'];
    $Year=$_POST['Year'];
    $Network=$_POST['Network'];
    $query="INSERT INTO network(Organization,Year,Network) VALUES('$Organization','$Year','$Network')";
    $result=mysqli_query($con,$query);
      # code...
}
if (isset($_POST['Comment'])) {
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $contact=$_POST['contact'];
    $comment=$_POST['comment'];
    $query="INSERT INTO comment(Name,Email,contact,comment) VALUES('$Name','$Email','$contact','$comment')";
    $result=mysqli_query($con,$query);
}
if (isset($_POST['purchase'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $payment=$_POST['payment'];
    $date=$_POST['date'];
    $guarantor=$_POST['guarantor'];
    $product=$_POST['product'];
    $amount=$_POST['amount'];
    $query="INSERT INTO items_purchased (name,email,contact,payment,date,guarantor,product,amount) VALUES('$name','$email','$contact','$payment','$date','$guarantor','$product','$amount')";
    $query=mysqli_query($con,$query);
    # code...
}
if (isset($_POST['Admin_sign'])) {
    if ($_POST['Password'] == $_POST['Confirmpassword']) {
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $Confirmpassword=$_POST['Confirmpassword'];
     $hashpwd1=md5($Password);
        $hashpwd2=md5($Confirmpassword);
    $query="INSERT INTO admin_sign(Firstname,Lastname,Username,Email,Password,Confirmpassword)VALUES('$Firstname','$Lastname','$Username','$Email','$hashpwd1','$hashpwd2')";
    $result=mysqli_query($con,$query);

  }
  // else{
  //   $_SESSION['message']="Password mismatch";
  //   header("Location: Admin_sign.php");
  // }  # code...
}
if (isset($_POST['Admin_login'])) {
  session_start(); 
  $Username=$_POST['Username']; 
    $Password=md5($_POST['Password']);
    
        $query="SELECT  * FROM admin_sign WHERE Username='$ Username' || Password='$Password' "or die("error occured");
        $result=mysqli_query($con,$query);
       if (!$result) {
        # code...
        echo "string";
    }
    foreach ($result as $k) {
        $_SESSION['firstname']= $k['Firstname'];
        $_SESSION['lastname']= $k['Lastname'];
        $_SESSION['email']= $k['Email'];
         $_SESSION['password']= $k['Password'];
        $_SESSION['user']= $k['Username'];
        header("Location: ../Admin/index.php");
    }
}
    ?>
        