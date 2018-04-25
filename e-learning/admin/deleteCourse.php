<?php
session_start();
include 'header.php';
include_once("../include/config.php");
// $CourseId= $_GET['faculty'];
if (isset($_POST['delete'])) {
  # code...
  $fac= $_POST['faculty'];

$sql= "DELETE FROM courses WHERE faculty='$fac'";
$result=mysqli_query($con,$sql);

}

?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-recycle">Delete course</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <form class="form-horizontal" action="deleteCourse.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Faculty</label>
        <div class="col-md-8">
          <input type="text" name="faculty" placeholder="faculty*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Course</label>
        <div class="col-md-8">
          <input type="text" name="course" placeholder="course*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Course Id</label>
        <div class="col-md-8">
          <input type="number" name="CourseId" placeholder="course Id*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="delete" value="Delete">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
  </span>
 