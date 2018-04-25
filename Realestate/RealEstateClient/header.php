<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> | Real Estate  |</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link href="../css/bootstrap.mini.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link href="../css/agency.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
@import url("https://www.imax.com/modules/system/system.base.css?p7gfne");
</style>

<style>


@import url("https://www.imax.com/sites/all/themes/imax/css/theme-style.css?p7gfne");
</style> -->
   
</head>

<body>


<nav class="navbar navbar-default navbar-fixed-top midnight-blue" role="banner" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
    </button>
    <img class="img-circle img-responsive" src="../img/real logo.jpeg" style="float:left; margin-right:10px;height:100px;width:100px;">
    <h3><a class="navbar-brand" style="color: khaki"><span style="color: khaki ">Devilla Real Estate</span></a></h3>
    <div class="navbar-collapse collapse">
    <h6>
        <ul class="nav navbar-nav navbar-right">
<ul class="breadcrumb">
         <li class="active"> <a href="index.php" class="btn btn-default" ><span style="color: grey"><span class="glyphicon glyphicon-home"> Home</span></span></a></li>
         <li><a href="properties.php"><span class="glyphicon glyphicon-"></span>&nbsp; Properties</a></li>
         <li><a href="post.php"><span class="glyphicon glyphicon-"></span>&nbsp; Add properties</a></li>
         <li><a href="profile.php?key=<?php if (isset($_SESSION['name'])): echo $_SESSION['id'] ; endif?>"><span class="glyphicon glyphicon-"></span>&nbsp; Profile</a></li>
         <li><a href="contact.php"><span class="glyphicon glyphicon-"></span>&nbsp; Contact</a></li>
         
         <?php if (isset($_SESSION['name'])): ?>
             <li><a href="logout.php"><span class="glyphicon glyphicon-"><?php if (isset($_SESSION['name']))
   
     {
      # code...
       echo $_SESSION['name'];
    } ?></span>&nbsp; Logout</a></li>
         <?php else: ?>
            <li><a href="../client/login.php"><span class="glyphicon glyphicon-"></span>&nbsp; Login</a></li>
         <?php endif ?>
       
       

</ul>
        </ul>

    

        
    
</nav>
 <script src="../jquery/jquery.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
    <!--  -->



    <!-- Theme JavaScript -->
    <script src="../js/agency.min.js"></script>


</body>
</html>
