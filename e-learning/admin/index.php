<?php
session_start();
include'header.php';
include_once '../include/config.php';
$query = "SELECT * FROM courses";
$result = mysqli_query($con,$query);

//$row = count($result);
if (isset($_POST['delete'])) {
   $delid= $_POST['delid'];
   $query = "DELETE FROM courses WHERE id='$delid'";
$result = mysqli_query($con,$query);


}

?>
<style type="text/css">
    #sidebar a {
        color: grey;
    }
</style>

<!-- <div class="row">
<div class="container-fluid">

    <div class="col-sm-3 col-sm-2 sidebar" id="sidebar">
    <h3 class="page-header">Users</h3>
    <ul class="nav nav-sidebar">
<h3>
            <button type="button" class="btn btn-success"><a href="Updatestaff.php">UPDATE STAFF</a></button><br><br>
            
            <li><button type="button" class="btn btn-success"><a href="Deletestaff.php">DELETE STAFF</a></button></li><br>
            
</h3>
        </ul>
        </div> -->
        <section class="midnight-blue">
        <div class="container">
            <div class="row"><center>
            <div class="center"><h2 style="color: gold"> Administrator Panel</h2></div></center>
            <div class="gap"></div><hr>
                <div class="col-sm-5" style="border-left:">
                    <h6>Administrator to access courses and edit  Details</h6>
                    <p>Review the available courses and their respective faculties after which you can edit them by clicking the edit button</p>
                </div>
                <div class="col-sm-5" style="border-left: solid;">
                    <ul class="breadcrumb pull-right">
                        <li><a href="../Front-end/comment.php" class="btn btn-primary">Feedbacks</a></li>
                        <li><a href="staffs.php" class="btn btn-warning">Nime Institute staff</a></li>
                        <li><button type="button" class="btn btn-success"><a href="Addstaff.php">Add staff</a></button></li><br>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section><hr>
        
<div class="col-md-11 col-md-offset-1">
    <div class="panel panel-danger">
      <div class="panel-heading" style="color: blue;">
        <h3 class="panel-tittle">
        <div class="pull-right">
        <button type="button" class="btn btn-default"><a href="../Front-end/courses.php">View Courses</a></button></div>
          <center><span>Courses</span></center>
          
        </h3>
      </div>
      
      <div class="panel-body">
    

    <hr>
    <table class="table table-bordered">
    <thread>
    <th>Course Id</th>
        <th>Faculties</th>
        <th>Courses</th>
        
        <th colspan="6">Action</th>
        
         </thread>
    <tbody>

    <?php
    while( $row = $result->fetch_assoc()){ ?>
        <tr class="info">
        <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['faculty']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <input type="text" name="delid" hidden value="<?php echo $row['id']; ?>">

        
            
            
            <td><button type="button" class="btn btn-md btn-btn-danger"><a href="EditCourse.php?key=<?php echo $row['id']; ?>"><span style="color: grey">Edit</span></a></button></td>
            <td><button type="submit" name="delete" class="btn btn-md btn-btn-danger"><span style="color: red">Delete</span></button></td>
            
            </form>
        </tr>
         <?php }?>
    </tbody>
        
    </table>
</div>
    
</div>

</div>

</div>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>