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
    
	<title>Chatpage</title>
	
    <link rel="stylesheet" href="css/main_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    

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
           
           <li class="nav-item">
             <a class="nav-link animate__animated animate__zoomIn" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
          </li>
         </ul>
   </div>
  </nav>
  

<iframe
    allow="microphone;"
    width="100%"
    height="555"
    src="https://console.dialogflow.com/api-client/demo/embedded/5ed9a0f1-3c82-4592-8f23-3ffc640ea776">
</iframe>

</body>
</html>