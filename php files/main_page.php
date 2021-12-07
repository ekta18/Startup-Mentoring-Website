<?php 
    $servername= "localhost";
    $username= "root";
    $password= "ekta";
    $dbname= "startup_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
      die("Connection failed.". $conn->connect_error);
    }
    session_start();
    $username = "";
    // $_SESSION = array();
    // echo("<script>console.log($_SESSION);</script>");
    if(isset($_SESSION['uemail']))
    {
      $username = $_SESSION["uemail"];
    }
    echo("<script>console.log('Successful');</script>");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
	<title>MentorUp</title>
	
    <link rel="stylesheet" href="css/main_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
</head>
<body>
      
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark" id="navbar_size">
      <a class="navbar-brand animate__animated animate__zoomIn" href="#">MentorUp</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

  <div class="navbar-collapse">
    <ul class="navbar-nav" id="leftmenu">
      <li class="nav-item active">
        <a class="nav-link animate__animated animate__zoomIn" href="main_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle animate__animated animate__zoomIn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th" aria-hidden="true"></i> Domain</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
           <a class="dropdown-item" href="domain1.php">Software</a>
           <a class="dropdown-item" href="domain2.php">Hardware</a>
           <a class="dropdown-item" href="domain3.php">Business</a>
           <a class="dropdown-item" href="#">E-Commerce</a>
           <a class="dropdown-item" href="#">Marketing</a>
           <a class="dropdown-item" href="#">General</a>
<!--
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">More</a>
-->
        </div>
      </li>
    </ul>
        <ul class="nav justify-content-end" id="rightmenu">
           <?php
            $uname = "";
            $sql = "SELECT Sname FROM student WHERE Semail='$username';";
            $results = $conn->query($sql);
            if (!empty($results) && $results->num_rows > 0) 
            { 
                while ($row = $results->fetch_assoc()) 
                {
                    $uname = $row["Sname"];
                }
            }
            if ($uname)
            {
                  //echo("<script>console.log('Successful1');</script>");
                  echo '<li class="nav-item">';
                    echo $uname;
                  echo '</li>';
                  echo '<li class="nav-item">';
                    echo '<a href="logout.php">Logout</a>';
                  echo '</li>';
            }
            else
            {
                  // echo("<script>console.log('Successful2');</script>");
                    echo '<li class="nav-item">';
                        echo '<a class="nav-link animate__animated animate__zoomIn" href="team.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Team Sign Up</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                      echo '<a class="nav-link animate__animated animate__zoomIn" href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                        echo '<a class="nav-link animate__animated animate__zoomIn" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>';
                    echo '</li>';
            }
            ?>
           
           <!-- <li class="nav-item">
             <a class="nav-link animate__animated animate__zoomIn" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
          </li> -->
         </ul>
   </div>
  </nav>
  
    <!-- Carousel -->  
	<div id="carouselExampleControls" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block img-size" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block img-size" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block img-size" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img4.jpg" class="d-block img-size" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img5.jpg" class="d-block img-size" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <hr>
    
    <!-- Announcement -->
    <div id="announce">
	<span id="blink">*Announcements*</span>
	<ul id="an">
		<li></li>
		<li class="le"><span class="New">New</span>
           <a href="#">Link to the latest webinar by our Mentor</a>
        </li>
        <li class="le"><span class="New">New</span>
           <a href="#">Link to the latest webinar by our Mentor</a>
        </li>
        <li>
           <a href="#">Link to the latest webinar by our Mentor</a></li>
        <li>
           <a href="#">Link to the latest webinar by our Mentor</a>
        </li>
        <li>
           <a href="#">Link to the latest webinar by our Mentor</a>
        </li>
        <li></li>
        <li>
           <a href="announcements.php" class="More"> More.. </a>
        </li>
	</ul>

