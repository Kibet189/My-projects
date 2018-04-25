<?php
session_start();
include 'header.php';?>

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
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user">Login as Admin</span></center>
           <?php 
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    session_unset($_SESSION['error']);
                }
                 ?>
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="../admin/loginprocess.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Username</label>
        <div class="col-md-8">
          <input type="text" name="username" placeholder="Your Name*" class="form-control" value="<?php if(isset($_POST['Admin'])) echo $_POST['username'];?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">password</label>
        <div class="col-md-8">
          <input type="password" name="Password" placeholder="Your password*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8"><span style="color: skyblue"></span>
            <input type="submit" class="btn btn-primary" name="Admin" value="Login"></span>
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
    <footer>
      <?php
      include 'footer.php';
      ?>
    </footer>



  
