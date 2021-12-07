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
        if(isset($_POST['submit'])) 
        {
        $comment = $_POST["review"];
        $sql1 = "INSERT INTO review (Rinput) VALUES ('$comment')";
        $results1 = $conn->query($sql1);
        echo '<script type="text/javascript">'; 
        echo 'alert("Your review is submitted");';
        echo 'window.location.href = "main_page.php";';
        echo '</script>';
        }
        $conn->close();
    }
 ?>