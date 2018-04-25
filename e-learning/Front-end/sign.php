<?php
session_start();
include'header.php';


?>

<center>
<div id="mymodal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><div class="pull-right">
<span style="width: 100px; height: 50px;"><button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&times;</button>
</div></span>
<div class="modal-title">
<h3 ><span style="color: gold">Terms | Conditions</span></h3>
</div></div>
   <div class="modal-body">
       <p>Nime Technical College is an affirmitive institution which has its roots in discpline and self-driven.We focus in building a firm foundation to all of our students in all faculties.</p>
       <p>Once you sign in you therefore acquire all privileges as a member of our institution.You therefore have to adhere to all terms and conditions of Nime institute unless adviced otherwise. </p>
       <p>All members are expected to follow and adore to school rules and principle for a smooth running of our school curriculumn.</p>

   </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
       </div> 
    </div>
</div>

</center>
<style type="text/css">
		form
		{
			margin-left: 200px;
		}
		input, button
		{
			width: 200px;
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
	<div class="asbestos">
		<div class="container">
			<div class="row centered">
			<h4><span style="color: gold"> Create Account</span></h4>
			<hr>
			<div class="col-md-4">
				<small><p>Inorder to have full privileges,we request you to create an account if you dont have one.You can use the buttons to either create account or be back to our home page</p></small>

			</div>
				<div class="col-sm-8 centered"  style="border-left: double;" id="ba">
          <ul class="breadcrumb">
        
          <li><a href="Academic.php"><button type="button" class="btn-btn-warning">Academic</button></a> </li>
          <li><a href="games.php"><button type="button" class="btn-btn-success">Games</button></a> </li>
          <li><a href="home.php"><button type="button" class="btn-btn-warning">Home Page</button></a> </li></ul>
				</div>
			</div>
		</div>
	</div><hr>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" id="sign"> Signup Here</span></center>

          
        </h3>
      </div>
   
      <div class="panel-body">
<form role="form" action="../include/signup.php" method="POST" novalidate>
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
 
 <input type="tel" class="form-control" name="uid" placeholder="Your Username *" id="phone" required data-validation-required-message="Username required.">
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
	<input type="password" id="password1" name="password1" class="form-control" placeholder="Create password" required><p class="help-block text-danger"></p>
</div>
</div>
<div class="form-group">
<label></label>
<div class="input-group input-group-lg">
<span class="glyphicon glyphicon-eye-open input-group-addon"></span>
	<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required><p class="help-block text-danger"></p>
	</div>
</div>


<button type="button" class="btn-btn-default" style="background-color: green; border-radius: 5px;"><a href="#mymodal" data-toggle="modal" data-target="#mymodal">More information</a></button>
<button type="submit" name="signup" class="btn-btn-success" style="background-color: green;"><span style="color: gold">Sign Up</span> </button>
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
