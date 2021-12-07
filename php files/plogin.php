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
        session_start();
        $role = $_POST["loginas"];
        $email = $_POST["username"];
        $password = $_POST["password"];
        // echo $role.$email.$password;

        if($role == "student")
        {
            $sql = "SELECT Spass FROM student WHERE Semail='$email';";
            $results = $conn->query($sql);
            if (!empty($results) && $results->num_rows > 0) 
            {
                while ($row = $results->fetch_assoc()) 
                {
                    if($row["Spass"] == $password)
                    {
                        $_SESSION["uemail"] = $email;
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Login Successful . ");'; 
                        echo 'window.location.href = "main_page.php";';
                        echo '</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Invalid Password . ");'; 
                        echo 'window.location.href = "login.php";';
                        echo '</script>';
                    }
                }
            }
            else
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("Register Yourself . ");'; 
                echo 'window.location.href = "signup.php";';
                echo '</script>';
            }
        }
        elseif($role == "mentor")
        {
            $sql = "SELECT Mpass FROM mentor WHERE Memail='$email';";
            $results = $conn->query($sql);
            if (!empty($results) && $results->num_rows > 0) 
            {
                while ($row = $results->fetch_assoc()) 
                {
                    if($row["Mpass"] == $password)
                    {
                        $_SESSION["memail"] = $email;
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Login Successful . ");'; 
                        echo 'window.location.href = "mentor.php";';
                        echo '</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Invalid Password . ");'; 
                        echo 'window.location.href = "login.php";';
                        echo '</script>';
                    }
                }
            }
            else
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("Register Yourself . ");'; 
                echo 'window.location.href = "signup.php";';
                echo '</script>';
            }
        }
        else
        {
            $sql = "SELECT Fpass FROM funder WHERE Femail='$email';";
            $results = $conn->query($sql);
            if (!empty($results) && $results->num_rows > 0) 
            {
                while ($row = $results->fetch_assoc()) 
                {
                    if($row["Fpass"] == $password)
                    {
                        $_SESSION["femail"] = $email;
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Login Successful . ");'; 
                        echo 'window.location.href = "funder.php";';
                        echo '</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Invalid Password . ");'; 
                        echo 'window.location.href = "login.php";';
                        echo '</script>';
                    }
                }
            }
            else
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("Register Yourself . ");'; 
                echo 'window.location.href = "signup.php";';
                echo '</script>';
            }
        }
        $conn->close();
    }
 ?>