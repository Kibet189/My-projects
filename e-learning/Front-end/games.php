<?php
include 'header.php';
include '../include/config.php';
if (isset($_POST['join'])) {
	$Name=$_POST['Name'];
	$game=$_POST['game'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	// $Name=mysqli_real_escape_string($con,$_POST['Name']);
	// $game=mysqli_real_escape_string($con,$_POST['game']);
	// $email=mysqli_real_escape_string($con,$_POST['email']);
	// $message=mysqli_real_escape_string($con,$_POST['message']);
	 $query="INSERT INTO sports (Name,game,email,message) VALUES('$Name','$game','$email',	'$message')";
	 $result=mysqli_query($con,$query) or die("error");

	# code...
}
?>

  <style type="text/css">
  header{
    background-image: url(../img/foot.jpg);
    
    

  }
</style>
<header>
        <div class="container">
            <div class="intro-text">
                </h6><div class="intro-heading"><span style="color: ">We are all-round</span></div></h6>
                <p></p>
                
            </div>
        </div>
    </header>
<div class="asbestos">
		<div class="container">
			<div class="row centered">
			<h4><span style="color: gold">Join Sports today........!</span></h4>
			<hr>
			<div class="col-md-6">
				<small><p>We believe exercise should be part and parcel of our daily routine.To prove this,we have conquered and come home with medals in various fields in sports</p></small>
				<small>Be part of us today by clicking the join link sign up!</small>

			</div>
				<div class="col-md-6 centered" style="border-left: solid;">
					<ul class="breadcrumb">
					
					 <li><a href="home.php"><button type="button" class="btn-btn-warning">Home Page</button></a> </li>
					 <li><a href="#join"><button type="button" class="btn-btn-warning">Join Sports</button></a> </li>
					  <li><a href="Academic.php"><button type="button" class="btn-btn-warning">Academic</button></a> </li>
						
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4><span style="color: gold">Football</span></h4>
			<p>
				We believe exercise should be part and parcel of our daily routine.To prove this,we have conquered and come home with medals in various fields in sports
			</p>
			
		</div>
		<h4><span style="color: gold"></span></h4>
		<div>
			<img class="img-thumbnail img-rounded" src="../img/best.jpg" alt="" style="height: 170px; width: 500px;">
				</div>
			</div>
		</div>
		<hr>
		<div class="jumbotron">
		<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4><span style="color: gold">Baketball</span></h4>
			<p>
				We believe exercise should be part and parcel of our daily routine.To prove this,we have conquered and come home with medals in various fields in sports
			</p>
			
		</div>
		<h4><span style="color: gold"> </span></h4>
		<div>
			<img class="img-thumbnail img-rounded" src="../img/basket.png" alt="" style="height: 300px; width: 500px;">
				</div>
			</div>
		</div></div>
		<hr>

		<style type="text/css">
	#c{
		background-color:;
		}
</style><section class="alizarin">
		
		<div class="container">
			<div class="row centered">
			

			<div class="col-md-6">
			<h4>Nime Institute</h4>
				<small><p>We believe, believing in yourself and having passion,to succeed as made our teams shine in sports</p></small>
				<p>Making passion and determination in sports part of you will eventually lead you to a better place.Passion is like a shadow.Make it part and parcel in your daily exercise. </p>

			</div>
				
				<div class="big gap" id="join"></div>
				<div class="col-md-6 ">
				

				<div class="status alert alert-success" style="display: none"></div>
				<form action="games.php" class="contct-form " id="main-contact-form" name="contact" method="POST">
				<div class="row">
					<div class="col-md-6">

						<div class="form-group form-group-lg">
							<input type="text" name="Name" class="form-control" placeholder="Name" required>
						</div>
						<div class="form-group form-group-lg">
							<input type="text" name="game" class="form-control" placeholder="game type" required>
						</div>
						<div class="form-group form-group-lg">
							<input type="email" name="email" class="form-control" placeholder="Your Email" required>
						</div>

						<div class="form-group form-group-lg">
						<textarea name="message" row="8" cols="10" placeholder="Enter the description of your game " class="form-control" style="resize: none;"></textarea>


					</div>
					<button type="submit" name="join" class="btn-btn-danger"><span class="glyphicon glyphicon-send">Join Us</span> </button>
				</div>
				</div>
				</form>
				</div>
				</div>
				</div>
				</section>
				<footer>
      <?php
      include 'footer.php';
      ?>
    </footer>


				
		