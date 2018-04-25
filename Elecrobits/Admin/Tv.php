<?php
require 'header.php';
require 'validationprocess.php';
?>
<div class="col-md-11 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
         <center> <span class="glyphicon glyphicon-hdd"> Television Details</span></center>
          
        </h3>
      </div>

      
      <div class="panel-body">
      <form class="form-horizontal" action="Tv.php" method="POST">
       
      <div class="form-group">
        <label class="control-label col-md-3">Type</label>
        <div class="col-md-8">
          <input type="text" name="Type" placeholder="Television type*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Screen size</label>
        <div class="col-md-8">
          <input type="text" name="Screen" placeholder="Screen Size*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">Price</label>
        <div class="col-md-8">
          <input type="text" name="Price" placeholder="Television price*" class="form-control" required>
        </div>
      </div>
      
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
         
            <input type="submit" class="btn btn-primary" name="Television" value="Sent">
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
                
