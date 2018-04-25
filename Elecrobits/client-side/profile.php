<?php
require 'header.php';
require 'validation.php';
?>
<div class="col-md-11 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
         <center> <span class="glyphicon glyphicon-shopping-cart"> Purchase item</span></center>
          
        </h3>
      </div>

      
      <div class="panel-body">
      <form class="" action="profile.php" method="POST">
       
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="name" placeholder="Your Name*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="Email" name="email" placeholder="Your Email*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="contact" placeholder="Your contact*" class="form-control" required>
        </div>
      </div>
      <!-- <div class="form-group">
        <label class="control-label col-md-3">Payment Method</label>
        <div class="col-md-8">
          <input type="text" name="payment" placeholder="Payment method*" class="form-control" required>
        </div>
      </div> -->
      <div class="form-group">
<label class="control-label col-md-3"></label>
<div class=col-md-8>
<select name="payment" class="form-control" required>
<option>Payment Method</option>
<option>Mpesa </option>
<option>Cash</option>
<option>Pay on delivery</option>

</select>
</div>
</div>
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="date" name="date" placeholder="Date purchased" class="form-control" >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="guarantor" placeholder="Guarantor*" class="form-control" required>
        </div>
      </div>
      <!-- <div class="form-group">
        <label class="control-label col-md-3">Transaction Id</label>
        <div class="col-md-8">
          <input type="int" name="transactionId" placeholder="Transaction Id*" class="form-control" required>
        </div>
      </div> -->
        
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="text" name="product" placeholder="Product*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3"></label>
        <div class="col-md-8">
          <input type="int" name="amount" placeholder="Amount*" class="form-control" required>
        </div>
      </div>
        
        
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
          <input type="reset" class="btn btn-danger" name="" value="Cancel">
            <input type="submit" class="btn btn-primary" name="purchase" value="Purchase">
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
                
