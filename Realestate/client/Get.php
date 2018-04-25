<?php
require 'loginheader.php';
require '../RealEstateClient/validationprocess.php';
?>
                        </ul><section class="asbestos">
                        <center><i><h1><strong><span style="color: khaki">GET IN TOUCH WITH DEVILLA REALESTATE</span></strong></h1></i></center>
<div class="panel-primary">
        <div class="container">
            <div class="row centered" id="contact">
<div class="col-md-3" >
              <td><img class="img-circle img-responsive" width="400" height="400" src="../img/small.jpeg"</td>
                 
               </div>
            <div class="col-md-3" style="border-left: ridge;>
            <center><h3><span style="color: gold"><i>Contact Us</i></span></h3></center>
            <p>24 hours| 7 days a week| 365 days a year</p>
                <small><p>Contact us Devilla Real Estate for comfortable,conducive and pocket favourable home.We look forward to providing quality,satisfactory and pocket manageable services to our clients.</p></small>

            </div>
            <div class="col-sm-3" style="border-left: solid;">
            <ul class="timeline">
            <li class="timeline-inverted">
                            <div class="timeline-image" style="height: 230px; width: 230px;">
                                
                                   <h4>welcome 
                                    
                                
                                    <br>To Devilla 
                                    
                                    <br>Real Estate, Make
                                    <br> your dreams
                                    <br> Valid </h4>
                            </div>
                        </li>
</div>
               <div class="col-md-3" style="border-left: solid;">
              <td><img class="img-circle img-responsive" width="500" height="500" src="../img/hand.jpeg"</td>
                 
               </div>

            </div>
        </div>
        </section>
        <div class="row">
        	<div class="container">
        		<div class="col-md-4">
        				 <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <center>
          <span class="glyphicon glyphicon-user" >Sign In</span></center>

          
        </h3>
      </div>
      
      <div class="panel-body">
      
      <form class="form-horizontal" action="Get.php" method="POST">
      <div class="form-group">
      <div class="form-group">
        <label class="control-label col-md-3">Name</label>
        <div class="col-md-8">
          <input type="name" name="name" placeholder="Your name*" class="form-control" value="" required>
        </div> </div>
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="email" placeholder="Email*" class="form-control" required>
        </div>
      </div>
      
        <div class="form-group">
        <label class="control-label col-md-3">Mobile Number</label>
        <div class="col-md-8">
          <input type="text" name="mobile" placeholder="mobile*" class="form-control" value="" required>        


        </div> </div>
        
        
     <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
           
            <input type="submit" class="btn btn-success" name="contact" value="Login">
            <input type="reset" class="btn btn-warning" name="" value="Reset">
          </div>
        </div>
        
      </form>
        </div>
      </div>
        		</div>
        		
        			<div class="col-md-4 col-sm-6 col-offset-1" style="border-left: ridge;">
                <center><h5>Company information</h5></center>
                <div class="panel panel-primary">
                    <div class="panel-body">
                       <hr>

     <abbr tittle="">   Email:</abbr>Estate@gmail.com</br>
    <abbr tittle="">Phone:</abbr>0706244585</br>
    <abbr tittle="">fax:</abbr>(000) 00 008 990</br>
                    </div>
                </div>
            </div>
        		<div class="col-md-4 col-sm-6 col-offset-1" style="border-left: ridge;">
               <center><h5>Our Location</h5></center> 
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        <hr>
                        
                        The Real Estate </br>
        66 west 13th street</br>
        Mfangano ,Nairobi 100011</br>
        
                    </div>
                </div>
            </div>
        	</div>
        </div>
<footer>
	<?php require '../RealEstateClient/footer.php'; ?>
</footer>