<?php 
    $servername= "localhost";
    $username= "root";
    $password= "ekta";
    $dbname= "startup_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
    	die("Connection failed.". $conn->connect_error);
    }
    else{
    	echo "Connected successfully. <br>";
    }

    $sql = "SELECT id, name FROM temp;";
    $results = $conn->query($sql);

    if (!empty($results) && $results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            echo "ID: ". $row["id"]." Name: ".$row["name"]."<br>";
        }
    }
    else{
        echo "Error in displaying data";
    }
    $conn->close();
 ?>