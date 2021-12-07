<?php 
  // $mid = "hii";

  // if(isset($_SESSION['mentid']))
  //   {
  //     $mid = $_SESSION["mentid"];
  //   }
  //   echo $mid;
  

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
	<title>SignUp</title>
	
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    

</head>

<body>
 
  <div style="background-image: url('./images/background.jpg');" class="body">
    <div class="container text-center">
        <div>
            <div class="name">Mentor's Domain</div>
        </div>

        <form action="pmentor_domain.php" method="POST">
            <div class="input">
           Name <input type="text" id="name" placeholder="Enter Name" name="name">
      </div> 	
			<div class="input">
			Select Your Domain <br>
			<input type="checkbox" id="domain1" name="domain[]" value="1">
  <label for="domain1">Software</label><br>
  <input type="checkbox" id="domain2" name="domain[]" value="3">
  <label for="domain2"> Hardware</label><br>
  <input type="checkbox" id="domain3" name="domain[]" value="4">
  <label for="domain3"> Business</label><br><br>
  <input type="checkbox" id="domain4" name="domain[]" value="5">
  <label for="domain4"> E-commerce</label><br><br>
  <input type="checkbox" id="domain5" name="domain[]" value="6">
  <label for="domain5"> Marketing</label><br><br>
  <input type="checkbox" id="domain6" name="domain[]" value="7">
  <label for="domain6"> General</label><br><br>
			</div>
			
			<div> 
            <button class="btn btn-info signup">Submit</button>
            </div>
            </form>
      </div>
    </div>

</body>
</html>