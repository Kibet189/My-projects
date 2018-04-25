<?php

require 'header.php';
require '../include/config.php';
require 'validationprocess.php';
?>

<div class="row">
	<div class="container">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
				
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" > Your profile details</span></center>

          
        </h3>
      </div>
       
      <div class="panel-body">
     <?php if (isset($_SESSION['name'])): ?>
       
    
      <form class="form-horizontal" action="validationprocess.php" method="POST">

      <div class="form-group">
        <label class="control-label col-md-3">Name</label>
        <div class="col-md-8">
          <input type="text" name="Name" placeholder="Agent Name*" class="form-control" value="<?php echo $_SESSION['name']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Address</label>
        <div class="col-md-8">
          <input type="text" name="Address" placeholder="Address*" class="form-control" value="<?php echo $_SESSION['add'];?>" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="Email" placeholder="Email*" class="form-control"  value="<?php echo $_SESSION['email']; ?>" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Phone</label>
        <div class="col-md-8">
          <input type="text" name="Phone" placeholder="Your phone number*" class="form-control" value="<?php echo $_SESSION['mobile']; ?>" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3">Password</label>
        <div class="col-md-8">
          <input type="Password" name="Password" placeholder="Password*" class="form-control" value="<?php echo $_SESSION['password']; ?>" required>
        </div> </div>
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
            <input type="submit" class="btn btn-success" a href="EditItem.php?key=<?php echo $row['id']; ?>" name="profile" value="Update details">
            <input type="reset" class="btn btn-warning" name="" value="Cancel">
          </div>
        </div>
        
      </form>
       <?php endif ?>

        </div>
      </div>
		</div>

		
	</div>
</div>
<footer>
	<?php require 'footer.php';
	?>
</footer>