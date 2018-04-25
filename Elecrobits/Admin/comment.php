<?php
// session_start();
include_once('../include/config.php');
include'header.php';
$query="SELECT * FROM comment";
 $result=mysqli_query($con,$query);
       //$result=mysqli_fetch_array($result,$query);
     
      ?><br><br><section class="concrete">
       <div class="container" >
            <div class="row centered">
            <h4><span style="color: gold"> Users Feedbacks</span></h4>
            <hr>
            <div class="col-md-6">
                <small><p>Here are some of the suggestions,comments and requests from our clients.</p></small>

            </div>
                <div class="col-md-6 centered" style="border-left: solid;">
                     <ul class="breadcrumb pull-right">
                        <li><a href="index.php" class="btn btn-primary">Back to Panel</a></li>
                        <li><a href="networktable.php" class="btn btn-warning">Network table</a></li>
                        <li><a href="trackitems.php" class="btn btn-danger">Track shopping details</a></button></li>
                       
                    </ul>
                </div>
            </div>
        </div></section>
        <hr>
    
      
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-comment"> Comments</span></center>
					
				</h4>
			
		</div>
		<div class="panel-body">
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
			<th>Comment Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				
				<th>Comment</th>
				</span>

			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['contact']; ?></td>
				
				<td><?php echo $row['comment']; ?></td>

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