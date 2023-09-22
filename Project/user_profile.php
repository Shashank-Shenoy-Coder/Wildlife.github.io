<?php
session_start();
include 'configure.php';

if ( !isset($_POST['first_name'], $_POST['password_text']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
if(!empty($_POST['first_name'])&&!empty($_POST['login_email'])&&!empty($_POST['password_text']))
{
  $stmt2 = $conn->prepare('SELECT email,password FROM users WHERE first_name = ?');
  $stmt2->bind_param('s', $_POST['first_name']);
  $stmt2->execute();
  $stmt2->store_result();
  if ($stmt2->num_rows > 0) {
    $stmt2->bind_result($email,$password);
    $stmt2->fetch();
  }
  $pass = md5($_POST['password_text']);
  if(($email == $_POST['login_email'])&&($password == $pass))
  {
    echo "<script>alert('Login Successful')</script>";
  if ($stmt = $conn->prepare('SELECT first_name,last_name,gender,phone_number,password FROM users WHERE email = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['login_email']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
  
    if ($stmt->num_rows > 0) {
      $stmt->bind_result($first_name, $last_name,$gender,$phone_number,$password);
      $stmt->fetch();
      // Account exists, now we verify the password.
      // Note: remember to use password_hash in your registration file to store the hashed passwords.
        // Verification success! User has logged-in!
        // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['first_name'];
        $_SESSION['last_name'] = $last_name;
    } else {
      // Incorrect username
      echo 'Incorrect username and/or password!';
    }
  
    $stmt->close();
  }
}
else
{
  echo "<script>alert('Please recheck if you have filled all details properly')
  window.location.href='login.php'</script>";
}
  }
  else
{
  echo "<script>alert('Login Unsuccessful, Please fill all the details')
  window.location.href='login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Species</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/profile.css">
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
            <h2>Welcome to Profile</h2>
            <br>
            <?php
            echo '<h3 id=\'welcome\'><br> <br>First Name:<br>' . $_SESSION['name'] .'<br><br>Last Name:<br> '. $_SESSION['last_name'].'<br><br>Gender:<br> '.$gender.'<br><br>Phone Number:<br>'.$phone_number.'</h3><br>';
          //   $sql = "SELECT first_name,last_name FROM users where id='$uid'";
          //   $result = $conn->query($sql);
          //   if($result->num_rows > 0)
          //   {
          //     while($row = $result->fetch_assoc()) {
          //     echo "<h1 id=\"first_name\">First Name :</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["first_name"]."<br><h1 id=\"last_name\">Last Name :</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["last_name"]."<br>";
          //   }
          // }
          //   else
          //   {
          //     echo "0 results";
          //   }
            ?>
            <button id="logout"><a href="logout.php">Logout</a></button>
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