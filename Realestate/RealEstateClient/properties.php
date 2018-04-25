<?php require 'header.php';
include_once '../include/config.php';
$query = "SELECT * FROM post";
$result = mysqli_query($con,$query);
?><br><br>
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-11">
    <div class= "panel panel-default">
      <div class="panel-heading">
        <div class="panel-tittle">
          <h4><strong style="float: center;">PROPERTIES | 24 HOURS SERVICE | 7 DAYS A WEEK | 365 DAYS A YEAR | LIVE A TECHNICAL LIFE</strong></h4>
          <div class="panel-body"></div>
        </div>
      </div></div>
    </div>
  </div>
</div>
<div class="row">
	<div class="container">
	
		<div class="col-md-6">
		<div class="panel panel-default">
		
		<?php
    while( $row = $result->fetch_assoc()){ ?>

	
<div class="panel-heading">
<div class="panel-tittle">
   <h3><strong style="color: khaki"><i><u>Barek Mansion</u></i></strong></h3></div></div>
   <div class="panel-body"> <center>
			<img class="img-circle img-responsive" width="200" height="200" src="../img/estate.jpeg"</td>
			
			<p> House 10,Road 2 ,Koinange</p>
			<td><span class="glyphicon glyphicon-usd"> Monthly Charge:<td><?php echo $row['charge']; ?></td></p></span><br>
			<a href="barek.php" class="btn btn-danger">Detail</a></button></center>
		</div>

		</center>
		</div>
	</div>

		
	
		<div class="col-md-6" style="border-left: ridge">
		<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-tittle">
		<strong style="color: khaki"><i><u>Devilla Mansion</u></i></strong></h3></div>
		<div class="panel-body">
		<center>
			<img class="img-circle img-responsive" width="200" height="200" src="http://localhost/sites/Realestate/img/<?php echo $row['avatar']; ?>"</td>
			
			<p> House 10,Road 4 ,Karen View</p>
			<span class="glyphicon glyphicon-usd"> Monthly Charge:<td><?php echo $row['charge']; ?></p></span><br>
			<a href="Detail.php" class="btn btn-danger">Details</a></button></center>
		</div>
		</div></div>
		
		<?php }?>
		
	</div>
</div>

<footer>
	<?php require 'footer.php'; ?>
</footer>