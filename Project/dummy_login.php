<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div id="registration_form_background">
        <div id="registration_form_container">
            <h2>Login Form</h2>
        <form action="dummy_login_process.php" method="POST">
            <label for="email" id="login_email">Email</label> &nbsp;
            <br>
            <input type="email" name="email" placeholder="Enter email" id="login_email_box"> &nbsp;
            <br>
            <label for="name" id="login_password_text">Password</label>
            <br>
            <input type="password" name="password" placeholder="Enter your password" id="login_password_box"><br><br><br><br><br>
            <input type="submit" value="Submit" id="login_Submit">
            <br><br>
            <p id="login_text1">Not yet Registered?</p>
            <p id="login_text2"><a href="registration.php">Sign In</a></p>
        </form>
        </div>
    </div>
</body>
</html>