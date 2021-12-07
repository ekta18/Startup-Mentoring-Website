<?php 
	session_start();
	session_destroy();
	echo '<script type="text/javascript">'; 
    echo 'alert("Logout Successful . ");'; 
    echo 'window.location.href = "main_page.php";';
    echo '</script>';

 ?>