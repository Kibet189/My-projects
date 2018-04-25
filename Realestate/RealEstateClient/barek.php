<?php
require 'header.php';
require 'validationprocess.php';
$query="SELECT * FROM barek";
$result=mysqli_query($con,$query);
?><br><br>
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-11">
    <div class= "panel panel-success">
      <div class="panel-heading">
        <div class="panel-tittle">
          <h4><strong style="float: center; color: rgb(000); ;">BAREK MANSIONS AND PROPERTIES</strong></h4>
          <div class="panel-body"></div>
        </div>
      </div></div>
    </div>
    <h2 style="float: right;"><img class="img-circle img-responsive" width="130" height="130" src="../img/hand.jpeg"></h2>
  </div>
</div>
<div class="row">
	<div class="container">
		<div class="col-md-4">
        <?php
    while( $row = $result->fetch_assoc()){ ?>
     <center><strong style="color: gold"><i><u><h4>Barek Estates</h4></u></i></strong></center>
			<td><img class="img-circle img-responsive" width="500" height="500" src="http://localhost/sites/Realestate/img/<?php echo $row['avatar']; ?>"</td>
		</div>
		<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <center><strong style="color: gold"><i><u><h4>Barek Estate Details</h4></u></i></strong></center>
                    <div class="panel panel-primary">
                    
                        <div class="panel-body">
                        <hr>
                        <strong><p>House -10, Road 3, Karen View</p></strong>
                            <p>Monthly Charge:<td><?php echo $row['charge']; ?></td></p>
                            <p>Space: <td><?php echo $row['charge']; ?></td></p>
                            <p>Floor: <td><?php echo $row['space']; ?></td></p>
                            <p>Beds: <td><?php echo $row['floor']; ?></td></p>
                            <p>Bathrooms: <td><?php echo $row['bath']; ?></td></p>
                            <p>Bed: <td><?php echo $row['bed']; ?></td></p>
                            <p>Balcony: <td><?php echo $row['balcony']; ?></td></p>
                            
                        </div>
                    </div>
                </div>
<div class="col-md-4">
<h2><i><U>Property Details</U></i></h2>
 <strong><td><?php echo $row['description']; ?></td></strong>

			
		</div>
	</div>
</div>
<?php }?>
<footer>
	<?php require 'footer.php'; ?>
</footer>