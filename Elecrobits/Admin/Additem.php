<?php
require 'header.php';
require 'validationprocess.php';
$_SESSION['message']='';
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
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle" >
        <div class="pull-right">
          <a href="index.php" type="button" class="btn btn-warning">Back to panel</a>
        </div>
        <center>
          <span class="glyphicon glyphicon-plus-sign"> Add Item</span></center>

          
        </h3>
      </div>
     
      <div class="panel-body">
      <form class="form-horizontal" action="Additem.php" method="POST" enctype="multipart/form-data">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <div class="form-group">
        <label class="control-label col-md-3">Item</label>
        <div class="col-md-8">
          <input type="text" name="Item" placeholder="Product name*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Date</label>
        <div class="col-md-8">
          <input type="Date" name="Date" placeholder="faculty*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Price</label>
        <div class="col-md-8">
          <input type="text" name="Price" placeholder="Price*" class="form-control"  required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Featured Image </label>
        <div class="col-md-8">
          <input type="file" name="avatar" accept="images/*" required >
        </div>
      </div>
      
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
          
            <input type="submit" class="btn btn-primary" name="additem" value="Add">
            <input type="reset" class="btn btn-danger" name="" value="Cancel">
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
 

