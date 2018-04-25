<?php
session_start();
include'header.php';
include_once("../include/config.php");
if (isset($_POST['addstaff'])) {
    $firstname=$_POST['firstname'];
    $Lastname=$_POST['Lastname'];
     $contact=$_POST['contact'];
      $Email=$_POST['Email'];
       $Role=$_POST['Role'];
       $Date=$_POST['Date'];
    
    $sql=mysqli_query($con,"INSERT INTO staff(firstname,Lastname,contact,Email,Role,Date) VALUES ('$firstname','$Lastname','$contact','$Email','$Role','$Date')");
    $results = mysqli_query($con,$sql);

    if ($sql) {
        header("Location: addstaff.php");
        exit();
    }else{
        echo "connection error";
    }
    # code...
}
?>


<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-plus-sign"> Add Staff</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <form class="form-horizontal" action="addstaff.php" method="POST">
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
            <input type="submit" class="btn btn-primary" name="addstaff" value="Add Staff">
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


 






