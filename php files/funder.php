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
    $fundername = "";
    $fname = "";
    $fid = "";
    $tid = array();

    // $_SESSION = array();
    // echo("<script>console.log($_SESSION);</script>");
    if(isset($_SESSION['femail']))
    {
      $fundername = $_SESSION["femail"];
    }
    $sql = "SELECT Fname,Fid FROM funder WHERE Femail='$fundername';";
    $results = $conn->query($sql);
    if (!empty($results) && $results->num_rows > 0) 
    {
        while ($row = $results->fetch_assoc()) 
        {
              $fname=$row["Fname"];
              $fid=$row["Fid"];
        }
    }
    echo("<script>console.log('Successful');</script>");
    $sql = "SELECT Tid FROM funderteam WHERE Fid='$fid';";
    $results = $conn->query($sql);
    if (!empty($results) && $results->num_rows > 0) 
    {
        while ($row = $results->fetch_assoc()) 
        {
              array_push($tid,$row["Tid"]);
        }
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Funder Page</title>
    <link rel="stylesheet" href="css/funder.css">
      <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
     <link href="https://fonts.googleapis.com/css?family=Long+Cang&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>

    <!-- Naviagtion bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark">
    <a class="navbar-brand animate__animated animate__zoomIn" href="#">MentorUp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse">
    <ul class="navbar-nav" id="leftmenu">
    <li class="nav-item active">
      <a class="nav-link animate__animated animate__zoomIn" href="main_page.html"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle animate__animated animate__zoomIn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th" aria-hidden="true"></i> Domain</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="domainpage1.html">Business</a>
           <a class="dropdown-item" href="domainpage2.html">Software</a>
           <a class="dropdown-item" href="domainpage3.html">Hardware</a>
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
            if (strlen($fname) < 0)
             {
                 echo ' <li class="nav-item">';
           echo '<a class="nav-link animate__animated animate__zoomIn" href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a>';
           echo '</li>';
           echo '<li class="nav-item">';
           echo '<a class="nav-link animate__animated animate__zoomIn" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>';
           echo '</li>';
              }
               else
              {
                echo '<li class="nav-item">';
                    echo '<a href="logout.php">Logout</a>';
                  echo '</li>';
              }
          ?>
         <li class="nav-item">
           <a class="nav-link animate__animated animate__zoomIn" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
        </li>
       </ul>
    </div>
    </nav>

    <!--Main Body-->
    <div class="title">
      <?php 
          echo '<strong><p id="heading">Funder Desk</p></strong>';
          echo '<strong><p id="mentor-name"><i class="fas fa-user-circle"></i>Welcome '.$fname.'</p></strong>';
        ?>
        <form action="funder.php" method="POST">
        <button type="submit" name="submit" id="add-button">Add Startup</button>
      </form>
      <?php 

          if(isset($_POST['submit'])) 
          {
              $_SESSION["fname"] = $fundername; 
              echo '<script type="text/javascript">';  
              echo 'window.location.href = "fadd_startup.php";';
              echo '</script>';
          }
       ?>
    </div>


    <?php 
         $tlen = sizeof($tid);
         $i = 0;
         $tname = array();
         $tinfo = array();
         //echo $dlen;
         for ($i=0; $i < $tlen ; $i++)
         { 
              $ttemp = $tid[$i];
              // echo $dtemp;
              $sql = "SELECT Tname,Tproject,Tstatus FROM team WHERE Tid='$ttemp';";
              $results = $conn->query($sql);
          if (!empty($results) && $results->num_rows > 0) 
          {

              while ($row = $results->fetch_assoc()) 
              {
                  if($row["Tstatus"]==1)
                  {
                    array_push($tname,$row["Tname"]);
                    array_push($tinfo,$row["Tproject"]);
                    
                  }
              }
           }

         }
         //print_r($tname);
         //print_r($tinfo);
         
     ?>

    <!-- List of startups-->
    <div class="main-body">

    <div class="accordion" id="accordionExample">
      <?php 
          $tmlen = sizeof($tinfo);
              for ($i=0; $i < $tmlen; $i++) 
              { 
                  echo '<div class="card">';
                  echo '<div class="card-header" id="headingOne">';
                  echo '<h2 class="mb-0">';
                  echo '<button class="btn btn-link btn-block text-left collapsed" id="button1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
                  echo $tname[$i];
                  echo '</button>';
                  echo '</h2>'; 
                  echo '<button type="button" name="button" class="delete-button">';
                  echo '<i class="fas fa-trash-alt"></i></button>';
                  echo '<a href="chatpage.php" class="cwt">Chat with team</a>';
                  echo '</div>';

                  echo '<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">';
                  echo '<div class="card-body">';
                  echo $tinfo[$i];
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
              } 

       ?>

      
    </div>

    </div>
    <br><br><br>

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

  </body>
</html>
