<?php 

include('connection.php'); 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = mysqli_query($con, "DELETE FROM `user` WHERE `id`='$id'");
    }

    $query = "select * from user";
    $user = mysqli_query($con,$query);

?>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../css/users_list.css" />

    <title>View Records</title>
</head>

<body>
    <div class="register">
        <h1>List of Users</h1>
        <table class="table">
            <tr id="headData">
                <td> User ID </td>
                <td> User Name </td>
                <td>First Name </td>
                <td>Last Name</td>
                <td> User Email </td>
                <td> Create Time </td>
                <td> Updated Time </td>
            </tr>

            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($user))
                                    {
                                        $id = $row['id'];
                                        $username = $row['username'];
                                        $fanme = $row['fname'];
                                        $lname = $row['lname'];
                                        $email = $row['email'];
                                        $create_at = $row['create_at'];
                                        $updated_at = $row['updated_at'];
                            ?>
            <tr id="row">
                <td><?php echo $id ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $fanme ?></td>
                <td><?php echo $lname ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $create_at ?></td>
                <td><?php echo $updated_at ?></td>
            </tr>
            <?php 
                }  
            ?>


        </table>
    </div>
</body>

</html>