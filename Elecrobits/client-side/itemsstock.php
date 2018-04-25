<?php
include_once('../include/config.php');
require 'header.php';

$query="SELECT * FROM items";
 $result=mysqli_query($con,$query);
       
     
      ?>
      <br><br>
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-shopping-cart"> Items recently added to stock</span></center> 
					
				</h4>
			
		</div>
		<div class="panel-body">
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
			
				<th>Item Id</th>
				<th>Product</th>
				<th>Date</th>
				<th>Price</th>
				<th>Item Image</th>
				
				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['Item']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><?php echo $row['Price']; ?></td>
				<td><img class="img-circle img-responsive" width="100" height="100" src="http://localhost/sites/Elecrobits/img/<?php echo $row['avatar']; ?>"</td>
				

				
			</tr>
			<?php }?>
		</tbody>
			
		</table>
		</div>
	</div>
</div><?php
      include 'footer.php';
      ?>
    </footer>


