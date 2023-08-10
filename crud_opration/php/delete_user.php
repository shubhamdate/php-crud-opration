<?php 
    require_once("connection.php");
    session_start();
    if(isset($_SESSION["id"])){
        $id = $_SESSION['id'];
        $sql = "DELETE FROM `user_profile` WHERE user_id='$id';";
        if($con->query($sql)==true){
            $sql = "DELETE FROM `user` WHERE id='$id';";
            if($con->query($sql)==true){
                echo "Data Deleted Succssfully";
                header('location:../html/login.php');
        }
        }        
    }
?>
