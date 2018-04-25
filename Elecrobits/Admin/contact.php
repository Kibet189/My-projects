<?php
include_once('../include/config.php');
require 'header.php';

$query="SELECT * FROM contact";
 $result=mysqli_query($con,$query);
       
     
      ?>
   <br><section class="alizarin"><div class="container" >
            <div class="row centered">
            <h4><span style="color: gold"> Clients messages</span></h4>
            <hr>
            <div class="col-md-6">
                <small><p>The requests, suggestions and views from our customers.</p></small>

            </div>
                <div class="col-md-6 centered" style="border-left: solid;">
                     <ul class="breadcrumb pull-right">
                        <li><a href="licensetable.php" class="btn btn-primary">License form</a></li>
                        <li><a href="networktable.php" class="btn btn-warning">Network table</a></li>
                        <li><a href="trackitems.php" class="btn btn-danger">Track shopping details</a></button></li>
                       
                    </ul>
                </div>
            </div>
        </div></section>
        <hr>
    
      

<div class="col-md-11 col-md-offset-1">
	<div class="panel panel-danger">

		<div class="panel-heading">
			<h4 class="panel-title"><center>
			
          
			<span class="glyphicon  glyphicon-envelope"> Messages</span></center> 
					
				</h4>
			
		</div>
		<div class="panel-body">
		<div class="pull-right">
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-home"><a href="index.php"> Back to panel</a></span></button></div>
			
			<div class="pull-left">
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-envelope"><a href="comment.php"> Check comments</span></a></button></div>
			<br>
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
			<th>Message Id</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Date</th>
				<th>Message</th>
				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			<td><?php echo $row['Id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['contact']; ?></td>
				<td><?php echo $row['date']; ?></td>
				
				
				<td><?php echo $row['message']; ?></td>

				
			</tr>
			<?php }?>
		</tbody>
			
		</table>
		</div>
	</div>
</div><footer>
	<?php require 'footer.php';?>
</footer>