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
    
	<title>Software</title>
	  <link rel = "stylesheet" href = "css/font-awesome.min.css">
    <link rel="stylesheet" href="css/domain1.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <li class="nav-item ">
          <a class="nav-link animate__animated animate__zoomIn" href="main_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown active">
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

             <!-- <li class="nav-item">
               <a class="nav-link animate__animated animate__zoomIn" href="login.html"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link animate__animated animate__zoomIn" href="signup.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
             </li> -->
             <li class="nav-item">
               <a class="nav-link animate__animated animate__zoomIn" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
            </li>
           </ul>
     </div>
    </nav>
   
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4 animate__animated animate__flipInX" style="color: white;">SOFTWARE</h1>
      </div>
    </div>
    
    <!-- Info --> 
    <div class>
      <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class = "class1">
      <img src = "images/software.jpg" id = "image1">
      <h1 id>Why Software ?</h1>
      <p class = "para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. Ornare lectus sit amet est placerat in egestas. Amet mattis vulputate enim nulla aliquet porttitor lacus. Ipsum suspendisse ultrices gravida dictum fusce ut placerat. Gravida cum sociis natoque penatibus. Rhoncus dolor purus non enim praesent elementum facilisis. Sed viverra ipsum nunc aliquet bibendum enim facilisis. Aliquet nec ullamcorper sit amet risus nullam eget. Ut tortor pretium viverra suspendisse potenti. Sed cras ornare arcu dui vivamus arcu felis bibendum. Vulputate enim nulla aliquet porttitor lacus luctus. Risus sed vulputate odio ut enim blandit. Ultricies lacus sed turpis tincidunt id aliquet risus. Sed libero enim sed faucibus turpis in eu mi. Neque convallis a cras semper auctor neque vitae tempus quam. Sed blandit libero volutpat sed cras ornare arcu.

        Consequat ac felis donec et odio pellentesque. Risus nec feugiat in fermentum posuere. Pretium aenean pharetra magna ac. Adipiscing commodo elit at imperdiet dui accumsan. Tempor orci dapibus ultrices in iaculis nunc sed augue. Elementum integer enim neque volutpat ac tincidunt vitae semper quis. Turpis tincidunt id aliquet risus feugiat in ante. Natoque penatibus et magnis dis. Eget aliquet nibh praesent tristique magna. </p>
    </div>
    
    
    <!-- Mentor's carousel -->
    <section id = "team">
      <div class="container my-3 py-5 text-center">
        <div class="row mb-5">
          <div class="col">
            <h1 class = "heading">
              MENTORS
            </h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class = "card">
              <div class="card body">
                <img src = "images/person1.jpg" alt = "" class = "img-fluid rounded-circle w-50 mb-3">
                <h3>Susan Williams</h3>
                <h5>Software Engineer</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non.</p>
                <button type="button" class="btn" id="button3">Contact</button>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-facebook"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-twitter"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class = "card">
              <div class="card body">
                <img src = "images/person2.jpg" alt = "" class = "img-fluid rounded-circle w-50 mb-3">
                <h3>Johnny Lesh</h3>
                <h5>Entrepeneur</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non.</p>
                <button type="button" class="btn" id="button3">Contact</button>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-facebook"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-twitter"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class = "card">
              <div class="card body">
                <img src = "images/person3.jpg" alt = "" class = "img-fluid rounded-circle w-50 mb-3">
                <h3>Amanda Lenova</h3>
                <h5>Software Developer</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non.</p>
                <button type="button" class="btn" id="button3">Contact</button>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-facebook"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-twitter"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class = "card">
              <div class="card body">
                <img src = "images/person4.jpg" alt = "" class = "img-fluid rounded-circle w-50 mb-3">
                <h3>Eric Delga</h3>
                <h5>Software Executive</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non.</p>
                <button type="button" class="btn" id="button3">Contact</button>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-facebook"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-twitter"></i>
                    </a>
                  </div>
                  <div class="p-4">
                    <a href = "#">
                      <i class = "fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    <div>
      <!-- <button type="button" class="btn" id="button1">Submit Project</button> -->
      <button type="button" class="btn" id = "button1"><a href="chatpage.php" class="btn">Talk to mentor</a></button>
    </div>
    
    <!-- Success Stories -->
    <div class = "successstories">
    <h1>
      SUCCESS STORIES
    </h1>
    

    <div class="container text-center my-3">
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">


                  <div class="carousel-item active">
                      <div class="col-md-4">
                        <div class = "card">
                          <div class="card body">
                            <img src = "images/person1.jpg" alt = "" class = "img-fluid rounded-circle " style="width: 100px;">
                            <h3>Erica Delga</h3>
                            <h5>Software Executive</h5>
                            <h6>United Kingdom</h6>
                            <hr>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. "</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  

                  <div class="carousel-item ">
                    <div class="col-md-4">
                      <div class = "card">
                        <div class="card body">
                          <img src = "images/person2.jpg" alt = "" class = "img-fluid rounded-circle " style="width: 100px;">
                          <h3>James Henriques</h3>
                          <h5>Developer</h5>
                          <h6>USA</h6>
                          <hr>
                          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. "</p>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="carousel-item ">
                  <div class="col-md-4">
                    <div class = "card">
                      <div class="card body">
                        <img src = "images/person3.jpg" alt = "" class = "img-fluid rounded-circle " style="width: 100px;">
                        <h3>Olive Yew</h3>
                        <h5>Developer</h5>
                        <h6>Russia</h6>
                        <hr>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. "</p>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="carousel-item ">
                <div class="col-md-4">
                  <div class = "card">
                    <div class="card body">
                      <img src = "images/person4.jpg" alt = "" class = "img-fluid rounded-circle " style="width: 100px;">
                      <h3>Simon Sias</h3>
                      <h5>Software Executive</h5>
                      <h6>Spain</h6>
                      <hr>
                      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. "</p>
                    </div>
                  </div>
                </div>
            </div>


           <div class="carousel-item ">
                      <div class="col-md-4">
                        <div class = "card">
                          <div class="card body">
                            <img src = "images/person2.jpg" alt = "" class = "img-fluid rounded-circle " style="width: 100px;">
                            <h3>Mark Ateer</h3>
                            <h5>Entrepreneur</h5>
                            <h6>India</h6>
                            <hr>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. "</p>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="col-md-4">
                      <div class = "card">
                        <div class="card body">
                          <img src = "images/person1.jpg" alt = "" class = "img-fluid rounded-circle " style="width: 100px;">
                          <h3>Allie Grater</h3>
                          <h5>Developer</h5>
                          <h6>Italy</h6>
                          <hr>
                          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. "</p>
                        </div>
                      </div>
                    </div>
                </div>

              </div>
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>    
  </div>
  </div>

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
      <li><a href="https://www.instagram.com/"><i class="fab fa-instagram foot"></i></a></li>
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

      $('#recipeCarousel').carousel({
        interval: 10000
      })

      $('.carousel .carousel-item').each(function(){
          var minPerSlide = 3;
          var next = $(this).next();
          if (!next.length) {
          next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
          
          for (var i=0;i<minPerSlide;i++) {
              next=next.next();
              if (!next.length) {
                next = $(this).siblings(':first');
              }
              
              next.children(':first-child').clone().appendTo($(this));
            }
      });

	</script>

</body>

</html>