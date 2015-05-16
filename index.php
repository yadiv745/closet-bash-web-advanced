<?php
session_start();

if( isset( $_SESSION["valid"] ) )
   if( 1 == $_SESSION["valid"] )
      header( "Location: home2.php" );

if( !isset( $_GET['action'] ) ) {
   $_GET['action'] = "register";
   header( "Location: ./index.php?action=". $_GET['action'] );
}

include "includes/main.php";

if( isset( $_GET['action'] ) )
   if( "login" == $_GET['action'] ) {
      $action_value = "login.php";
      $subheading = $button_value = "Login";
   }
   else
      if( "register" == $_GET['action'] ) {
         $action_value = "register.php";
         $subheading = $button_value = "Register";
      }
?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Closet Bash</title>

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.min.css'>

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>


  <!-- Carousel items -->
  <div class="carousel-inner">
      <div class="active item">
          <div class="title1">
              <p>Street</p>
          </div>
      <div class="title2">
                <p>Looks </p>
          </div>
        <button class="button2" type="submit"><a href="http://www.globo.com/" target="_blank">Checkout>></a></button>
            </div>
    <div class="item">
    <div class="title3">
                  <p>Ladies</p>
        </div>
        <div class="title4">
                  <p>Trending </p>
          </div>
          <button class="button3" type="submit"><a href="http://www.globo.com/" target="_blank">Checkout>></a></button>
         </div>
    <div class="item">
          <div class="title3">
                  <p>Everyday</p>
          </div>
          <div class="title4">
                  <p>Essentials</p>
          </div>
          <button class="button3" type="submit"><a href="http://www.globo.com/" target="_blank">Checkout>></a></button>
    </div>
  </div>
</div>


 <!-- Nav bar -->

    <header>
         <div class="wrapper">
            <a href="index.php">
                <img src="img/logo7.png" alt="Bash" width="305px" height="231px" class="logo">
            </a>
          <nav id="nav_menu">
              <ul>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="#">Login</a></li>
               </ul>
          </nav>


            <!-- Login form -->

      <form action="<?php echo $action_value; ?>" method="post">
         <input class="email" type="text" name="username" placeholder="E-mail" required autofocus>
         <input class="password" type="password" name="password" placeholder="Password" required>
         <input type="hidden" name="submitted" value="1">
         <input type="submit" class="button1" value="<?php echo $button_value; ?>"><a href="./index.php?action=register"></a>
    </form>
    </header>


      <!-- We partner with the best brands -->

     <section class="features">
         <div class="wrapper">
            <div class="feature">
               <div class="title-section">
                  <p>We partner with the best brands </p>
               </div>
               <div class="brands-row1">
                  <img src="img/brand1.png" alt="">
                  <img class="brand2" src="img/brand2.png" alt="">
                  <img class="brand3" src="img/brand3.png" alt="">
               </div>
               <div class="brands-row2">
                  <img class="brand4" src="img/brand4.png" alt="">
                  <img class="brand5" src="img/brand5.png" alt="">
               </div>
            </div>
         </div>
      </section>


<!-- Simple to use -->

   <section class="features2">
         <div class="wrapper">
            <div class="feature2">
               <div class="title-section2">
                  <p>Simple to use & create </p>
               </div>
               <div class="steps-row">
                  <img class="step1"src="img/step1.png" alt="">
                  <img class="step2" src="img/step2.png" alt="">
                   <img class="step3" src="img/step3.png" alt="">
                   <img class="step4" src="img/step4.png" alt="">
               </div>
               <div class="title-title-section2">
                  <p>1 | wardrobe</p>
               </div>
               <div class="title-title-section2-decription">
                  <p>Take pictures from<br>your closet. Upload<br>the photos to the<br>website to begin.</p>
               </div>
                <div class="title-title-section3">
                  <p>2 | combine</p>
               </div>
               <div class="title-title-section3-decription">
                  <p>Take pictures from<br>your closet. Upload<br>the photos to the<br>website to begin.</p>
               </div>
                 <div class="title-title-section4">
                  <p>3 | purchase</p>
               </div>
               <div class="title-title-section4-decription">
                  <p>Take pictures from<br>your closet. Upload<br>the photos to the<br>website to begin.</p>
               </div>
                 <div class="title-title-section5">
                  <p>4 | new looks</p>
               </div>
               <div class="title-title-section5-decription">
                  <p>Take pictures from<br>your closet. Upload<br>the photos to the<br>website to begin.</p>
               </div>
            </div>
         </div>
      </section>


            <!-- Sign Up Section -->

     <section class="features3">
         <div class="wrapper">
            <div class="feature3">
               <div class="title-section">
                  <p>Sign Up Now</p>
               </div>
         </div>
         </div>
      </section>



      <!-- Sign Up Now Form -->
          <form method="get" action = "">
      <div class="signup-login">
        <input type="text" name="FullName" placeholder="Full Name*"><br>
        <input type="text" name="E-mail" placeholder="E-mail*"><br>
        <input type="text" name="Password" placeholder="Password*"><br>
        <button class="button4" type="submit"> Join</button>
      </form>
    </div>


<!-- Footer Find Us Social Media -->

  <section class="features4">
         <div class="wrapper">
            <div class="feature4">
               <div class="title-section4">
                  <p>Connect with us</p>
               </div>
         </div>
                  <a href ="https://www.facebook.com/"><img class="facebook"src="img/facebook.png" alt=""></a>
                  <a href="https://twitter.com/?lang=en"><img class="twitter" src="img/twitter.png" alt=""></a>
                   <a href="https://vimeo.com/"><img class="vimeo" src="img/vimeo.png" alt=""></a>
               </div>
      </section>


<!-- Footer -->

  <section class="features5">
         <div class="wrapper">
            <div class="feature5">
               <div class="title-section5">
                  <p>©  2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-  A l l  R i g h t s  R e s e r v e d</p>
               </div>
               </div>
                 <div class="feature6">
               <div class="title-section6">
               <p>Closet Bash</p>
               </div>
         </div>
      </section>


  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.js'></script>

  <script src="js/index.js"></script>

</body>

</html>
