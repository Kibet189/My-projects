<?php
include 'header.php';
include '../include/config.php';
$Id= $_GET['key'];

$query="SELECT* FROM staff WHERE Id='$Id'";
$result= mysqli_query($con,$query);

if (isset($_POST['editstaff'])) {
	 $firstname=$_POST['firstname'];
	  $Lastname=$_POST['Lastname'];
	   $contact=$_POST['contact'];
	    $Email=$_POST['Email'];
	     $Role=$_POST['Role'];
	      $Date=$_POST['Date'];
    
    $query= "UPDATE staff SET firstname='$firstname',Lastname='$Lastname',contact='$contact',Email='$Email', Role='$Role', Date='$Date' WHERE Id='$Id'";
    $result=mysqli_query($con,$query);
    
}
?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-plus-pencil"> Update Staff</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <?php 
while ($row = $result->fetch_assoc()) {
  # code...
       ?>
      <form class="form-horizontal" action="Updatestaff.php?key=<?php echo $row['Id']; ?> method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">First Name</label>
        <div class="col-md-8">
          <input type="text" name="firstname" placeholder="firstname*" class="form-control" value= "<?php echo $row['firstname']; ?>"   required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Lastname</label>
        <div class="col-md-8">
          <input type="text" name="Lastname" placeholder="Lastname*" class="form-control" value= "<?php echo $row['Lastname']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Contact</label>
        <div class="col-md-8">
          <input type="tel" name="contact" placeholder="contact*" class="form-control"  value=" <?php echo $row['contact']; ?> " required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="text" name="Email" placeholder="Email*" class="form-control" value=" <?php echo $row['Email']; ?> "  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Role</label>
        <div class="col-md-8">
          <input type="text" name="Role" placeholder="Role*" class="form-control" value=" <?php echo $row['Role'];  ?> " required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Date</label>
        <div class="col-md-8">
          <input type="Date" name="Date" placeholder="Date of Joining*" class="form-control" value=" <?php echo $row['Date'];} ?> " required>
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
            <input type="submit" class="btn btn-primary" name="editstaff" value="Edit staff ">
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


 






