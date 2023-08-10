<?php      
    include('connection.php');  
    
    session_start();   
    if(isset($_SESSION["id"])){
        $id = $_SESSION['id'];
        $query = "select * from user WHERE `id`='$id';";
        $result = mysqli_query($con,$query);

        $query = "select * from user_profile WHERE `user_id`='$id';";
        $result_profile = mysqli_query($con,$query);
    }
    else{
        header('Location:../html/login.html.php');
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../css/user_profile.css" />

    <title>View Records</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav left">
      <a class="nav-item nav-link active" href="">My Profile</a>
    </div>
    <div class="navbar-navv right">
    <a class="nav-item loguot nav-link" href="../php/logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="profileSection">
    <div class="register">
        <h1>My Profile</h1>

        <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['id'];
                                        $username = $row['username'];
                                        $fanme = $row['fname'];
                                        $lname = $row['lname'];
                                        $email = $row['email'];
                                        $create_at = $row['create_at'];
                                        $updated_at = $row['updated_at'];
                                    }

                                    while($row_profile=mysqli_fetch_assoc($result_profile))
                                    {
                                        $profile_photo = $row_profile['profile_photo'];
                                        $address = $row_profile['address'];
                                        
                                    }
                            ?>
        <div class="profileImgSec">
            <div class="profileImg">
                <img class="avatar" src="http://localhost:8080/crud_opration/Img/<?php echo $profile_photo; ?>" /> 
            </div>
            Profile Photo:
        </div>
        <div class="profile">
            <div class="profileContent">
                First Name:
            </div>
            <div class="profileData">
                <?php echo $fanme ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileContent">
                Last Name:
            </div>
            <div class="profileData">
                <?php echo $lname ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileContent">
                Username:
            </div>
            <div class="profileData">
                <?php echo $username ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileContent">
                Email:
            </div>
            <div class="profileData">
                <?php echo $email ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileContent">
            Address
            </div>
            <div class="profileData">
            <?php echo $address ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileContent">
                Profile Created At:
            </div>
            <div class="profileData">
                <?php echo $create_at ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileContent">
                Latest Edited Profile:
            </div>
            <div class="profileData">
                <?php echo $updated_at ?>
            </div>
        </div>
        <form action = "../php/update_user_profile.php">
            <div class="button">
                <button class="btn" type="submit">Update Your Profile</button>
            </div>
        </form>
        <form action = "../php/delete_user.php">
            <div class="button">
        
                <button  class="btn" id="delete" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete Your Profile</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>