
<?php
session_start();
include_once('../include/config.php');
include'header.php';
$query="SELECT * FROM comment";
 $result=mysqli_query($con,$query);
       //$result=mysqli_fetch_array($result,$query);
     
      ?><br><br><section class="asbestos">
       <div class="container" class="asbestos">
            <div class="row centered" id="contact">
            <h4><span style="color: gold"> Users Feedbacks</span></h4>
            <hr>
            <div class="col-md-6">
                <small><p>Here are some of the suggestions,comments and requests from our clients.</p></small>

            </div>
                <div class="col-md-6 centered" style="border-left: ridge;">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../admin/index.php" class="btn btn-primary">Back to Panel</a></li>
                        <li><a href="home.php" class="btn btn-warning">Home Page</a></li>
                        <li><a href="../admin/staffs.php" class="btn btn-danger">Our staff Members</a></button></li>
                       
                    </ul>
                </div>
            </div>
        </div></section>
        <hr>
    
      
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-comment"> Comments</span></center>
					
				</h4>
			
		</div>
		<div class="panel-body">
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
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
<?php

include_once('../include/config.php');

$query="SELECT * FROM contact";
 $result=mysqli_query($con,$query);
       //$result=mysqli_fetch_array($result,$query);
     
      ?>
      <br><br><br><br>
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-envelope"> Messages</span></center> 
					
				</h4>
			
		</div>
		<div class="panel-body">
		<table class="table table-bordered">
		<thead>
			<tr><span style="color: gold">
			
				<th>Name</th>
				<th>Email</th>
				<!-- <th>Date</th> -->
				<th>Message</th>
				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="info">
			
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				
				<td><?php echo $row['Message']; ?></td>

				
			</tr>
			<?php }?>
		</tbody>
			
		</table>
		</div>
	</div>
</div>
<?php
include_once('../include/config.php');

$query="SELECT * FROM sports";
 $result=mysqli_query($con,$query);
       //$result=mysqli_fetch_array($result,$query);
     
      ?>
      <br><br><br><br>
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><center>
			<span class="glyphicon  glyphicon-globe"> Sports members</span></center> 
					
				</h4>
			
		</div>
		<div class="panel-body">
		<table class="table table-striped table-hover">
		<thead>
			<tr><span style="color: gold">
			
				<th>Name</th>
				<th>Game Type</th>
				<!-- <th>Date</th> -->
				<th>Email</th>
				<th>Message</th>
				</span>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $result->fetch_assoc()){?>
			<tr class="primary">
			
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['game']; ?></td>
				<td><?php echo $row['email']; ?></td>
				
				<td><?php echo $row['message']; ?></td>

				
			</tr>
			<?php }?>
		</tbody>
			
		</table>
		</div>
	</div>
</div>


<footer>
      <?php
      include 'footer.php';
      ?>
    </footer>



