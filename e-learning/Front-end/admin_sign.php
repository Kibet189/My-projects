<?php
session_start();
include'header.php';

?>



	<div class="jumbotron">
		<div class="container">
			<div class="row centered">
			<h4><span style="color: gold"> Create Account As Admin</span></h4>
			<hr>
			
			</div>
		</div>
	</div>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-info	">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" id="sign"> Signup Here</span></center>

          
        </h3>
      </div>
   
      <div class="panel-body">
<form role="form" action="../admin/signupprocess.php" method="POST" >

<div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
 <input type="text" name="Username" class="form-control" placeholder="Username" required><p class="help-block text-danger"></p>
</div></div>
<div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">

	<input type="text" name="lastname" class="form-control" placeholder="last name" required><p class="help-block text-danger"></p>
</div></div>



<div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">

	<input type="email" name="email" class="form-control" placeholder="Example@gmail.com" required><p class="help-block text-danger"></p>
</div>

</div>
<!-- <div class="form-group">
<label>User type</label>
<div class="input-group input-group-lg">

<select name="user" class="form-control" required>
<option>User type </option>
<option>Admin</option>
<option>Normal User</option>

</select>
</div>
</div> -->
<div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">

	<input type="password" name="password" class="form-control" placeholder=" Created Password" required><p class="help-block text-danger"></p>
</div>
</div>
<div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="confirm Password" required><p class="help-block text-danger"></p>
</div>
</div><br>
<div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
<p>Have account as admin? then  <a href="admin_login.php">  Login</a></p><br></div></div>
<div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
          
            <input type="submit" class="btn btn-primary" name="sign" value="Sign up">        <input type="reset" class="btn btn-danger" name="" value="Refresh">
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


