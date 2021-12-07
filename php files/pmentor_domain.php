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
        // $domain = $_POST["domain"];
        // echo $domain;
        // echo $role.$email.$password;
        $name = $_POST['name'];
        $domain = $_POST['domain'];
        $sql = "SELECT Mid FROM mentor WHERE Mname='$name';";
            $results = $conn->query($sql);
            if (!empty($results) && $results->num_rows > 0) 
            {
                while ($row = $results->fetch_assoc()) 
                {
                    $mid = $row["Mid"];
                }
            }
  if(empty($domain)) 
  {
    echo("You didn't select any domains.");
  } 
  else 
  {
    $N = count($domain);

    for($i=0; $i < $N; $i++)
    {
      $sql = "INSERT INTO mentordomain (Mid,Did) VALUES ('$mid', '$domain[$i]')";
            $results = $conn->query($sql);
            //echo $sql;

    }
    echo '<script type="text/javascript">'; 
            echo 'alert("Domains Added Successfully . ");'; 
            echo 'window.location.href = "mentor.php";';
            echo '</script>';
  }
        
        
        $conn->close();
    }
 ?>