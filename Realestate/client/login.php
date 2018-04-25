<?php
require 'loginheader.php';
require '../RealEstateClient/validationprocess.php';

?>
<div class="row">
	<div class="container">
		<div class="col-md-6">
			 <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" > Sign In</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <?php if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
      unset($_SESSION['error']); 
        # code...
      }?>
      <form class="form-horizontal" action="../RealEstateClient/validationprocess.php" method="POST">
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
		<div class="col-md-6" style="border-left: solid;">
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
        <label class="control-label col-md-3">Name</label>
        <div class="col-md-8">
          <input type="text" name="Name" placeholder="Your Name*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Address</label>
        <div class="col-md-8">
          <input type="text" name="Address" placeholder="Address*" class="form-control" value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="Email" placeholder="Email*" class="form-control"  value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Phone</label>
        <div class="col-md-8">
          <input type="text" name="Phone" placeholder="Your phone number*" class="form-control" value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Password</label>
        <div class="col-md-8">
          <input type="Password" name="Password" placeholder="Password*" class="form-control" value="" required>
        </div> </div>
        
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
            <input type="submit" class="btn btn-success" name="Account" value="Create Account">
            <input type="reset" class="btn btn-warning" name="" value="Reset">
          </div>
        </div>
        
      </form>
        </div>
      </div>
		</div>

	</div>
</div>
<footer>
	<?php
	require '../RealEstateClient/footer.php'; 
	?>
</footer>