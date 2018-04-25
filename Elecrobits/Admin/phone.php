<?php
require 'header.php';
require 'validationprocess.php';
?>
<div class="col-md-11 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
         <center> <span class="glyphicon glyphicon-phone"> Phone Details</span></center>
          
        </h3>
      </div>

      
      <div class="panel-body">
      <form class="form-horizontal" action="phone.php" method="POST">
       
      <div class="form-group">
        <label class="control-label col-md-3">Type</label>
        <div class="col-md-8">
          <input type="text" name="phone" placeholder="Phone type*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Size</label>
        <div class="col-md-8">
          <input type="text" name="size" placeholder="Size*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">Price</label>
        <div class="col-md-8">
          <input type="text" name="price" placeholder="Phone price*" class="form-control" required>
        </div>
      </div>
      
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
         
            <input type="submit" class="btn btn-primary" name="mobile" value="Sent">
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
                

