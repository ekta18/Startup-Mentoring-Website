<?php          
    $servername= "localhost";
    $username= "root";
    $password= "ekta";
    $dbname= "startup_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
    	die("Connection failed.". $conn->connect_error);
    }
    else
    {
    	// echo "Connected successfully. <br>";
        $role = $_POST["loginas"];
        $name = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $team = $_POST["team"];
        // echo $role.$email.$password;

        if($role == "student")
        {
            $sql = "INSERT INTO student (Sname,Semail,Sphone,Spass,Tid) VALUES ('$name', '$email', '$phone', '$password', '$team')";
            $results = $conn->query($sql);
            echo '<script type="text/javascript">'; 
            echo 'alert("Signup Successful . ");'; 
            echo 'window.location.href = "login.php";';
            echo '</script>';
            
        }
        elseif($role == "mentor")
        {
            $sql1 = "INSERT INTO mentor (Mname,Memail,Mphone,Mpass) VALUES ('$name', '$email', '$phone', '$password')";
            $results1 = $conn->query($sql1);
            echo '<script type="text/javascript">'; 
            echo 'alert("Signup Successful . ");'; 
            echo 'window.location.href = "login.php";';
            echo '</script>';
           
        }
        else
        {
            $sql2 = "INSERT INTO funder (Fname,Femail,Fphone,Fpass) VALUES ('$name', '$email', '$phone', '$password')";
            $results2 = $conn->query($sql2);
            echo '<script type="text/javascript">'; 
            echo 'alert("Signup Successful . ");'; 
            echo 'window.location.href = "login.php";';
            echo '</script>';
        }
        $conn->close();
    }
 ?>