<?php
session_start();
include'header.php';
?>



        <style type="text/css">
  header{
    background-image: url(../img/30.JPEG);
    
    height: 500px;

  }
</style>
<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span style="color: gold">Faculty of Engineering!</span></div>
                <div class="intro-heading"><span style="color: gold"> Be an Engineer!</span></div></span>
                <a href="Enroll.php" class="page-scroll btn btn-xl"><span class="glyphicon  glyphicon-user">join us </span> </a></span> 
            </div>
        </div>
    </header>
    <style type="text/css">
        #sidebar
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
            <li><a href="#Mechanical">Mechanical Engineering</a></li>
            <li><a href="#Tele">Telecommunication Engineering</a></li>
            <li><a href="#Civil">Civil Engineering</a></li>
        </ul></li>
     <li class="dropdown">
    
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: red">MCT</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="Media.php">Journalism</a></li>
            <li><a href="Media.php">Film and Animation</a></li>
            
        </ul></li>
        
    </ul>
        
    </div>
    
    <div class="col-sm-9">
        
  


<div class="jumbotron text-center" style="padding-top: 70px; padding-right: 70px; margin-top: 70px;">    

<div class="media-body">
    <h5 class="media-heading highlight"" style="color: black">There are three courses in the faculty of Engineering:</h5>
    <a href="#Civil"><button type="button" class="btn btn-btn-danger">Civil Engineering</button></a>
    <a href="#Mechanical"><button type="button" class="btn btn-btn-danger">Mechanical Engineering</button></a>
     <a href="#Tele"><button type="button" class="btn btn-btn-danger"> Telecommunication Engineering</button></a>
</div>
</div>
<div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/23.png" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                
                                    <h4 class="subheading">Mechanical Engineering</h4>
                                </div>
                                <div class="timeline-body" id="Mechanical">
                                    <p class="text-muted">Mechanical Engineering falls under the faculty of Engineering.It has its roots way back in 2015.Since then,it has experienced higher number of admissions every year due to its impressive performance.It is among the toughest course but our students are well polished and focused to pursue the course</p>
                                    <a href="#Mechanical"><button type="button" class="btn btn-btn-danger">Enroll Today</button></a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/29.jpeg" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                   
                                    <h4 class="subheading">Civil Engineering</h4>
                                </div>
                                <div class="timeline-body" id="Civil">
                                    <p class="text-muted">Civil Engineering is under the department of Engineering.It deals with construction and refinement of roads among other things.It was launched in 2000.We graduated many of our students in this course who are now famous and prominent leaders in various fields around the global.</p>
                                    <a href="sign.php"><button type="button" class="btn btn-btn-danger">Enroll Today</button></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/images.JPG" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                
                                    <h4 class="subheading">Telecommunication Engineering</h4>
                                </div>
                                <div class="timeline-body" id="Tele">
                                    <p class="text-muted">Telecommunication was originally Electrical Engineering before fine tuning its name.It mainly deals with wiring and cabling.It has few enrollment.It is one of the best course at Nime Institute.Networking which involves interconnection of sevral nodes located at different locations for sharing of data is highly empahisized in this course</p>
                                    <a href="sign.php" ><button type="button" class="btn btn-btn-danger">Enroll Today</button></a>
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
 