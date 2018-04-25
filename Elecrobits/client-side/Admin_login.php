<?php
include 'header.php';
require 'validation.php';
?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user active" >Admin Login</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="../Admin/index.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Username</label>
        <div class="col-md-8">
          <input type="text" name="Username" placeholder="Username*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Password</label>
        <div class="col-md-8">
          <input type="Password" name="Password" placeholder="Your password*" class="form-control" required>
        </div> </div>
        <label></label>
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
         
      <input type="checkbox"> Remember me
    
    </div>
    </div>
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-success" name="Admin_login" value="Login">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </diV>
    <footer>
    	<?php
    	require 'footer.php';

    	?>
    </footer>
