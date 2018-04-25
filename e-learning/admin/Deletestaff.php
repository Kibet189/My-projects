<?php
session_start();
include 'header.php';
include_once("../include/config.php");
// $CourseId= $_GET['faculty'];
if (isset($_POST['Deletestaff'])) {
  # code...
  $Id= $_POST['Id'];
  

$sql= "DELETE FROM staff WHERE Id='$deluser'";
$result=mysqli_query($con,$sql);

}

?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-plus-sign"> Delete Staff</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <form class="form-horizontal" action="Deletestaff.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">First Name</label>
        <div class="col-md-8">
          <input type="text" name="firstname" placeholder="firstname*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Lastname</label>
        <div class="col-md-8">
          <input type="text" name="Lastname" placeholder="Lastname*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Contact</label>
        <div class="col-md-8">
          <input type="tel" name="contact" placeholder="contact*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="text" name="Email" placeholder="Email*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Role</label>
        <div class="col-md-8">
          <input type="text" name="Role" placeholder="Role*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Date</label>
        <div class="col-md-8">
          <input type="Date" name="Date" placeholder="Date of Joining*" class="form-control"  required>
        </div>
      </div>
      <!-- <div class="form-group">
        <label class="control-label col-md-3">Course Id</label>
        <div class="col-md-8">
          <input type="number" name="CourseId" placeholder="course Id*" id="CourseId" class="form-control" required>
        </div>
      </div> -->
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="Deletestaff" value="Delete staff">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
  </span>
  <footer>
      <?php
      include 'footer.php';
      ?>
    </footer>


 






