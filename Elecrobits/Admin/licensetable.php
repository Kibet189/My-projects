<?php
include_once('../include/config.php');
require 'header.php';

$query="SELECT * FROM license";
 $result=mysqli_query($con,$query);
       
     
      ?>
      <br><br>
<div class="col-md-10 col-md-offset-1" class="wet-asphalt">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-envelope"> License form</span></center> 
					
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
			<th>License Indentification</th>
				<th>Organization</th>
				
				<th>Date</th>
				<th>Purpose of license</th>
				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			<td><?php echo $row['Id']; ?></td>
			
				<td><?php echo $row['organization']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['license']; ?></td>
				
				

				
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