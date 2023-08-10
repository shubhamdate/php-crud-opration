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
        <div class="register">
            <h1>Create a new account</h1>
            <form action="../php/register.php" name="add" onsubmit="return validateForm()" method="post">
                <input type="text" id="username" name="username" placeholder="Enter Username">
                <span class="error-message" id="username-error"></span>
                <input type="password" id="password" name="password" placeholder="Enter Password">
                <span class="error-message" id="password-error"></span>
                <input type="text" id="fname" name="fname" placeholder="Enter First Name">
                <span class="error-message" id="firstname-error"></span>
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name">
                <span class="error-message" id="lastname-error"></span>
                <input type="email" id="email" name="email" placeholder="Enter Email">
                <span class="error-message" id="email-error"></span>
                <button class="btn" name="submit" id='newRegister' type="submit">Register</button>
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
            </form>
            <div class="space">

            </div>
            <form action="../html/login.php">
                <div class="button">
                    <button class="btn" type="submit">Already have an account?</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            var username = document.forms["add"]["username"].value;
            var password = document.forms["add"]["password"].value;
            var firstname = document.forms["add"]["fname"].value;
            var lastname = document.forms["add"]["lname"].value;
            var email = document.forms["add"]["email"].value;

            document.getElementById("username-error").textContent = "";
            document.getElementById("password-error").textContent = "";
            document.getElementById("firstname-error").textContent = "";
            document.getElementById("lastname-error").textContent = "";
            document.getElementById("email-error").textContent = "";

            if (username === "") {
                document.getElementById("username-error").textContent = "Please enter a username.";
                return false;
            }

            if (password === "") {
                document.getElementById("password-error").textContent = "Please enter a password.";
                return false;
            }

            if (firstname === "") {
                document.getElementById("firstname-error").textContent = "Please enter your first name.";
                return false;
            }

            if (lastname === "") {
                document.getElementById("lastname-error").textContent = "Please enter your last name.";
                return false;
            }

            if (email === "") {
                document.getElementById("email-error").textContent = "Please enter your email.";
                return false;
            }
        }
    </script>
</body>

</html>
<?php
    unset($_SESSION["error"]);
?>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="index.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="form">

        <div class="register">
            <h1>Create a new account</h1>
            <form action="../php/register.php" method="post">
                <input type="text" id="username" name="username" placeholder="Enter Username" required>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>
                <button class="btn" id='newRegister' type="submit">Register</button>
            </form>
            </form>
            <div class="space">

            </div>
            <form action="../html/login.html">
                <div class="button">
                    <button class="btn" type="submit">Already have an account?</button>
                </div>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html> -->