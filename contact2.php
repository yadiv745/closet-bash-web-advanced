<?php
session_start();

if( isset( $_SESSION['valid'] ) ) {
   if( $_SESSION['valid'] !== TRUE )
      header( "Location: ./index.php" );
}
else
   header( "Location: ./index.php" );

require_once "includes/db.php";

// $filepath = select( "path", "file", "username", $_SESSION['username'] );
// $filename = select( "name", "file", "username", $_SESSION['username'] );
$username = select( "username", "user", "username", $_SESSION['username'] );

$links = get_all_file_links_for( $_SESSION['username'] );
$amount_of_links = count( $links );
?>





<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Closet Bash: Contact</title>

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.min.css'>

   <link rel="stylesheet" href="css/style-contact2.css">

</head>

<body>


  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
      <div class="title1">
                     <button class="button2" type="submit"><a href="blog-page3.php" target="_blank">Checkout>></a></button>
                  <p>Street Looks</p>
        </div>
            </div>
    <div class="item">
          <div class="title4">
                  <a href="blog.php" target="_blank"><p>Tips: How to <br>shoot your pictures</p></a>
          </div>
<!--           <button class="button3" type="submit"><a href="http://www.globo.com/" target="_blank">Checkout>></a></button>
 -->         </div>
    <div class="item">
          <div class="title5">
          <button class="button3" type="submit"><a href="blog-page3.php" target="_blank">View Looks>></a></button>
    </div>
    </div>
  </div>


<!-- Nav bar -->

      <header>
         <div class="wrapper">
         <a href="home2.php">
            <img src="img/logo7.png" alt="Bash" width="305px" height="231px" class="logo">
            </a>
            <nav id="nav_menu">
               <ul>
                  <li><a href="home2.php">Create</a></li>
                  <li><a href="outfit.php">Outfits</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="contact2.php">Contact</a></li>
               </ul>
            </nav>

        <form method="get" action="" class="login-emailpassword">
       <a href="./logout.php"><input class="button1" value="logout"></a>
  </form>
      </header>


            <!-- We love hearing about you -->

     <section class="features">
         <div class="wrapper">
            <div class="feature">
               <div class="title-section">
                  <p>We love hearing from you</p>
               </div>
               <div class="about-text">
               <p>Your feedback is also important! <br>Tell us about your experience. Have questions about <br>your order, exchanges or returns? Fill out the form<br> below and we will contact you soon.</p>
            </div>
         </div>
               <!-- Contact Form -->

      <form method="get" action = "">
      <div class="contact-form-name">
        <input type="text" name="Name" placeholder="Name*"><br>
        </div>
        <div class="contact-form-e-mail">
        <input type="text" name="Email" placeholder="E-mail*"><br>
        </div>
        <div class="contact-form-message">
        <textarea rows="4" cols="50" type="text" name="Message" placeholder="Your Message*"></textarea>
        </div>
      </form>
              <button class="button4" type="submit"> Send</button>

      </section>
</div>


            <!-- What people say about us -->

 <section class="features2">
         <div class="wrapper">
            <div class="feature2">
               <div class="title-section2">
                  <p>Partner Up With Us</p>
               </div>
               <div class="comment1">
                  <p>Ready to feature your brand on Closet Bash?<br>E-mail our partnership team and they will contact you.</p>
               </div>
               <div class="email-partnership">
               <a href="mailto:partners@closetbash.com?Subject=Partnership"><p>partners@closetbash.com</p></a>
               </div>
               <div class="icone-msg">
               <img src="img/msg-icon.png" width="75px" height="75px">
            </div>
         </div>
         <!-- triangulo branco -->
<div class="triangulo-branco">
   <img src="img/triangulo-branco.png" class="triangulo" alt="Bash" width="60px" height="60px">
</div>
      </section>

     <!-- We partner with the best brands -->

     <section class="features3">
         <div class="wrapper">
            <div class="feature3">
               <div class="title-section3">
                  <p>We partner with the best brands </p>
               </div>
               <div class="brands-row1">
                  <img class="brand1"src="img/brand1.png" alt=""  width="230px" height="150px">
                  <img class="brand2" src="img/brand2.png" alt="" width="230px" height="150px">
                  <img class="brand3" src="img/brand3.png" alt=""  width="230px" height="150px">
                  <img class="brand4" src="img/brand4.png" alt="" width="230px" height="150px">
                  <img class="brand5" src="img/brand5.png" alt=""  width="230px" height="150px">
               </div>
            </div>
         </div>
      </section>



<!-- Footer Find Us Social Media -->

  <section class="features4">
            <div class="feature4">
               <div class="title-section4">
                  <p>Connect with us</p>
               </div>
         </div>
                  <a href ="https://www.facebook.com/"><img class="facebook"src="img/facebook.png" alt=""></a>
                  <a href="https://twitter.com/?lang=en"><img class="twitter" src="img/twitter.png" alt=""></a>
                   <a href="https://vimeo.com/"><img class="vimeo" src="img/vimeo.png" alt=""></a>
      </section>


<!-- Footer -->

  <section class="features5">
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
        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.js'></script>

         <script src="js/index.js"></script>



</body>
</html>
