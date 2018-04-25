<?php
include_once('../include/config.php');
require 'header.php';

$query="SELECT * FROM items_purchased";
 $result=mysqli_query($con,$query);
       
     
      ?>
      <br><br>
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-shopping-cart"> Client shopping Items</span></center> 
					
				</h4>
			
		</div>
		<div class="panel-body">
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
			
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Payment Method</th>
				<th>Date</th>
				<th>Guarantor</th>
				<th>Product</th>
				<th>Amount</th>
				

				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact']; ?></td>
				<td><?php echo $row['payment']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['guarantor']; ?></td>
				
				<td><?php echo $row['product']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				
				
				

				
			</tr>
			<?php }?>
		</tbody>
			
		</table>
		</div>
	</div>
</div>
<footer>
<?php
require 'footer.php';
?></footer>