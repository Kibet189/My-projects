<?php require 'header.php'; ?>
<div class="row">
  <div class="container">
  <div class="col-md-11" >
       <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" > Book Ticket to Imax<sup>&copy</sup></span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      <form class="form-horizontal" action="index.php" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="Email" placeholder="Email*" class="form-control"  value="" required>
        </div> </div>
      <div class="form-group">
        <label class="control-label col-md-3">Seats</label>
        <div class="col-md-8">
          <input type="number" name="Seats" placeholder="Number of Seats*" class="form-control" required>
        </div>
      </div>
       <div class="form-group">
<label class="control-label col-md-3">Movie type</label>
<div class=col-md-8>
<select name="movie" class="form-control" required>

<option>Horror </option>
<option>Action</option>
<option>Fiction</option>

</select>
</div>
</div>
 <div class="form-group">
<label class="control-label col-md-3">Payment Method</label>
<div class=col-md-8>
<select name="payment" class="form-control" required>

<option>Mpesa </option>
<option>Cash</option>
<option>Pay on delivery</option>

</select>
</div>
</div>
        
       <div class="form-group">
        <label class="control-label col-md-4">Do you need glasses</label>
        <div class=col-md-5>
<input type="radio" name="glasses" value="YES" required>YES
<input type="radio" name="glasses" value="No" required>NO</div></div></br>
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
            <input type="submit" class="btn btn-success" name="book" value="Book">
            <input type="reset" class="btn btn-warning" name="" value="Reset">
          </div>
        </div>
        
      </form>
        </div>
      </div></div></div></div>
      