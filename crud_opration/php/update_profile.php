<?php
session_start();   
if(isset($_SESSION["id"])){

include('connection.php');  
$id = $_SESSION['id'];

extract($_POST);

date_default_timezone_set("Asia/Calcutta");
$updated_time = date("Y-m-d h:i:s");

switch ($_FILES["profile_photo"]["error"]) {
case UPLOAD_ERR_OK:
$target = "../Img/";
$file_name = $id . "_" . basename($_FILES["profile_photo"]["name"]);

if (
move_uploaded_file(
$_FILES["profile_photo"]["tmp_name"],
$target . $file_name
)
) {
$query = "UPDATE `user` SET username='$username', fname='$fname',lname='$lname',email='$email', updated_at='$updated_time' WHERE id = '$id';
UPDATE `user_profile` SET address='$address',profile_photo='$file_name',`updated_at`='$updated_time' WHERE user_id='$id';";

$sql = mysqli_multi_query($con, $query);

if ($sql) {
    header('location:../php/user_profile.php');
// echo mysqli_error($conn);
// echo "<script>alert('Data Updated Successfully.');window.location.replace('../Frontend/edit_profile.php');</script>";
} else {
echo $conn->error;
}
} else {
echo "Sorry, there was a problem uploading your file.";
}
}

}
?>






