<?php
session_start();
include'header.php';
include_once("../include/config.php");
if (isset($_POST['add'])) {
    $faculty=$_POST['faculty'];
    $course=$_POST['course'];
    //$CourseId=$_POST['CourseId'];
    $sql=mysqli_query($con,"INSERT INTO courses(faculty,course) VALUES ('$faculty','$course')");
    $results = mysqli_query($con,$sql);

    if ($sql) {
      $_SESSION['msg']="You have successfully added a new course";
        header("Location: addcourse.php");
        exit();
    }else{
        echo "connection error";
    }
    # code...
}
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

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-tittle" >
        <div class="pull-right">
          <a href="index.php" type="button" class="btn btn-warning">Back to panel</a>
        </div>
        <center>
          <span class="glyphicon glyphicon-plus-sign"> Add course</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <form class="form-horizontal" action="addcourse.php" method="POST">
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
      <!-- <div class="form-group">
        <label class="control-label col-md-3">Course Id</label>
        <div class="col-md-8">
          <input type="number" name="CourseId" placeholder="course Id*" id="CourseId" class="form-control" required>
        </div>
      </div> -->
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="add" value="Add Course">
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
 






