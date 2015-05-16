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

  <title>Closet Bash: Outfits</title>

  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.min.css'>

   <link rel="stylesheet" href="css/style-outfit.css">

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
       </div>
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

<!--canvas-->
        <div id="canvas1">
           <a href="http://us.topshop.com/"><canvas class="canvas1-box" width="1020" height="1230"></canvas></a>
          </div>



 <!-- Paginação -->

<ul class="nav-paginacao">
    <li><a href="#">&lt;</a></li>
    <li  class="is-active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">&gt;</a></li>
</ul>



   <div class="title-section-mini">
                  <p>We Recommend</p>
               </div>

<div id="carouselmini">
  <div id="carouselmini-wrapper">
    <ul id="carouselmini-items" >
      <li ><img src="img/suggest-clothes-01.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-02.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-03.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-04.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-05.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-06.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-07.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-08.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-09.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-10.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-11.jpg" width="70px" height="100px"></li>
      <li><img src="img/suggest-clothes-12.jpg" width="70px" height="100px"></li>
    </ul>
  </div>
  <div id="carouselmini-nav">
    <a href="#" id="carouselmini-prev"><img src="img/arrpw-left.png"></a>
    <a href="#" id="carouselmini-next"><img src="img/arrpw-right.png"></a>
  </div>
</div>



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
         <script src="js/index-mini-carousel.js"></script>



</body>
</html>