</div>
 
    <!--Info -->
    <div id="us">
    <h1 class="heading"><b>What the website is about ?</b></h1>
	<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<div class="left_section">
	    <h1 class="heading"><b>Need</b></h1>
	</div>
	<p class="info">
	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  
	</p>

    <div class="right_section">
        <h1 class="heading"><b>Benefits</b></h1>
    </div>
    <p class="info">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
  
    <!--Blogs -->
    <div id="blogs">
	<span id="blink">*Blogs*</span>
	<ul id="an">
		<li></li>
		<li class="le">
            <a href="#">Link to the latest webinar by our Mentor</a>
        </li>
        <li class="le">
            <a href="#">Link to the latest webinar by our Mentor</a>
        </li>
         <li>
         <a href="#">Link to the latest webinar by our Mentor</a>
         </li>
         <li>
         <a href="#">Link to the latest webinar by our Mentor</a>
         </li>
         <li>
         <a href="#">Link to the latest webinar by our Mentor</a>
         </li>
         <li></li>
        <li>
            <a href="blogs.php" class="More">More..  </a>
        </li>
	</ul>
</div>

    <br><br><br>
    <hr>
 
    <!--Domain-->
    <div>
    <h1 class="domain_heading"><b>* Domains *</b></h1>
  <div class="card" style="width: 23rem;">
      <img class="card-img-top" src="images/domain1.jpg" alt="Card image cap" style="height: 15.5rem; width: 23rem;">
      <div class="card-body">
        <h5 class="card-title">SOFTWARE</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="domain1.php" class="btn btn-primary">View More</a>
      </div>
  </div>

  <div class="card" style="width: 23rem;">
      <img class="card-img-top" src="images/domain2.jpg" alt="Card image cap" style="height: 15.5rem; width: 23rem;">
      <div class="card-body">
        <h5 class="card-title">HARDWARE</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="domainpage2.html" class="btn btn-primary">View More</a>
      </div>
  </div>

  <div class="card" style="width: 23rem; ">
    <img class="card-img-top" src="images/domain3.jpg"alt="Card image cap"  style="height: 15.5rem; width: 23rem;">
    <div class="card-body">
      <h5 class="card-title">BUSINESS</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="domainpage3.html" class="btn btn-primary">View More</a>
    </div>
  </div>

  </div>
    <div>
  <div class="card" style="width: 23rem;">
    <img class="card-img-top" src="images/domain4.jpg" alt="Card image cap" style="height: 15.5rem; width: 23rem;">
    <div class="card-body">
      <h5 class="card-title">E-COMMERCE</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>

  <div class="card" style="width: 23rem;">
    <img class="card-img-top" src="images/domain5.jpg" alt="Card image cap" style="height: 15.5rem; width: 23rem;">
    <div class="card-body">
      <h5 class="card-title">MARKETING</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>

  <div class="card" style="width: 23rem;">
    <img class="card-img-top" src="images/domain6.jpg" alt="Card image cap" style="height: 15.5rem; width: 23rem;">
    <div class="card-body">
      <h5 class="card-title">GENERAL</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>

    <br>
    <hr>
  
    <!--Review-->
    <h1 class="review_heading"><b>* Reviews *</b></h1>
    <br>
    <div id="carouselExampleControls-2" class="carousel revcarousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <table class="comment">
         <tr>
             <td><img src="images/review.jpg" class="rev1 img-size2" alt=""></td>
             <td class="comment_content"><b class="name">Sample</b> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsum animi, repellendus possimus dignissimos, numquam. Earum nostrum minima magni eligendi officiis praesentium modi voluptatum, sapiente harum ea aperiam molestias error facilis hic voluptates labore alias culpa commodi, neque reiciendis in ad. Beatae nostrum eligendi ducimus voluptates facilis facere, minus id!</td>
         </tr>
     </table>
    </div>
    <div class="carousel-item">
     <table class="comment">
         <tr>
             <td><img src="images/review.jpg" class="rev1 img-size2" alt=""></td>
             <td class="comment_content"><b class="name">Sample</b> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsum animi, repellendus possimus dignissimos, numquam. Earum nostrum minima magni eligendi officiis praesentium modi voluptatum, sapiente harum ea aperiam molestias error facilis hic voluptates labore alias culpa commodi, neque reiciendis in ad. Beatae nostrum eligendi ducimus voluptates facilis facere, minus id!</td>
         </tr>
     </table>
    </div>
    <div class="carousel-item">
      <table class="comment">
         <tr>
             <td><img src="images/review.jpg" class="rev1 img-size2" alt=""></td>
             <td class="comment_content"><b class="name">Sample</b> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsum animi, repellendus possimus dignissimos, numquam. Earum nostrum minima magni eligendi officiis praesentium modi voluptatum, sapiente harum ea aperiam molestias error facilis hic voluptates labore alias culpa commodi, neque reiciendis in ad. Beatae nostrum eligendi ducimus voluptates facilis facere, minus id!</td>
         </tr>
     </table>
    </div>
    <div class="carousel-item">
     <table class="comment">
         <tr>
             <td><img src="images/review.jpg" class="rev1 img-size2" alt=""></td>
             <td class="comment_content"><b class="name">Sample</b> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsum animi, repellendus possimus dignissimos, numquam. Earum nostrum minima magni eligendi officiis praesentium modi voluptatum, sapiente harum ea aperiam molestias error facilis hic voluptates labore alias culpa commodi, neque reiciendis in ad. Beatae nostrum eligendi ducimus voluptates facilis facere, minus id!</td>
         </tr>
     </table>
    </div>
    <div class="carousel-item">
     <table class="comment">
         <tr>
             <td><img src="images/review.jpg" class="rev1 img-size2" alt=""></td>
             <td class="comment_content"><b class="name">Sample</b> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsum animi, repellendus possimus dignissimos, numquam. Earum nostrum minima magni eligendi officiis praesentium modi voluptatum, sapiente harum ea aperiam molestias error facilis hic voluptates labore alias culpa commodi, neque reiciendis in ad. Beatae nostrum eligendi ducimus voluptates facilis facere, minus id!</td>
         </tr>
     </table>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    <br>
