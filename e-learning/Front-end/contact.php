<?php
session_start();
include'header.php';
include '../include/config.php';
if (isset($_POST['contact'])) {
  // $pic= $_POST['pic'];
  $Name= $_POST['Name'];
  $email=$_POST['email'];
  // $Date=$_POST['Date'];
  $message=$_POST['message'];
//$pic=mysqli_real_escape_string($con,$_POST['pic']);
  $Name=mysqli_real_escape_string($con,$_POST['Name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  // $Date=mysqli_real_escape_string($con,$_POST['Date']);
  $sql=mysqli_query($con,"INSERT INTO contact (Name,email,message) VALUES('$Name','$email','$message')");
  $result=mysqli_query($con,$sql);
  //header("Location: contact.php?join=sucesss");
                exit();
                }
?>

<style type="text/css">
    #contact{
background-color: ;
    }
</style>
<br><section class="emerald">
<div class="panel-primary">
        <div class="container">
            <div class="row centered" id="contact">
            <h4><span style="color: gold"> Contact Us</span></h4>
            <hr>
            <div class="col-md-6">
                <small><p>We at Nime Institute adore and respect every aspect of your .We deliver faster respond once you reach us.Feel free and welcome to  contact us through the given media</p></small>

            </div>
            
                <div class="col-md-6 centered" style="border-left: ridge;">
                    <ul class="breadcrumb">
                    <li><a href="home.php"><button type="button" class="btn-btn-default">Home Page</button></a> </li>
                     <li><a href="About.php"><button type="button" class="btn-btn-warning">About Us</button></a> </li>
                      <li><a href="games.php"><button type="button" class="btn-btn-warning">Games</button></a> </li>
                        

                        
                    </ul>
                </div>

            </div>
        </div>
        </section>
        
    
<div class="">
    <div class="container-fluid">
        <div class="row">
             <div class="col-md-3 col-sm-6 col-offset-1">
            <strong>Emergency phone Numebrs:</strong> 
                <div class="panel panel-primary">
                    <div class="panel-body">
                    
                    <hr>
    
    <abbr tittle="Help Line">Life threatening Emergency:</abbr>911</br>
     <abbr tittle="Help Line"> Campus Mocam:</abbr>23239380</br>
    <abbr tittle="Help Line">Student medical service:</abbr>9303844485</br>
    <abbr tittle="Help Line">Students counselling services:</abbr>1223339394</br>
    
                    </div>
                    </div>
            </div>
             <div class="col-md-3 col-sm-6 col-offset-1">
                <h5>Our Location</h5>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        <hr>
                        
                        The Nime Institute</br>
        66 west 13th street</br>
        Rongai ,Rongai 100011</br>
        <abbr tittle="Help Line">Help:</abbr>(254)-344-444
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-offset-1">
                <h5>Admission</h5>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        <hr>
                        Institute welcome center<br>
                        72 fifth avenue</br>
            check application status .<br>

        <abbr tittle="Help Line">Help:</abbr>(254)-344-444
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-offset-1">
                <h5>Alumni Relations</h5>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        <hr>
                        
                        For assistance with self service call 070000035353<br>
                        
        Alumni FAQ page<br>
        <abbr tittle="Help Line">Help:</abbr>(254)-344-444
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <style type="text/css">
        #bg{
            background-color:lightgrey ;
        }
    </style>
    <section class="">
    <div class="Container" id="bg">
    <div class="row">
        <div class="col-md-4">
            <h5>About Nime Institute</h5>
            <p>The groundbreaking research and work done by
                                     Nime College students,alumni and faculty are defined by rigorous
                                      methodology ,in-depth exploration ,and human -inspired problem 
                                      solving .</p>
                                      <small>More About Us</small><br>
                                      
                                      <a href="About.php"><button type="button" class="btn btn-primary">About Us</button></a>
        </div>
        <div class="col-md-4">
       <address>
  <strong>Twitter, Inc.</strong><br>
  Nairobi Biashara Ave, Suite 600<br>
  Nime Inst, CA 94107<br>
  <abbr title="Phone">P:</abbr> (254) 456-7890
</address>
<strong>Send your twitter message</strong>
 <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
      
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
        </div>
        <div class="col-md-4">
        <h5><b>Contact Us</b></h5>
            <div class="status alert alert-success" style="display: none"></div>
                <form action="contact.php" class="contact-form " id="main-contact-form" name="contact" method="POST">
                <div class="row">
                <!-- <div class="form-group">
                <div class="input-group">
                   <div class="col-md-6">
                   <div class="form-group form-group-lg">
                    <input type="file" name="pic" id="image" accept="image/*"  placeholder="Enter image" class="form-control" required>
               </div>
            </div> -->
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <input type="text" name="Name" class="form-control" placeholder="Name" required>
                        </div>
                        
                        <div class="form-group form-group-lg">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <!-- <div class="form-group form-group-lg">
        
          <input type="Date" name="Date" placeholder="Date of commenting*" class="form-control"  required>
        </div>
      
 -->
                        <div class="form-group form-group-lg">
                        <textarea name="message" row="8" cols="10" placeholder="Enter Your Message" class="form-control" style="resize: none;"></textarea>


                    </div>
                    <button type="submit" name="contact" class="btn-btn-danger"><span class="glyphicon glyphicon-send">  Send Message</span> </button>
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


    

   