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
        $tname = $_POST["tname"];
        $tinfo = $_POST["tinfo"];
        $domain = $_POST["domain"];
        $tid = "";

            $sql1 = "INSERT INTO team (Tname,Tproject,Did) VALUES ('$tname', '$tinfo', '$domain')";
            $results1 = $conn->query($sql1);
            $sql = "SELECT Tid FROM team WHERE Tname='$tname';";
            $results = $conn->query($sql);
            // echo $sql1;
            // echo $sql;
            if (!empty($results) && $results->num_rows > 0) 
            {
                while ($row = $results->fetch_assoc()) 
                {
                    $tid = $row["Tid"];
                }    
            }
            // echo $tid;
            $_SESSION["tid"] = $tid;
            echo '<script type="text/javascript">'; 
                        echo 'alert("Team Registration successful . ");'; 
                    
                        echo 'window.location.href = "signup.php";';
                        echo '</script>';                   
        $conn->close();
    }
 ?>