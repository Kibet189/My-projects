<?php
include_once('../include/config.php');
require 'header.php';

$query="SELECT * FROM network";
 $result=mysqli_query($con,$query);
       
     
      ?><br>
      
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-wrench"> Network form</span></center> 
					
				</h4>
			
		</div>
		<div class="panel-body">
		<div class="pull-right">
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-home"><a href="index.php"> Back to panel</a></span></button></div>
			
			<div class="pull-left">
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"><a href="trackitems.php"> Shopping details</span></a></button></div>
			<br>
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
			<th>Network Id</th>
				<th>Organization</th>
				
				<th>Date</th>
				<th>Network Type</th>
				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			<td><?php echo $row['Id']; ?></td>
			
				<td><?php echo $row['Organization']; ?></td>
				<td><?php echo $row['Year']; ?></td>
				<td><?php echo $row['Network']; ?></td>
				
				

				
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