<?php
require 'header.php';
require 'validation.php';

?>
<section class="wet-asphalt">
<center><h2 style="color: gold">Electrobits System License and Network form</h2></center>
<div class="row">
	<div class="container">
	<div class="col-md-2">
			<div class="sidebar" id="sidebar">
    <h3 class="page-header">Set Up</h3>
    <ul class="nav nav-sidebar">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
    </button>
            
            <li><a href="license.php">Get Network License</a></li>
            <li><a href="Network.php">Network Set Up</a></li>
            <li><a href="Network.php">Network</a></li>
            <li><a href="Hardwares.php">Hardwares</a></li>
            <li><a href="software.php">Software</a></li>
            <li><a href="#">license</a></li>
        
        </ul>
        
    
        
    </div>
    
    
		</div>
	

		<div class="col-md-5" style="height: ; width:px;">
		
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-certificate" > License Form</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="license.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Name of organization</label>
        <div class="col-md-8">
          <input type="text" name="organization" placeholder=" Name of organization*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Year Of Establishment</label>
        <div class="col-md-8">
          <input type="date" name="date" placeholder="Year*" class="form-control" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Purpose of license</label>
        <div class="col-md-8">
          <input type="text" name="license" placeholder="Purpose of license*" class="form-control" required>
        </div> </div>
        <label></label>
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           <input type="reset" class="btn btn-warning" name="" value="Cancel">
            <input type="submit" class="btn btn-success" name="Get" value="Get License">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
		
		<div class="col-md-5" style="border-left: solid;">
			
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-wrench" > Network Set Up</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="license.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Name of organization</label>
        <div class="col-md-8">
          <input type="text" name="Organization" placeholder="Name of organization*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Year Of Establishment</label>
        <div class="col-md-8">
          <input type="date" name="Year" placeholder="Year of Establishment*" class="form-control" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Type of Network Set Up</label>
         <div class="col-md-8">
        <input type="text" name="Network" placeholder="Network set up type*" class="form-control" required>
        	<div></div></div>
        </div>
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           <input type="reset" class="btn btn-danger" name="" value="Cancel">
            <input type="submit" class="btn btn-success" name="network" value="Submit form">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
    
    
		</div>
	</div></section><hr><footer><?php require 'footer.php';?></footer>
