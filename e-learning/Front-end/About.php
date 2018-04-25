<?php 
session_start();
include'header.php';
?>
<!-- <style type="text/css">
  header{
    background-image: url(../img/40.jpg);
    height: 500px;
  }
</style>
<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Nime Institute!</div>
                <div class="intro-heading">It's a Nice Place To Be</div>
                <a href="About.php" class="page-scroll btn btn-xl"><span class="glyphicon  glyphicon-user"></span> </a></span> 
            </div>
        </div>
    </header> -->


<hr>
   

    <style type="text/css">
  #c{
    width: 50%;
    }
</style>


<div class="midnight-blue">
    <div class="container">
      <div class="row centered">
      <h4><span style="color: gold">Campus Life</span></h4>
      <hr>
      <div class="col-md-6">
        <p>Find your community.Build life-long friendship with students who share your interests,passions and perspectives.Whether you're on our campus,the boundaries of classrooms disslves as the town becomes your studio ,rehearsal space and research center</p>
        <P></P>


      </div>
        <div class="col-sm-4 centered" id="c" style="border-left: groove;">
          <ul class="breadcrumb">
        
          <li><a href="Academic.php"><button type="button" class="btn-btn-warning">Academic</button></a> </li>
          <li><a href="games.php"><button type="button" class="btn-btn-success">Games</button></a> </li>
          <li><a href="staff.php"><button type="button" class="btn-btn-info">Leadership</button></a> </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <hr>
   <style type="text/css">
  #about{
    text-align: center;

  }
</style>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><span style="color: gold"> About us</span></h2>
                    <h3 class="section-subheading text-muted"></h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/37.jpeg" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>College Leadership</h4>
                                    <h4 class="subheading"></h4>
                                    <h4 class="subheading"></h4>
                                </div>
                                <div class="timeline-body">
                      <p class="text-muted">The Nime Technical college leadership team sets the course for the academic ,intellectual and creative rigor of the college.With the commitment to excellence,in all areas ,the leaders of our college ensure that we adapt and respond to contemporary issues ,create a more inclusive community and a faster an environment where students challege convention through scholarship and creative exploration</p>
                                </div>
                            </div>
                            
                     
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/n.jpg" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Our History</h4>
                                    <h4 class="subheading"></h4>
                                    <h5 class="subheading"></h5>
                                </div>
                                <div class="timeline-body">
                                    <p>In 1990, a group of visionaries sought a new and evolved model of education ,one providing the intellectual and creative freedom to tackle the most pressing issues of the day.Since the founding of the Nime School some of the finest minds in our society have pioneered courses in emerging areas of academic inquiry ,attracting students and faculty from around the world.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/18.jpg" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>ACADEMICS</h4>
                                    <h4 class="subheading"></h4>
                                    <h4 class="subheading"></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Our multideimensional approach to academics frees you from conventional boundaries.With immersive learning opportunities across disciplines ,you will stretch yourself beyond traditional academic pathways.Hone your critical thinking skills as you prototype solutions .Develop problem-solving skills through hands-on learning .Forever change the way you investigate and create.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/elearning.png" alt="" style="height: 170px; width: 170px;">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Work and Research</h4>
                                    <h4 class="subheading"></h4>
                                    <h5 class="subheading"></h5>
                                </div>
                                <div class="timeline-body">
                                    <small><p>We dont just expand conventional boundaries 
                                    but we redraw them.The groundbreaking research and work done by
                                     Nime College students,alumni and faculty are defined by rigorous
                                      methodology ,in-depth exploration ,and human -inspired problem 
                                      solving .Explore the ways we create new knowledge ,forms and models.</p></small>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="height: 230px; width: 230px;">
                                
                                   <h4>welcome All!
                                    
                                    <br>Best place
                                    <br>To make
                                    <br>your dreams
                                    <br>come true</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-tittle">
         <center> <span class="glyphicon glyphicon-comment"> Leave a comment</span></center>
          
        </h3>
      </div>

      
      <div class="panel-body">
      <form class="form-horizontal" action="About.php" method="POST">
       <!-- div class="form-group">
                <div class="input-group">
                    <label class="control-label col-md-3">Image</label>
                    <input type="file" name="pic" id="image" accept="image/*"  placeholder="Enter image" class="form-control" required>
                </div>
            </div> -->
      <div class="form-group">
        <label class="control-label col-md-3">Name</label>
        <div class="col-md-8">
          <input type="text" name="Name" placeholder="Your Name*" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Email</label>
        <div class="col-md-8">
          <input type="Email" name="Email" placeholder="Your Email*" class="form-control" required>
        </div>
      </div>
        
        <div class="form-group">
        <label class="control-label col-md-3">contact</label>
        <div class="col-md-8">
          <input type="text" name="contact" placeholder="Your contact*" class="form-control" required>
        </div>
      </div>
      <!-- <div class="form-group">
        <label class="control-label col-md-3">Date</label>
        <div class="col-md-8">
          <input type="date" name="Date" placeholder="Date of messaging*" class="form-control" required>
        </div>
      </div> -->
        <div class="form-group">
        <label class="control-label col-md-3">comment</label>
        <div class="col-md-8">
          <textarea name="comment" cols="10" rows="6" class="form-control" required></textarea>
        </div>
      </div>
        <div class="form-group">
        <label class="control-label col-md-3">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="com" value="Send Comment">
          </div>
        </div>
        
      </form>
      <?php

include_once('../include/config.php');
if (isset($_POST['com'])) {
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $contact=$_POST['contact'];
  // $Date=$_POST['Date'];
  $comment=$_POST['comment'];

$sql=mysqli_query($con,"INSERT INTO comment(Name,Email,contact,comment) VALUES('$Name','$Email','$contact','$comment')");

  $result=mysqli_query($con,$sql);}
//   if(strlen($Name)<9||strlen($Name>12)){
//       $_SESSION['error']="This field should contain at least 8, and at most 12 characters";
//      // header("Location: About.php");
      
//     }
//   else if(strlen($contact)>13||strlen($contact<9))
//     {
//       $_SESSION['error']="Insert a valid phone number(10 digits)";
//           header("Location: About.php");
//     }
//   #var_dump
//     else if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
//       $_SESSION['error']="Email is in wrong format";
//       header("Location: About.php");
      
//     }
//     else{
//       $sql=mysqli_query($con,"INSERT INTO comment(Name,Email,contact,comment) VALUES('$Name','$Email','$contact',$comment')");

//   $result=mysqli_query($con,$sql);
//     }

//   # code...
// }

?>
        </div>
      </div>
    </div>
    <footer>
      <?php
      include 'footer.php';
      ?>
    </footer>





