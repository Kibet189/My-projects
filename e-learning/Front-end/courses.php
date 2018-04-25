<?php
session_start();
include_once("../include/config.php");
include'header.php';
?>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-3 col-sm-2 sidebar">
    <h3 class="page-header">Faculties</h3>
    <ul class="nav nav-sidebar">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: lightgrey">COMPUTING&IT</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="Compscience.php">Software Engineering</a></li>
            <li><a href="Compscience.php">Computter Science</a></li>
            <li><a href="Compscience.php">Information Technology</a></li>
        </ul></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: lightgrey">ENGINEERING</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="Engineering.php">Mechanical Engineering</a></li>
            <li><a href="Engineering.php">Telecommunication Engineering</a></li>
            <li><a href="Engineering.php">Civil Engineering</a></li>
        </ul></li>
     <li class="dropdown">
    
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: lightgrey">MEDIA&COMMUNICATION</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header" style="color: gold">Courses</li>
            <li><a href="Media.php">Journalism</a></li>
            <li><a href="Media.php">Film and Animation</a></li>
            
        </ul></li>
        
    </ul>
        
    </div>
    
    <div class="col-sm-9">
        
  

<center>
<div class="" style="padding-top: 70px; padding-right: 70px; margin-top: 70px;">    

<div class="media-body">
    <h6 class="media-heading highlight"" style="color: black">Use the buttons below to navigate through other pages:</h6>
      <ul class="breadcrumb">
                    <li><a href="home.php"><button type="button" class="btn-btn-warning">Home Page</button></a> </li>
                     <li><a href="About.php"><button type="button" class="btn-btn-warning">About Us</button></a> </li>
                      <li><a href="games.php"><button type="button" class="btn-btn-warning">Games</button></a> </li>
                        

                        
                    </ul>
</div>
</center>
<div class="col-lg-10 col-md-offset-1">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-tittle">
        <div class="pull-right">
        <button type="button" class="btn btn-success"><a href="sign.php">Enroll</a></button></div>
          <center><span>Courses</span></center>
          
        </h3>
      </div>
      <?php 
      
       $sql="SELECT * FROM courses";
       $query=mysqli_query($con,$sql);
       //$result=mysqli_fetch_assoc($query);
      //  var_dump($result);
      // foreach ($result as $k) {
      //    echo $k['cs'];
    
      ?>
      <div class="panel-body">
    <table class="table table-stripped table-hover">
    <thread >
        <th>Faculties</th>
        <th>Courses</th>
    </thread>
    <tbody>
    <?php while($row = $query->fetch_assoc()){?>
      <tr class="info" >
      <td><?php echo $row['faculty'] ?></td>
      <td><?php echo $row['course']; ?></td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
</div>
    
</div>

</div>
</div>
</div>
</center>
      <style type="text/css">
        #bg{
            background-color: lightgrey;
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
                <form action="" class="contct-form " id="main-contact-form" name="contact" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <input type="text" name="Name" class="form-control" placeholder="Name" required>
                        </div>
                        
                        <div class="form-group form-group-lg">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>

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
                


<footer>
    <?php
    include'footer.php';
    ?>
</footer>
