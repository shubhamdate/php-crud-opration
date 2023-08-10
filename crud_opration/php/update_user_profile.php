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
      <a class="nav-item nav-link active" href="../php/user_profile">My Profile</a>
    </div>
    <div class="navbar-navv right">
    <a class="nav-item loguot nav-link" href="../php/logout.php">Logout</a>
    </div>
  </div>
</nav>
    <div class="register">
        <h1>Update Your Profile</h1>

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
        <form action="../php/update_profile.php" method="post" enctype="multipart/form-data">
        <!-- action="../php/update_profile.php" -->
            <div class="profileImgSec">
                <div class="profileImg">
                <img class="avatar" src="http://localhost:8080/crud_opration/Img/<?php echo $profile_photo; ?>" /> 
                </div>
                <h6>Upload a different photo...</h6>
                <input name="profile_photo" type="file">
            </div>
            <div class="profile">
                <div class="profileContent">
                    First Name:
                </div>
                <div class="profileData">
                    <input type="text" id="fname" name="fname" value="<?php echo $fanme ?>" required>
                </div>
            </div>
            <div class="profile">
                <div class="profileContent">
                    Last Name:
                </div>
                <div class="profileData">
                    <input type="text" id="lname" name="lname" value="<?php echo $lname ?>" required>

                </div>
            </div>
            <div class="profile">
                <div class="profileContent">
                    Username:
                </div>
                <div class="profileData">
                    <input type="text" id="username" name="username" value="<?php echo $username ?>" required>
                </div>
            </div>
            <div class="profile">
                <div class="profileContent">
                    Email:
                </div>
                <div class="profileData">
                    <input type="email" id="email" name="email" value="<?php echo $email ?>" required>
                </div>
            </div>
            <div class="profile">
                <div class="profileContent">
                    Address:
                </div>
                <div class="profileData">
                    <input type="text" id="address" name="address" value="<?php echo $address ?>" required>
                </div>
            </div>
            <div class="button">
                <button class="btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>