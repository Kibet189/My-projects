<?php require 'header.php';  
require 'validationprocess.php'; 
?><br><br>
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-11">
    <div class= "panel panel-default">
      <div class="panel-heading">
        <div class="panel-tittle">
          <h4><strong style="float: center;">ADD PROPERTIES | ESTATES</strong></h4>
          <div class="panel-body"></div>
        </div>
      </div></div>
    </div>
  </div>
</div>
<div class="row">
	<div class="container">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
				
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-plus-sign" > Add new property</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="" action="post.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="name" placeholder="Enter property Name*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="charge" placeholder="Enter Monthly charge*" class="form-control" value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="space" placeholder="Enter property space*" class="form-control"  value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="floor" placeholder="Number of floor*" class="form-control" value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="bath" placeholder=" Number of Baths*" class="form-control" value="" required>
        </div> </div>
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="bed" placeholder="Number of Beds*" class="form-control" value="" required>
        </div> </div><div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="balcony" placeholder="Number of Balcony*" class="form-control" value="" required>
        </div> </div>
       <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <textarea name="description" cols="3" rows="6" class="form-control" placeholder="Description of the property" required></textarea>
        </div>
      </div>
        <div class="form-group">
        <label class="control-label col-md-3">Property image </label>
        <div class="col-md-8">
          <input type="file" name="avatar" accept="images/*" required >
        </div>
      </div>
        <center>
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
                        <input type="submit" class="btn btn-success" name="add" value="Post Details">
                         <input type="reset" class="btn btn-warning" name="" value="Refresh">
          </div>
        </div>
        </center>
      </form>
        </div>
      </div>
		</div>
		
		
	</div>
</div>
<footer>
	<?php require 'footer.php';
	?>
</footer>