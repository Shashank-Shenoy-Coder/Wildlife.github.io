<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Species</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Noto+Sans+JP&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@600&family=Rubik&family=Shadows+Into+Light+Two&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header id="about_banner">
        <figure id="about_banner_elements">
            <img src="images/logo/Logo_banner.jpg" alt="Wildlife Wonders" id="about_logo">
            <img src="images/logo/Slogan.png" alt="Caring, Loving and Understanding Animals" id="about_slogan">
        </figure>

        <nav>
            <ul id="about_navigation">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about us.html" >ABOUT US</a></li>
                <li><a href="animals.html">ANIMALS</a></li>
                <li><a href="" class="homepage">LOGIN/SIGNUP</a></li>
            </ul>
        </nav>
    </header>

    <div id="registration_form_background">
        <div id="registration_form_container">
            <h2>Registration Form</h2>
        <form action="sign_up_process.php" method="POST">
            <label for="first_name" id="first_name">First Name</label> &nbsp;&nbsp;&nbsp;
            <label for="last_name" id="last_name">Last Name</label>
            <br>
            <input type="first_name" name="first_name" placeholder="Sam" id="first_name_box"> &nbsp;&nbsp;&nbsp;
            <input type="last_name" name="last_name" placeholder="Altman" id="last_name_box"><br>
            <label for="email" id="email">Email</label> &nbsp;&nbsp;&nbsp;
            <label for="gender" id="gender">Gender</label>
            <br>
            <input type="email" name="email" placeholder="Enter email" id="email_box"> &nbsp;&nbsp;&nbsp;
            <input id="male" type="radio" name="gender" value="Male">
            <label for="male">Male</label>
            <input id="female" type="radio" name="gender" value="Female">
            <label for="female">Female</label>
            <br>
            <label for="phone_number" id="number">Phone Number</label> &nbsp;&nbsp;&nbsp;
            <label for="name" id="password_text">Password</label>
            <br>
            <input type="phone_number" name="phone_number" placeholder="" id="number_box"> &nbsp;&nbsp;&nbsp;
            <input type="password" name="password" placeholder="Enter your password" id="password_box"><br>
            <label for="password" id="confirm_password_text">Confirm Password</label>
            <br>
            <input type="password" name="cpassword" placeholder="Enter your password again" id="confirm_password_box"><br>
            <input type="submit" value="Submit" id="Submit">
            <br>
            <p id="registration_text1">Already Registered?</p>
            <p id="registration_text2"><a href="login.php">Log In</a></p>
        </form>
        </div>
    </div>

    <footer id="about_us_footer">
        <p id="footer_heading">Quick Links</p>
        <img src="images/logo/Logo_banner.jpg" alt="Wildlife Wonders" id="logo">
        <img src="images/logo/Slogan.png" alt="Caring, Loving and Understanding Animals" id="slogan">
        <p id="footer_text">A website that provides information <br>about different species of animals <br>namely Birds, Mammals and Endangered <br> species.</p>
        <div class="icon_box">
          <a href="https://www.facebook.com/" target="_blank"><img src="images/icons/facebook.png" alt="facebook" class="icons"></a>
        </div>
        <div class="icon_box">
          <a href="https://twitter.com/" target="_blank"><img src="images/icons/twitter.png" alt="facebook" class="icons"></a>
        </div>
        <div class="icon_box">
          <a href="https://www.instagram.com/" target="_blank"><img src="images/icons/instagram.png" alt="facebook" class="icons"></a>
        </div>
        <div class="icon_box">
          <a href="https://www.youtube.com/" target="_blank"><img src="images/icons/youtube.png" alt="facebook" class="icons"></a>
        </div>
        <nav>
          <ul id="navigation_footer">
              <li><a href="index.php" class="homepage">HOME</a></li>
              <li><a href="about us.html">ABOUT US</a></li>
              <li><a href="animals.html">ANIMALS</a></li>
              <li><a href="">LOGIN/SIGNUP</a></li>
          </ul>
      </nav>
      <img src="images/content/home/footer.jpg" alt="panda cub" id="footer_image">
      <hr id="line">
      <p id="made_by">Wildlife Species Information Website Made By Shashank</p>
      <p id="copyright">Copyright &copy; 2023. All rights reserved.</p>
      </footer>
</body>
</html>