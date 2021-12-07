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
        session_start();
    	// echo "Connected successfully. <br>";
        $tname = $_SESSION["tname"];
        $mid = $_SESSION["mid"];
        // echo $role.$email.$password;
        $sql = "SELECT Tid FROM team WHERE Tname='$tname';";
            $results = $conn->query($sql);
            if (!empty($results) && $results->num_rows > 0) 
            {
                while ($row = $results->fetch_assoc()) 
                {
                    $tid = $row["Tid"];
                }
            }
            $sql1 = "INSERT INTO mentorteam (Mid,Tid) VALUES ('$mid', '$tid')";
            $results1 = $conn->query($sql1);
            echo '<script type="text/javascript">'; 
            echo 'alert("Team added successfully . ");'; 
            echo 'window.location.href = "add_startup.php";';
            echo '</script>';
            
        
        $conn->close();
    }
 ?>