<?php
session_start();
include'header.php';
?>



<style type="text/css">
        form
        {
            margin-left: 200px;

        }
        input, button
        {
            width: 200px;
            height: 50px;
            margin-top: 20px;
        }
        

    </style>
    
 <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user active" > Login</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="" action="../include/logup.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="username" placeholder="Your Name*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="password" name="Password" placeholder="Your password*" class="form-control" required>
        </div> </div>
        <label></label>
      <label class="control-label col-md-3">&nbsp;</label>
        <div class="form-group">
        <div class="col-md-8">
         <label>
      <input type="checkbox" style="height: 10px; width: 10px;"> Remember me
    </label>
    </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="login" value="Login">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>

  
