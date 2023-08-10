<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <div class="register login">
            <h1>Login Page</h1>
            <form action="../php/login.php" name="add" onsubmit="return validateForm()" method="post">
                <input type="text" id="username" name="username" placeholder="Enter username">
                <span class="error-message" id="username-error"></span>
                <input type="password" id="password" name="password" placeholder="Password">
                <span class="error-message" id="password-error"></span>
                <button class="btn" type="submit">Log in</button>
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?> 
            </form>
            <div class="space">

            </div>
            <form action="../html/register.php">
                <div class="button">
                    <button class="btn" id='newRegister' type="submit">Create new account</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            var username = document.forms["add"]["username"].value;
            var password = document.forms["add"]["password"].value;

            document.getElementById("username-error").textContent = "";
            document.getElementById("password-error").textContent = "";


            if (username === "") {
                document.getElementById("username-error").textContent = "Please enter a username.";
                return false;
            }

            if (password === "") {
                document.getElementById("password-error").textContent = "Please enter a password.";
                return false;
            }
        }
    </script>
</body>

</html>
<?php
    unset($_SESSION["error"]);
?>