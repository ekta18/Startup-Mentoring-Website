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
    $btitle = array();
    $binfo = array();
    $sql = "SELECT Bname,Bpost FROM blog;";
    $results = $conn->query($sql);
    if (!empty($results) && $results->num_rows > 0) 
    {
        while ($row = $results->fetch_assoc()) 
        {
            array_push($btitle,$row["Bname"]);
            array_push($binfo,$row["Bpost"]);
        }
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


	<title>Blogs</title>

    <link rel="stylesheet" href="css/blogs.css">
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
      <nav class="navbar navbar-expand-lg navbar navbar-dark">
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
           <a class="dropdown-item" href="domainpage1.html">Software</a>
           <a class="dropdown-item" href="domainpage2.html">Hardware</a>
           <a class="dropdown-item" href="domainpage3.html">Business</a>
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
                      echo '<a class="nav-link animate__animated animate__zoomIn" href="team.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Team Sign Up</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                      echo '<a class="nav-link animate__animated animate__zoomIn" href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                        echo '<a class="nav-link animate__animated animate__zoomIn" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>';
                    echo '</li>';
            }
            ?>
         </ul>
   </div>
  </nav>
     
      <!--Blogs navigation -->
      <ul class="nav nav-tabs"id="anav">
         <?php 
              
              $blen = sizeof($binfo);
              for ($i=0; $i < $blen; $i++) 
              { 
                  echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="#Blog1">';
                  echo $btitle[$i];
                  echo '</a>';
                  echo '</li>';
              }
          ?>


	     <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
           <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
           </div>
         </li>
      </ul>
      
      <div id="new">
         <a href="#new-blog" id="new-button">+Add Blog</a>
      </div>
      
      <!--Blog content -->
      <div id="main-blogs">

        <?php 

            $blen = sizeof($binfo);
              for ($i=0; $i < $blen; $i++) 
              { 
                  echo '<p class="blog-heading" id="Blog2">';
                  echo $btitle[$i];
                  echo '</p>';
                  echo '<p class="content">';
                  echo $binfo[$i];
           echo '</p>';
           echo '<a class="back-nav" href="#leftmenu">Move to navbar</a>';
            echo '<br><br>';
              }
         ?>

         <br><br>
     </div>
     
      <!-- Add New Blog -->
      <div id="new-blog">
	    <p id="post-heading">Write your blog here!!!</p>
	    <form action="pblogs.php" method="POST" class="needs-validation" id="title"novalidate>
	      <div class="form-row">
	        <div class="col-md-12 mb-3">
	          <label for="validationCustom01">Blog Title</label>
	          <input type="text" name="title" class="form-control" id="validationCustom01" value="" required>
            </div>
			<div class="form-group">
              <label for="exampleFormControlTextarea1">Content of Blog</label>
              <textarea name="info" class="form-control" id="exampleFormControlTextarea1" rows="10" cols="150"></textarea>
            </div>
          </div>
          <button type="submit" name="submit" id="submit">Post</button> 
		</form>
		    
		    <a href="#"id="cancel">Cancel</a>
     </div>
      <br><br>
      
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
            {"appId":"24ffa4dc357214920503c5ee72bbe53ee","popupWidget":true,"automaticChatOpenOnNavigation":true};
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
