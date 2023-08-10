<?php
    include("session.php");      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $error = "<h3>Invalid username or password</h3>";
    
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $hashed_password = hash('md5', "$password");
   
        $sql = "SELECT * FROM `user` WHERE username ='$username' and password ='$hashed_password';"; 
    
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){ 
            $id = $row['id'];
            $_SESSION['id'] = $id;
            header('location:../php/user_profile.php');           
        }  
        else{ 
            // header('location:../html/login.html');
            $_SESSION["error"] = $error;
            header('location:../html/login.php');
        }     
?>  