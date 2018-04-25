<?php
session_start();
include'header.php';
?>



        <style type="text/css">
  header{
    background-image: url(../img/24.PNG);
    
    height: 500px;

  }
</style>
<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span style="color: gold"></span></div>
                <div class="intro-heading"><span style="color: gold"></span></div></span>
                <a href="Enroll.php" class="page-scroll btn btn-xl"><span class="glyphicon  glyphicon-user"><span style="color: black">join us </span> </span> </a></span> 
            </div>
        </div>
    </header>
    <style type="text/css">
        #sidebar{
            
        }
    </style>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-3 col-sm-2 sidebar" id="sidebar">
    <h3 class="page-header">Faculties</h3>
    <ul class="nav nav-sidebar">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: red">CIT</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="Compscience.php">Software Engineering</a></li>
            <li><a href="Compscience.php">Computter Science</a></li>
            <li><a href="Compscience.php">Information Technology</a></li>
        </ul></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: red">ENG</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="Engineering,php">Mechanical Engineering</a></li>
            <li><a href="Engineering.php">Telecommunication Engineering</a></li>
            <li><a href="Engineering.php">Civil Engineering</a></li>
        </ul></li>
     <li class="dropdown">
    
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: red">MCT</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="#Journalism">Journalism</a></li>
            <li><a href="3Film">Film and Animation</a></li>
            
        </ul></li>
        
    </ul>
        
    </div>
    
    <div class="col-sm-9">
        
  


<div class="jumbotron text-center" style="padding-top: 70px; padding-right: 70px; margin-top: 70px;">    

<div class="media-body">
    <h5 class="media-heading highlight"" style="color: black">There are two courses in the faculty of Media and Communication:</h5>
    <a href="#Journalism"><button type="button" class="btn btn-btn-danger">Journalism</button></a>
    <a href="#Film"><button type="button" class="btn btn-btn-danger">Film and Animation</button></a>
</div>
</div>
<div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/24.png" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                
                                    <h4 class="subheading">Journalism</h4>
                                </div>
                                <div class="timeline-body" id="Journalism">
                                    <p class="text-muted">Journalism focuses on gathering data from variois fields and areas ,validate them before delivering the well polished and refined information to the people.It has higher enrollment hence occupying the largest classsrooms in the entire college.</p>
                                    <a href="#Mechanical"><button type="button" class="btn btn-btn-danger">Enroll Today</button></a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/10.jpg" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                   
                                    <h4 class="subheading">Film and Animation</h4>
                                </div>
                                <div class="timeline-body" id="Film">
                                    <p class="text-muted">Film is under the department of Media and communication.They deals with photography and animating objects.The change objects into mimicking bloody creatures in behaviourand character.They use mainly canon and sony as their tools of trade.The students are mainly out and doing things practically out there.</p>
                                    <a href="Enroll.php"><button type="button" class="btn btn-btn-danger">Enroll Today</button></a>
                                </div>
                            </div>
                        </li>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="height: 170px; width: 170px;">
                                <h4>Be part  ,
                                    <br> of Nime
                                    <br>Institute!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<style type="text/css">
        #bg{
            background-color: #eee;
        }
    </style>
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
                    <button type="submit" name="join" class="btn-btn-danger"><span class="glyphicon glyphicon-send">  Send Message</span> </button>
                </div>
                </div>

                    
                </form>
        </div>
    </div>
        
    </div>

</div>
</div>
</div>
      

 

<footer>
    <?php
    include'footer.php';
    ?>
</footer>