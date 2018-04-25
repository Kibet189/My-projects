<?php

require 'header.php';
require 'validation.php';

?>

	<style type="text/css">
		form
		{
			margin-left: 200px;
		}
		input, button
		{
			width: 100px;
			height: 50px;
			margin-top: 10px;

		}
		fieldset
		{
			width: 50px;
			margin-left: 50px;
			padding: 100px;
			border-radius: 5px;

		}

	</style>
	<style type="text/css">
		#ba{
			width: ;
		}
	</style>
<br>
	<div class="wet-asphalt">
		<div class="container">
			<div class="row centered">
			<h4><span style="color: gold"> Create Account</span></h4>
			<hr>
			<div class="col-md-4">
				<small><p>Inorder to have full privileges,we request you to create an account if you dont have one.You can use the buttons to either create account or be back to our home page</p></small>

			</div>
				<div class="col-sm-8 centered"  style="border-left: double;" id="ba">
          
                     <ul class="breadcrumb pull-right">
                        <li><a href="computer.php" class="btn btn-primary">Computers</a></li>
                        <li><a href="Network.php" class="btn btn-warning">Network</a></li>
                        <li><a href="contact.php" class="btn btn-danger">Contact Us</a></button></li>
                       
                    </ul>
                </div>
				</div>
			</div>
		</div>
	</div><hr>
	

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" id="sign"> Register</span></center>

          
        </h3>
      </div>
   
      <div class="panel-body">
<form role="form" action="validation.php" method="POST" novalidate>

<div class="form-group">

 <label></label>
 <div class="input-group input-group-lg">
 <span class="glyphicon glyphicon-user input-group-addon"></span>
<input type="text" name="firstname" class="form-control" placeholder="first name" required><p class="help-block text-danger"></p>
</div></div>
<div class="form-group">
<label></label>
<div class="input-group input-group-lg">
<span class="glyphicon glyphicon-user input-group-addon"></span>
	<input type="text" name="lastname" class="form-control" placeholder="last name" required><p class="help-block text-danger"></p>
</div></div>
<div class="form-group">
<label></label>
<div class="input-group input-group-lg">
<span class="glyphicon glyphicon-user input-group-addon"></span>
 
 <input type="tel" class="form-control" name="username" placeholder="Your Username *" id="username" required data-validation-required-message="Username required.">
   <p class="help-block text-danger"></p></div>
     </div>
<div class="form-group">
<label></label>
<div class="input-group input-group-lg">
<span class="glyphicon glyphicon-envelope input-group-addon"></span>
	<input type="email" name="email" class="form-control" placeholder="Example@gmail.com" required><p class="help-block text-danger"></p>
</div>
</div>
<div class="form-group">
<label></label>
<div class="input-group input-group-lg">
<span class="glyphicon glyphicon-eye-open input-group-addon"></span>
	<input type="password" id="password" name="password" class="form-control" placeholder="Create password" autocomplete="password" required><p class="help-block text-danger"></p>
</div>
</div>
<div class="form-group">
<label></label>
<div class="input-group input-group-lg">
<span class="glyphicon glyphicon-eye-open input-group-addon"></span>
	<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm password" required><p class="help-block text-danger"></p>
	</div>
</div>


<div class="">
          </div>
<div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-success" name="sign" value="Signup">
            <input type="reset" class="btn btn-danger" name="" value="Reset">
          </div>
        </div>
</form>

</div>

</div>
</div>
</div>
<footer>
      <?php
      include 'footer.php';
      ?>
    </footer>