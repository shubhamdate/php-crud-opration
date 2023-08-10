<?php
if(isset($_POST["username"])){

include('connection.php');  

$error = "<h3>Invalid username or password</h3>";

$username = $_POST['username'];
$hashed_password = hash('md5', $_POST['password']);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date = date('Y-m-d H:i:s');

// Img data
$path = "../Img/userProfile.jpg";
$file = basename($path);         // $file is set to "index.php"
$profile_photo = basename($path, ".php");



$sql = "INSERT INTO `user`(`username`, `password`, `fname`, `lname`, `email`, `create_at`, `updated_at`) 
VALUES ('$username','$hashed_password','$fname','$lname','$email', '$date', '$date');";


if($con->query($sql)==true){
    $sql_profile = "SELECT * FROM `user` WHERE username ='$username';"; 
    $result = mysqli_query($con, $sql_profile);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    $id = $row['id'];
    // echo "$id";
    $sql = "INSERT INTO user_profile(`user_id`, `address`, `profile_photo`, `create_at`, `updated_at`) 
    VALUES ('$id', 'NA', '$profile_photo', '$date', '$date');";

    if($con->query($sql)==true){
         header('location:../html/login.php'); 
    }
}
else{
    $_SESSION["error"] = $error;
    header('location:../html/register.php');
    // echo "$con->error";
}
}
?>