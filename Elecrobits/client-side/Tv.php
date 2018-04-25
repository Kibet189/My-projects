<?php
require 'header.php';
include_once('../include/config.php');

$query = "SELECT * FROM television";
$result = mysqli_query($con,$query);
?>
<section class="wet-asphalt">
<center><h2 style="color: gold">Televisions And Accessories</h2></center>
<div class="row">
    <div class="container">
    <div class="col-md-3">
            <div class="sidebar" id="sidebar">
    <hr>
    <ul class="nav nav-sidebar">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
    </button>
            
            <li><a href="mobile.php"><span class="glyphicon glyphicon-phone"> Mobiles</span></a></li>
            <li><a href="computer.php"><span class="glyphicon glyphicon-barcode"> Computer</span></a></li>
            
            <li><a href="profile.php"><span class="glyphicon glyphicon-user"> Profile</span></a></li>
            <li><a href="license.php"><span class="glyphicon glyphicon-certificate"> license</span></a></li>
        
        </ul>
        
    
        
    </div>
    
    
        </div>
    

        <div class="col-md-6" style="height: ; width: 500px;">
            <div  id="inner"  class="no-margin">
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

<div class="carousel-inner">
    <div class="item active">
    <center>
    <img class="img-circle img-responsive" src="../img/tv/8.png" alt="" style="height: 260px; " ></center>
    
    </div>
    <div class="item">
    <center>
    <img class="img-circle img-responsive" src="../img/tv/7.jpeg" alt="" style="height: 260px;"></center>
        

    </div>
    <div class="item">
    <center>
       <img class="img-circle img-responsive" src="../img/tv/3.jpeg" alt=""  style="height: 260px;"></center>
        
    </div>
    
    
    </div>
     
        </div>
        </div>
        <strong>We offer 15% discount on every 3 Televisions you purchase!</strong>
        
        </div>
        <div class="col-md-3">
            <div class="sidebar" id="sidebar">
    <h3 class="page-header"></h3>
    <ul class="nav nav-sidebar">
    
            
            <li><a href="index.php"><span class="glyphicon glyphicon-home"> Home page</span></a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"> Testimonies</span></a></li>
            <li><a href="profile.php"><span class="glyphicon glyphicon-shopping-cart"> Pay on deliver</span></a></li>
            
       
    
        
    </div>
    
    
        </div>
    </div></div></section><hr>

<section class="">
<div class="row">
	<div class="container">
    <?php foreach ($result as $r ) {
        # code...
    }
		?>
			<center><h2><span style="color: gold">Televisions</span></h2></center>
			<div class="col-md-2">
			 <center>
    <img class="img-circle img-responsive" src="../img/tv/2.jpg" alt="" style="height: 260px;"></center>
		</div>
		<div class="col-md-2">
			
                <center><strong>Dynex</strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                            <p>Title:  <td><?php echo $r['Type']; ?></td></p>
                            
                            <p>Size: <td><?php echo $r['Screen']; ?></td></p>
                            <p>Price: <td><?php echo $r['Price']; ?></td></p>
                            <button type="button" class="btn btn-danger" ><a href="profile.php" ><span class="glyphicon glyphicon-usd" ></span>&nbsp;&nbsp;Purchase</a></button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2" style="border-left: solid">
                <center>
       <img class="img-circle img-responsive" src="../img/tv/4.jpeg" alt="" style="height: 260px;"></center></div>
       <div class="col-md-2">
			
                <center><strong>CRT Tvs</strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                            <p>Title:  <td><?php echo $r['Type']; ?></td></p>
                            
                            <p>Size: <td><?php echo $r['Screen']; ?></td></p>
                            <p>Price: <td><?php echo $r['Price']; ?></td></p>
                            <button type="button" class="btn btn-danger" ><a href="profile.php" ><span class="glyphicon glyphicon-usd" ></span>&nbsp;&nbsp;Purchase</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="border-left: solid;">
 <center>
       <img class="img-circle img-responsive" src="../img/tv/3.jpeg" alt=""  style="height: 260px;"></center>
		</div>
		<div class="col-md-2">
			
          
                <center><strong>LED TVs</strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                            <p>Title:  <td><?php echo $r['Type']; ?></td></p>
                            
                            <p>Size: <td><?php echo $r['Screen']; ?></td></p>
                            <p>Price: <td><?php echo $r['Price']; ?></td></p><br>
                           <button type="button" class="btn btn-danger" ><a href="profile.php" ><span class="glyphicon glyphicon-usd" ></span>&nbsp;&nbsp;Purchase</a></button>
                        </div>
                    </div>
                </div>
	</div>
</div>

</section><hr>

<section class="">
<div class="row">
    <div class="container">
        <?php foreach ($result as $row ) {
        # code...
    }
        ?>
            
            <div class="col-md-2">
             <center>
    <img class="img-circle img-responsive" src="../img/tv/6.jpeg" alt="" style="height: 260px;"></center>
        </div>
        <div class="col-md-2">
            
                <center><strong>Smart Android</strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                            <p>Title:  <td><?php echo $row['Type']; ?></td></p>
                            
                            <p>Size: <td><?php echo $row['Screen']; ?></td></p>
                            <p>Price: <td><?php echo $row['Price']; ?></td></p><br>
                            <button type="button" class="btn btn-danger" ><a href="profile.php" ><span class="glyphicon glyphicon-usd" ></span>&nbsp;&nbsp;Purchase</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="border-left: solid">
                <center>
       <img class="img-circle img-responsive" src="../img/tv/7.jpeg" alt="" style="height: 260px;"></center></div>
       <div class="col-md-2">
            
                <center><strong>Plasma Tvs</strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                            <p>Title:  <td><?php echo $row['Type']; ?></td></p>
                            
                            <p>Size: <td><?php echo $row['Screen']; ?></td></p>
                            <p>Price: <td><?php echo $row['Price']; ?></td></p><br>
                            <button type="button" class="btn btn-danger" ><a href="profile.php" ><span class="glyphicon glyphicon-usd" ></span>&nbsp;&nbsp;Purchase</a></button>
                        </div>
                    </div>
                </div><div class="col-md-2" style="border-left: solid;">
 <center>
       <img class="img-circle img-responsive" src="../img/tv/3.jpeg" alt=""  style="height: 260px;"></center>
        </div>
        <div class="col-md-2">
            
                <center><strong>Flat Screen Tvs</strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                           <p>Title:  <td><?php echo $row['Type']; ?></td></p>
                            
                            <p>Size: <td><?php echo $row['Screen']; ?></td></p>
                            <p>Price: <td><?php echo $row['Price']; ?></td></p><br>
                           <button type="button" class="btn btn-danger" ><a href="profile.php" ><span class="glyphicon glyphicon-usd" ></span>&nbsp;&nbsp;Purchase</a></button>
                        </div>
                    </div>
                </div>
    </div>
    
</div>

</section><hr>
<footer>
    <?php require 'footer.php';
    ?>
</footer>

