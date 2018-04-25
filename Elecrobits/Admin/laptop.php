<?php
require 'header.php';
require 'validationprocess.php';
?>
<div class="col-md-11 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
         <center> <span class="glyphicon glyphicon-cog"> Laptop Details</span></center>
          
        </h3>
      </div>

      
      <div class="panel-body">
      <form class="form-horizontal" action="laptop.php" method="POST">
       
      <div class="form-group">
        <label class="control-label col-md-3">Type</label>
        <div class="col-md-8">
          <input type="text" name="type" placeholder="Laptop type*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Screen size</label>
        <div class="col-md-8">
          <input type="text" name="screen" placeholder="Screen Size*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">Storage</label>
        <div class="col-md-8">
          <input type="text" name="storage" placeholder="Laptop storage*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Hard disk</label>
        <div class="col-md-8">
          <input type="text" name="disk" placeholder="Hard disk size*" class="form-control" required>
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-md-3">Core</label>
        <div class="col-md-8">
          <input type="text" name="core" placeholder="Core type" class="form-control" >
        </div>
      </div>
      <div class="form-group">
<label class="control-label col-md-3">Screen type</label>
<div class=col-md-8>
<select name="inch" class="form-control" required>

<option>Normal </option>
<option>slim</option>
<option>Super slim</option>

</select>
</div>
</div>
      
        
        <div class="form-group">
        <label class="control-label col-md-3">Price</label>
        <div class="col-md-8">
          <input type="text" name="price" placeholder="Price*" class="form-control" required>
        </div>
      </div>
        
        
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
         
            <input type="submit" class="btn btn-primary" name="Laptops" value="Sent">
             <input type="reset" class="btn btn-danger" name="" value="Refresh">
          </div>
        </div>
        
      </form>
      </div>
                </div></div></section>
                
                </section>
                <footer>
                  <?php
                  require 'footer.php';
                  ?>
                </footer>
                
