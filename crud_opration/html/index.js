function validateForm() {
    var username = document.forms["add"]["username"].value;
    var password = document.forms["add"]["password"].value;
    var firstname = document.forms["add"]["firstname"].value;
    var lastname = document.forms["add"]["lastname"].value;
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