<?php
session_start();
include'header.php';
include_once '../include/config.php';
$query = "SELECT * FROM staff";
$result = mysqli_query($con,$query);

//$row = count($result);
if (isset($_POST['DeleteUser'])) {
   $deluser= $_POST['deluser'];
   $query = "DELETE FROM staff WHERE Id='$deluser'";
$result = mysqli_query($con,$query);


}


?><br><br>
<div class="col-lg-11 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <div class="pull-right">
        <button type="button" class="btn btn-success"><a href="index.php">Back to panel</a></button></div>
          <center><span>Staffs</span></center>
          
        </h3>
      </div>
      <!-- <?php 
       $deluser= $_POST['deluser'];
       $sql="SELECT * FROM staff";
       $query=mysqli_query($con,$sql);
       
      ?> -->
      <div class="panel-body">
    <table class="table table-striped">
    
    <thread >
    <th>Staff Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Role</th>
        <th>Starting Date</th>
        <th colspan="2">Action</th>
    </thread>
    <tbody>
     
    <?php while($row = $query->fetch_assoc()){?>
      <tr class="info" >
      <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <td><?php echo $row['Id'] ?></td>
      <td><?php echo $row['firstname'] ?></td>
      <td><?php echo $row['Lastname']; ?></td>
      <td><?php echo $row['contact']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Role']; ?></td>
      <td><?php echo $row['Date']; ?></td>
       <input type="text" name="deluser" hidden value="<?php echo $row['Id']; ?>">

        
            
            
            <td><button type="button" class="btn btn-md btn-btn-danger"><a href="Updatestaff.php?key=<?php echo $row['Id']; ?>"><span style="color: grey">EditUser</span></a></button></td>
            <td><button type="submit" name="DeleteUser" class="btn btn-md btn-btn-danger"><span style="color: red">DeleteUser</span></button></td>
</form>
      </tr>
      
      <?php } ?>
      </tbody>
    </table>
</div>
    
</div>

</div>
</div>
</div>
<footer>
      <?php
      include 'footer.php';
      ?>
    </footer>

