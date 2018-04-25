<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> | Electrobits |</title>

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
    <!-- 
     -->

    
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top asbestos" role="banner" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
    </button>
 <h2><a class="navbar-brand"><span class="glyphicon glyphicon-shopping-cart" style="color: red"> ELECTROBITS SYSTEM</span></a></h2>
    <div class="navbar-collapse collapse">
    <h6>
        <ul class="nav navbar-nav navbar-right">
<ul class="breadcrumb">
         <li class="active"> <a href="../client-side/index.php" class="btn btn-danger" ><span style="color: grey"><span class="glyphicon glyphicon-home"> Home</span></span></a></li>
         <li><a href="comment.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp; feedbacks</a></li>
         <li><a href="index.php"><span class="glyphicon glyphicon-dashboard"></span>&nbsp; Dashboard</a></li>
         <li><a href="licensetable.php"><span class="glyphicon glyphicon-certificate"></span>&nbsp; License forms</a></li>
         <li><a href="Additem.php"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp; Add Stock</a></li>
          <li><a href="trackitems.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Track shopping details</a></li>
          <li><a href="networktable.php"><span class="glyphicon glyphicon-wrench"></span>&nbsp; Network details</a></li>
         
         <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-hdd">Accessories</i><b class="caret" style="color: #000;"></b></span></a>
        <ul class="dropdown-menu">
        <div class="col-md-6">
                
                
                    <div class="panel-body">
                    
        <li><a href="phone.php"><span class="glyphicon glyphicon-phone"> Mobile phones</span></a></li>
        <li class="nav-divider" ">
        <li><a href="laptop.php"><span class="glyphicon glyphicon-barcode"> Laptops</span></a></li><li class="nav-divider" ">
        <li><a href="Tv.php"><span class="glyphicon glyphicon-hdd"> Television</span></a></li>
        </ul></li>
        <?php if (isset($_SESSION['user'])): ?>
             <li><a href="logout.php"><span class="glyphicon glyphicon-"><?php if (isset($_SESSION['name']))
   
     {
      # code...
       echo $_SESSION['user'];
    } ?></span>&nbsp; Logout</a></li>
         <?php else: ?>
            <li><a href="../client-side/Admin_login.php"><span class="glyphicon glyphicon-"></span>&nbsp; Login</a></li>
         <?php endif ?>
       
    

</ul>
        </ul>

        </li>
        
            

        </ul>
        </h6>
    </div>
        
    </div>
    
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