<?php
include 'header.php';
include '../include/config.php';
$id= $_GET['key'];

$query="SELECT* FROM courses WHERE id='$id'";
$result= mysqli_query($con,$query);

if (isset($_POST['edit'])) {
	 $faculty=$_POST['faculty'];
    $course=$_POST['course'];
    $query= "UPDATE courses SET faculty='$faculty',course='$course' WHERE id='$id'";
    $result=mysqli_query($con,$query);
    if ($result) {
    	echo "Course Edited";

    	# code...
    }

	# code...
}
?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-plus-pencil">Edit Course</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <?php 
while ($row = $result->fetch_assoc()) {
  # code...
       ?>
      <form class="form-horizontal" action="EditCourse.php?key=<?php echo $row['id']; ?>" method="POST">
      <div class="form-group">
        
        <div class="col-md-8">
        </div>
      </div>
      <div class="form-group">

        <label class="control-label col-md-3">Faculty</label>
        <div class="col-md-8">
          <input type="text" name="faculty"  class="form-control" value=" <?php echo $row['faculty']; ?> "  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Course</label>
        <div class="col-md-8">
          <input type="text" name="course" class="form-control" value="<?php echo $row['course'];  } ?>  "  required>
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
            <input type="submit" class="btn btn-primary" name="edit" value="Edit">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
  </span>
 