</div>

    
     
      <form action="pmain_page.php" method="POST">
         
      <div class="input_comments">
      <div class="form-row">
        <div class="form-group col-md-6" id="comments">
      <input type="text" name="review" id="review" class="form-control" placeholder="Enter your comments...">
    </div>
    <div class="form-group col-md-2">
       <button name="submit" class="btn btn-primary">Submit</button> 
    </div>
    </div>
      </div>
      
      </form>
    
  
    <hr>
     
    <!--Move to top-->
    <div class="move_top">
         <p class="pull-right"><a href="#" class="mtplink">Move to top <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a></p>
    </div>
    <br>
          
   
    <!-- Footer -->
    <footer class="footer">
    <div class="container bottom_border">
    <div class="row">

      <div class="content1 col-sm-3 col-md-3  col-lg-3 ">
        <h5 class="headin5_amrc col_white_amrc pt2">QUICK LINKS</h5>
        <!--headin5_amrc-->
        <ul class="footer_ul_amrc">
        <li><a href="main_page.html">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="blogs.html">Blogs</a></li>
        <li><a href="">Sign Up</a></li>
<!--        <li><a href="">Contact Us</a></li>-->
        </ul>
        <!--footer_ul_amrc ends here-->
        </div>

    <div class="col-sm-3 col-md-3  col-lg-3 ">
    <h5 class="headin5_amrc col_white_amrc pt2">CONTACT DETAILS</h5>
    <!--headin5_amrc-->
    <p class="mb10">Office 1: Mount Poinsur, S.V.P. Road, Borivali (West), Mumbai 400 103.</p>
    <hr>
    <p class="mb10">Office 2: Lamington Road, Opp Holy Cross Hospital, Bandra(East), Mumbai 400 109.</p>
    <hr>
    <p><i class="fa fa-phone">  022-28928585 / +91 9136951119</i> </p>
    <hr>
    <p><i class="fa fa fa-envelope"></i>  sfedu@sfit.ac.in</p>
    </div>
    
    
    
    <div class="content2 col-sm-3 col-md-3 col-lg-3">
    <h5 class="headin5_amrc col_white_amrc pt2">FOLLOW US</h5>
    <!--headin5_amrc ends here-->
    
    <ul class="footer_ul2_amrc">
      <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://in.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
    </ul>
    <!--footer_ul2_amrc ends here-->
    </div>
    </div>
    </div>
    <!--social_footer_ul ends here-->
    
    <p class = "footer1" style="text-align: center;">Rights Reserved. © 2020 | Powered By Startup.Inc  <a href="#">Terms </a>&middot;<a href="#"> Conditions</a></p>
    </footer>
    
    <!--Chatbot -->   
    
   <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"b926ec46be1a0e7ea7fa84b6a07e4881","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
