<?php
require 'header.php';
require 'validationprocess.php';
$id= $_GET['key'];

$query="SELECT* FROM items WHERE id='$id'";
$result= mysqli_query($con,$query);
?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-plus-pencil">Edit item</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <?php 
while ($row = $result->fetch_assoc()) {
  # code...
       ?>
      <form class="form-horizontal" action="Edititem.php?key=<?php echo $row['id']; ?>" method="POST">
      <div class="form-group">
        
        <div class="col-md-8">
        </div>
      </div>
      <div class="form-group">

        <label class="control-label col-md-3">Item</label>
        <div class="col-md-8">
          <input type="text" name="Item"  class="form-control" value=" <?php echo $row['Item']; ?> "  required>
        </div>
      </div>
       <div class="form-group">

        <label class="control-label col-md-3">Date Edited</label>
        <div class="col-md-8">
          <input type="Date" name="Date"  class="form-control" value=" <?php echo $row['Date']; ?> "  required>
        </div>
      </div>      
      <div class="form-group">
        <label class="control-label col-md-3">Item price</label>
        <div class="col-md-8">
          <input type="text" name="Price" class="form-control" value="<?php echo $row['Price'];  } ?>  "  required>
        </div>
      </div>
      
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="edititem" value="Edit">
            <input type="reset" class="btn btn-danger" name="" value="Refresh">
          </div>
        </div>
        
      </form>
        </div>
      </div>
    </div>
  </span>
