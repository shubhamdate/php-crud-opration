<?php      
    $server = "localhost";  
    $user = "root";  
    $password = 'root';  
    $db_name = "user_management";  
      
    $con = mysqli_connect($server, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>