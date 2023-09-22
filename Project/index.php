<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Species</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@600&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@600&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@600&family=Shadows+Into+Light+Two&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Noto+Sans+JP&family=Poppins:wght@100;200;300;400;600;700&family=Raleway:wght@600&family=Shadows+Into+Light+Two&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    
    <header id="banner">
        <figure id="banner_elements">
            <img src="images/logo/Logo_banner.jpg" alt="Wildlife Wonders" id="logo">
            <img src="images/logo/Slogan.png" alt="Caring, Loving and Understanding Animals" id="slogan">
        </figure>

        <nav>
            <ul id="navigation">
                <li><a href="" class="homepage">HOME</a></li>
                <li>
                    <a href="about us.html">ABOUT US</a>
                </li>
                <li><a href="animals.html">ANIMALS</a></li>
                <li><a href="registration.php">LOGIN/SIGNUP</a></li>
            </ul>
        </nav>
    </header>

    <div class="carousel-container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
      
            <div class="item active">
              <img src="images/background/animal1.jpg" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3 id="first_slide">Discover Wildlife</h3>
                <p id="first_slide_p">Explore the Beauty of Nature</p>
              </div>
            </div>
      
            <div class="item">
              <img src="images/background/bird1.jpg" alt="Chicago" style="width:100%;">
              <div class="carousel-caption">
                <h3 id="second_slide">Protect Habitats</h3>
                <p id="second_slide_p">Preserve Biodiversity for Future Generations</p>
              </div>
            </div>
          
            <div class="item">
              <img src="images/background/animal4.jpg" alt="New York" style="width:100%;">
              <div class="carousel-caption">
                <h3 id="third_slide">Support Conservation</h3>
                <p id="third_slide_p">Join Hands to Save Our Wildlife</p>
              </div>
            </div>
        
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div id="container1_content">
        <p id="container1_content_heading">STANDING TOGETHER FOR A BETTER WORLD</p>
        <h1 id="container1_content_sub_heading">What Inspires Us to Do This?</h1>
        <p id="container1_content_text">
          <img src="images/content/home/container1_content.jpg" alt="Turtle" width="500px" height="600px" id="container1_content_image">
          The website will give an insight into the different species of animals that are present <br>and the different iconic species like tigers, rhinos and whales. <br> It will also make us aware about the different species that are endangered <br>and what are the steps that we can take in order to help the species to thrive. <br> <br><strong>It is clear: We cannot afford to fail in our mission to save a living planet.</strong>
        </p>
        <button id="container1_content_button" onclick="redirect()">LEARN MORE</button>
      </div>

      <div id="container2_content">
        <h1 id="container2_content_heading2"><span id="container2_content_heading1">W</span>ho we are?</h1>
        <p id="container2_content_sub_heading">Our Impact</p>
        <p id="container2_content_text">
          <img src="images/content/home/container2_content.jpg" alt="People" width="500px" height="400px" id="container2_content_image">
          We provide the details about the various species of animals <br>that are available throughout the world. We also give <br>information about the various species that are thriving, <br>those who are in endangered list and extinct species <br> so that you can take the necessary steps to save the species <br>We provide you with an in depth information of all the different <br>animal species that are available which is a wonderful sight <br>for an animal enthusiast.</strong>
        </p>
        <button id="container2_content_button" onclick="redirect()">KNOW MORE</button>
      </div>

      <div id="container3_content">
        <h1>Different Species Available</h1>
        <button id="container3_content_button" onclick="redirect2()">KNOW MORE</button>
        <div id="container3_content_card1">
          <h3><a href="animals.html#birds">BIRDS</a></h3>
        </div>
        <div id="container3_content_card2">
          <h3><a href="animals.html#mammals_nav">MAMMALS</a></h3>
        </div>
        <div id="container3_content_card3">
          <h3><a href="animals.html#endangered_nav">ENDANGERED <br>SPECIES</a></h3>
        </div>
      </div>

      <footer id="footer">
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
              <li><a href="registration.php">LOGIN/SIGNUP</a></li>
          </ul>
      </nav>
      <img src="images/content/home/footer.jpg" alt="panda cub" id="footer_image">
      <hr id="line">
      <p id="made_by">Wildlife Species Information Website Made By Shashank</p>
      <p id="copyright">Copyright &copy; 2023. All rights reserved.</p>
      </footer>

      <script>
        function redirect()
        {
          window.location.href="about us.html";
        }
        function redirect2()
        {
          window.location.href="animals.html";
        }
      </script>
</body>
</html>