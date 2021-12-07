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
        $npassword = $_POST["newpassword"];
        $cpassword = $_POST["confpassword"];
        // echo $role.$email.$npassword.$cpassword;

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
                        // echo "Same";
                        if ($npassword==$cpassword) 
                        {
                            $sql = "UPDATE student SET Spass = '$npassword' WHERE Semail='$email';";
                            $conn->query($sql);
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Password changed successfully . ");'; 
                            echo 'window.location.href = "login.php";';
                            echo '</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Password does not match . ");'; 
                            echo 'window.location.href = "reset_password.php";';
                            echo '</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Invalid Password . ");'; 
                        echo 'window.location.href = "reset_password.php";';
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
                        // echo "Same";
                        if ($npassword==$cpassword) 
                        {
                            $sql = "UPDATE mentor SET Mpass = '$npassword' WHERE Memail='$email';";
                            $conn->query($sql);
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Password changed successfully . ");'; 
                            echo 'window.location.href = "login.php";';
                            echo '</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Password does not match . ");'; 
                            echo 'window.location.href = "reset_password.php";';
                            echo '</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Invalid Password . ");'; 
                        echo 'window.location.href = "reset_password.php";';
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
                        // echo "Same";
                        if ($npassword==$cpassword) 
                        {
                            $sql = "UPDATE funder SET Fpass = '$npassword' WHERE Femail='$email';";
                            $conn->query($sql);
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Password changed successfully . ");'; 
                            echo 'window.location.href = "login.php";';
                            echo '</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Password does not match . ");'; 
                            echo 'window.location.href = "reset_password.php";';
                            echo '</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Invalid Password . ");'; 
                        echo 'window.location.href = "reset_password.php";';
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