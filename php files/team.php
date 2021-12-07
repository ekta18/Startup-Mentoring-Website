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
            <div class="name">Team Sign Up</div>
        </div>
        <form action="pteam.php" method="POST">
        	
			<div class="input">
			     Team/Project Name <input type="text" id="tname" placeholder="Enter Name of Team/Project" name="tname">
			</div>
			<div class="input">
				Project Description <input type="text" id="tinfo" name="tinfo" placeholder="Enter Project Description">
			</div>
			<div class="input">
			Select your domain 
			<select id="domain" name="domain">
				<option value="1">Software</option>
				<option value="3">Hardware</option>
				<option value="4">Business</option>
				<option value="5">E-commerce</option>
                <option value="6">Marketing</option>
                <option value="7">General</option>
			</select>
			</div>
			<div>
                <button class="btn btn-info signup">Sign Up</button>
            </div>
            </form>
            <button class="btn btn-info login">
            	<a href="login.php">Login</a>
            </button>
            <button class="btn btn-info reset">
            	<a href="reset_password.php">Reset password</a>
            </button>
      </div>
    </div>

</body>
</html>