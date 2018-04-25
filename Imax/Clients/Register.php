	<?php require 'header.php'; ?>
<div class="row">
  <div class="container-fluid">
  <div class="col-md-11" >
       <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" > Create Account</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="login.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">FirstName</label>
        <div class="col-md-8">
          <input type="text" name="Name" placeholder="Lastname*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Lastname</label>
        <div class="col-md-8">
          <input type="text" name="Address" placeholder="Lastname*" class="form-control" value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="Email" placeholder="Email*" class="form-control"  value="" required>
        </div> </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">Password</label>
        <div class="col-md-8">
          <input type="Password" name="Password" placeholder="Password*" class="form-control" value="" required>
        </div> </div>
        
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
            <input type="submit" class="btn btn-success" name="Register" value="Create Account">
            <input type="reset" class="btn btn-warning" name="" value="Reset">
          </div>
        </div>
        
      </form>
        </div>
      </div></div>
     
</div>
		</div>