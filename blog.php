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

  <title>Closet Bash: Blog</title>

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.min.css'>

   <link rel="stylesheet" href="css/style-blog.css">

   <script src="js/prefixfree.min.js"></script>

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
                 <a href="blog.php" target="_blank"> <p>Tips: How to <br>shoot your pictures</p></a>
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

<!--post 1 -->

<div class="boxed">
<p>Trend Alert : Summer Essentials</p>
  <div class="post-1-img">
  </div>
  <div class="post-1-text">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  </div>


  <div id="heart">
      <i></i>
      <div class="text-like">
            <span>L I K E D !</span>
      </div>
  </div>
    <div id="bt-facebook">
<div class="share-block">
            <a href="javascript:void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=index.php&amp;t=The title goes here','tdFBShare','status=0,resizable=1,height=400,width=600');"><img src="bt-facebook.png"></a>
      </div>
      </div>
  </div>


<!--post 2 -->

<div class="boxed-2">
<p>How-To : Take photos of your shoes</p>
  <div class="post-2-img">
  </div>
  <div class="post-2-text">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  </div>

  <div id="heart">
      <i></i>
      <div class="text-like">
            <span>L I K E D !</span>
      </div>
  </div>

    <div id="bt-facebook">
<div class="share-block">
            <a href="javascript:void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=index.php&amp;t=The title goes here','tdFBShare','status=0,resizable=1,height=400,width=600');"><img src="bt-facebook.png"></a>
      </div>
      </div>
  </div>


<!--post 3 -->

<div class="boxed-3">
<p>Trend Alert : Cozy & Confy</p>
  <div class="post-3-img">
  </div>
  <div class="post-3-text">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  </div>

  <div id="heart">
      <i></i>
      <div class="text-like">
            <span>L I K E D !</span>
      </div>
  </div>

    <div id="bt-facebook">
<div class="share-block">
            <a href="javascript:void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=index.php&amp;t=The title goes here','tdFBShare','status=0,resizable=1,height=400,width=600');"><img src="bt-facebook.png"></a>
      </div>
      </div>
  </div>


<!--post 4 -->

<div class="boxed-4">
<p>How-To : Photograph your pants</p>
  <div class="post-4-img">
  </div>
  <div class="post-4-text">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  </div>

  <div id="heart">
      <i></i>
      <div class="text-like">
            <span>L I K E D !</span>
      </div>
  </div>

    <div id="bt-facebook">
<div class="share-block">
            <a href="javascript:void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=index.php&amp;t=The title goes here','tdFBShare','status=0,resizable=1,height=400,width=600');"><img src="bt-facebook.png"></a>
      </div>
      </div>
  </div>


<!-- Paginação -->

<ul class="nav-paginacao">
    <li><a href="#">&lt;</a></li>
    <li  class="is-active"><a href="blog.php">1</a></li>
    <li><a href="blog-page2.php">2</a></li>
    <li><a href="blog-page3.php">3</a></li>
    <li><a href="#">&gt;</a></li>
</ul>


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

     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script src="js/index-heart.js"></script>


        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.js'></script>

         <script src="js/index.js"></script>
         <script src="js/index-mini-carousel.js"></script>



</body>
</html>
