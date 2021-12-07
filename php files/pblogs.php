<?php 
    $servername= "localhost";
    $username= "root";
    $password= "ekta";
    $dbname= "startup_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
      die("Connection failed.". $conn->connect_error);
    }

    $btitle = $_POST["title"];
    $binfo = $_POST["info"]; 
    // echo $btitle."<br>";
    // echo $binfo;
    $sql = "INSERT INTO blog (Bname,Bpost) VALUES ('$btitle', '$binfo')";
            $results = $conn->query($sql);
            echo '<script type="text/javascript">'; 
            echo 'alert("Blog Added Successfully . ");'; 
            echo 'window.location.href = "blogs.php";';
            echo '</script>';

    $conn->close();
?>