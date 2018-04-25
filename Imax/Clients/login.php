<?php
require 'header.php';


?>
<div class="row">
	<div class="container">
		<div class="col-md-11">
			 <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" > Sign In</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      
      <form class="form-horizontal" action="Booking.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="email" placeholder="Email*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Password</label>
        <div class="col-md-8">
          <input type="Password" name="password" placeholder="Password*" class="form-control" value="" required>
        </div> </div>
        
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
            <input type="submit" class="btn btn-success" name="login" value="Login">
            <input type="reset" class="btn btn-warning" name="" value="Reset">
          </div>
        </div>
        
      </form>
        </div>
      </div>
		</div>
	

	</div>
</div>
