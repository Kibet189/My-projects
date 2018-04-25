<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | Nime Institute</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link href="../css/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link href="../css/agency.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../css/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/css/main.css">
    <!-- 
     -->
<style>
@import url("https://www.imax.com/modules/system/system.base.css?p7gfne");
</style>
<style>
@import url("https://www.imax.com/sites/all/modules/date/date_api/date.css?p7gfne");
@import url("https://www.imax.com/sites/all/modules/date/date_popup/themes/datepicker.1.7.css?p7gfne");
@import url("https://www.imax.com/modules/field/theme/field.css?p7gfne");
@import url("https://www.imax.com/sites/all/modules/views/css/views.css?p7gfne");
</style>
<style>
@import url("https://www.imax.com/sites/all/modules/colorbox/styles/default/colorbox_style.css?p7gfne");
@import url("https://www.imax.com/sites/all/modules/ctools/css/ctools.css?p7gfne");
@import url("https://www.imax.com/modules/locale/locale.css?p7gfne");
</style>
<link type="text/css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" media="all" />
<style>
@import url("https://www.imax.com/sites/all/themes/bootstrap/css/overrides.css?p7gfne");
@import url("https://www.imax.com/sites/all/themes/imax/css/style.css?p7gfne");
@import url("https://www.imax.com/sites/all/themes/imax/css/theme-style.css?p7gfne");
</style> -->
</head>

    
</head>
<style type="text/css">
    body{
    padding-bottom: px;
</style>
<body>
<nav class="navbar navbar-default navbar-fixed-top wet-asphalt" role="banner" style="padding-bottom: px;">
    <div class="container">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
    </button>
   <img class="img-circle img-responsive" src="../img/logo.png" style="float:left; margin-right:10px;height:100px;width:100px;">
    <h3><a class="navbar-brand" style="color: khaki"><span style="color: khaki bgcolor: maroon display:block">NIME TECHNICAL COLLEGE</span></a></h3>
    <div class="navbar-collapse collapse">
    <h6>
        <ul class="nav navbar-nav navbar-right">
        <li ><a href="#" ><span style="color: red"><?php if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];
        } ?></span></a></li>
        <li class="active"> <a href="home.php" class="btn btn-danger" ><span style="color: grey"><span class="glyphicon glyphicon-home"> Home</span></span></a></li>
        </li>
        <?php
        if (isset($_SESSION['user'])):
            
       
          ?>
      <li class=""><a href="../include/logout.php"><span style="color: grey"><span class="glyphicon glyphicon-user"> Logout</span></a></li>
      <?php 
      else:
       ?>
   
         
                    

                        <li class=""><a href="sign.php" ><span style="color: grey" ><i class="glyphicon glyphicon-eye-open"> sign Up</i></span></a></li></

                        <hr>
                        
        <li class=""><a href="Login.php"><span style="color: grey"><span class="glyphicon glyphicon-log-in">   Login</span></span></a></li>
    
   
                
            <?php endif; ?>
       

    <li class="dropdown" id="d">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: grey"><i class="glyphicon glyphicon-info-sign"> About Us</i><b class="caret" style="color: #000;"></b></span></a>
        <ul class="dropdown-menu">
        <div class="col-md-6">
                
                
                    <div class="panel-body">
                    
        <li><a href="staff.php"><span class="glyphicon glyphicon-user"> Leadership</span></a></li><li class="nav-divider" ">
        
        <li><a href="Academic.php"><span class="glyphicon glyphicon-book"> Academic </span></a></li><li class="nav-divider" ">
        
        <li> <a href="games.php"><span class="glyphicon glyphicon-globe"> Games</span></a></li><li class="nav-divider" ">
        <li> <a href="About.php"><span class="glyphicon glyphicon-info-sign"> About Us</span></a></li>
          </li> </div></div> 
        </ul>
        </li>
        
        <li class=""><a href="courses.php"><span style="color: grey">Courses</span></a></li>
        <li class=""><a href="contact.php"><span style="color: grey"><i class="glyphicon glyphicon-envelope"></i>  Contact</span></span></a></li>
        
        <li class=""><a href="admin_sign.php"><span style="color: red"><span class="glyphicon glyphicon-user"> Admin</span></span></a></li>
        
            

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