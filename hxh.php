<?php
$banner = "images/hxh/banner.jpg ";
$hxh01 = "images/hxh/hxh01.gif";
$hxh02 = "images/hxh/hxh02.jpg";
$hxh03 = "images/hxh/hxh03.gif";
$hxh04 = "images/hxh/hxh04.jpg";
$hxh05 = "images/hxh/hxh05.jpg";
$hxh06 = "images/hxh/hxh06.jpg";
$hxh07 = "images/hxh/hxh07.png";
$hxh08 = "images/hxh/hxh08.gif";
$hxh09 = "images/hxh/hxh09.jpg";
$hxh10 = "images/hxh/hxh10.gif";
$hxh11 = "images/hxh/hxh11.gif";
$hxh12 = "images/hxh/hxh12.jpg";
$hxh13 = "images/hxh/hxh13.gif";
$hxh14 = "images/hxh/hxh14.gif";
$hxh15 = "images/hxh/hxh15.jpg";
$Logo = "images/RealLogo.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=[device-width], initial-scale=1.0" />
    <title>One Piece</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="script/style1.css" />

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>
  </head>

  <body>
    
    <!------ HEADER ------->

    <section class="header1">
      <nav>

        <!---<video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>--->
        <img class="background-video" src="<?php echo $banner; ?>"style="height: 25%;"/>
        <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

          <ul>
            <li><a href="main.php"><?php echo "HOME"?></a></li>
            <li><a href="about.php"><?php echo "ABOUT"?></a></li>
            <li><a href="blog.php"><?php echo "BLOG"?></a></li>
            <li><a href="contact.php"><?php echo "CONTACT"?></a></li>
          <li class="dropdown"><a><span><?php echo "MENU"?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="naruto.php"><?php echo "NARUTO"?></a></li>
              <li><a class="nav-link scrollto" href="op.php"><?php echo "ONE PIECE"?></a></li>
              <li><a class="nav-link scrollto" href="ds.php"><?php echo "DEMON SLAYER"?></a></li>
              <li><a class="nav-link scrollto" href="bleach.php"><?php echo "BLEACH"?></a></li>
              <li><a class="nav-link scrollto" href="#"><?php echo "HUNTER X HUNTER"?></a></li>
              <li><a class="nav-link scrollto" href="dragonBall.php"><?php echo "DRAGON BALL"?></a></li>
              <li><a class="nav-link scrollto" href="blueLock.php"><?php echo "Blue Lock"?></a></li>
              <li><a class="nav-link scrollto" href="lookism.php"><?php echo "Lookism"?></a></li>
              <li><a class="nav-link scrollto" href="index.php"><?php echo "LOGOUT"?></a></li>
            </ul>
          </li>
          </ul>
          
        </div>
        <i class="nav-icons fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1 style="text-align: center; padding-top: 40px">Hunter X Hunter Photo gallery</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $hxh01; ?>">
      <img src="<?php echo $hxh02; ?>">
      <img src="<?php echo $hxh03; ?>">
      <img src="<?php echo $hxh04; ?>">
      <img src="<?php echo $hxh05; ?>">
      <img src="<?php echo $hxh06; ?>">
      <img src="<?php echo $hxh07; ?>">
      <img src="<?php echo $hxh08; ?>">
      <img src="<?php echo $hxh09; ?>">
      <img src="<?php echo $hxh10; ?>">
      <img src="<?php echo $hxh11; ?>">
      <img src="<?php echo $hxh12; ?>">
      <img src="<?php echo $hxh13; ?>">
      <img src="<?php echo $hxh14; ?>">
      <img src="<?php echo $hxh15; ?>">
    </div>

    <!-- CTA -->
    <section class="cta">
      <h1 style="color: black">
      <?php echo "IF I GET REINCARNATED...<br />I WANNA BECOME A CLAM"?>
      </h1>
      <a href="#" class="hero-btn1"><?php echo "HOME"?></a>
    </section>

    <!-----FOOTER----->
    <section class="footer">
      <h4><?php echo "About Us"?></h4>
      <p>
      <?php echo 
        "Welcome to the AnimeWorld website! We are dedicated to providing 
        fans with the latest news, updates, and in-depth information about the 
        incredible world of anime. <br>Our passionate team of fans is committed 
        to creating a vibrant community where fans can connect, engage, and 
        celebrate the adventures of our favorite anime.
        <br>
        Contact Us:<br>
        Email: info@animeworldwebsite.com<br>
        Phone: +63-XXX-XXXX-XXX <br>"?>
      </p>
      <div class="icons">
      <a href="https://web.facebook.com/animeworld48/?__tn__=%2Cd"><i class="icons-items fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/animewld"><i class="icons-items fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/worlds_anime/?hl=en"><i class="icons-items fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC30v7rrMg6luaF0h8aaoX4Q"><i class="icons-items fab fa-youtube"></i></a>
      </div>
      
    </section>

    <script src="index.js"></script>
  </body>
</html>