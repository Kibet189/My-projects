<?php
require 'header.php';
require 'validation.php';
//$_SESSION['message']=='';
?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user active" >Admin Signup</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="admin_login.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Firstname</label>
        <div class="col-md-8">
          <input type="text" name="Firstname" placeholder="Firstname*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Lastname</label>
        <div class="col-md-8">
          <input type="text" name="Lastname" placeholder="Lastname*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Username</label>
        <div class="col-md-8">
          <input type="text" name="Username" placeholder="Username*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="text" name="Email" placeholder="Email*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Password</label>
        <div class="col-md-8">
          <input type="password" name="Password" autocomplete="password" placeholder="Your password*" class="form-control" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Confirm Password</label>
        <div class="col-md-8">
          <input type="password" name="Confirmpassword" placeholder="Confirmpassword*" autocomplete="password" class="form-control" required>
        </div> </div>
        <label></label>
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
        <p>Have account as admin? then  <a href="admin_login.php"><span style="color: red"> Login</span> </a></p><br>
         </div>
    </div>
                  
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
          <input type="reset" class="btn btn-danger" name="" value="Refresh">
            <input type="submit" class="btn btn-success" name="Admin_sign" value="Signup">
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