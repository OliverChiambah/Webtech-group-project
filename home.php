<?php
session_start();
require("checklogin.php");
$user_data = check_login($con);


?>


<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Ashesi Studen Council</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- top -->
   <!-- header -->
   <header class="header-area">
      <div class="container">
         <div class="row d_flex">
            <div class="col-sm-3 logo_sm">
               <div class="logo">
                  <a href="home.php"></a>
               </div>
            </div>
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
               <div class="navbar-area">
                  <nav class="site-navbar">
                     <ul>
                        <li><a class="active" href="home.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="distcenters.php" class="logo_midle">Committees</a></li>
                        <li><a href="./program.php">Events</a></li>
                        <li><a href="./bot/bot.php"> Live chat </a></li>
                        <li><a href="interactions.php">Share your thoughts</a></li>
                     </ul>
                     <button class="nav-toggler">
                        <span></span>
                     </button>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header -->
   <div class="full_bg">
      <!-- header inner -->
      <div class="section">
         <!-- carousel code -->
         <div id="banner1" class="carousel slide slider_main">
            <ol class="carousel-indicators ">
               <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
               <li data-target="#banner1" data-slide-to="1" class="">02</li>
               <li data-target="#banner1" data-slide-to="2" class="active">03</li>
            </ol>
            <div class="carousel-inner">
               <!-- first slide -->
               <div class="carousel-item active">
                  <div class="carousel-caption cuplle">
                     <div class="photog">
                        <img src="images/chair dance.jpg" alt="#">
                     </div>
                  </div>
               </div>
               <!-- second slide -->
               <div class="carousel-item">
                  <div class="carousel-caption cuplle">
                     <div class="photog">
                        <img src="images/ubora.jpg" alt="#">
                     </div>
                  </div>
               </div>
               <!-- third slide -->
               <div class="carousel-item">
                  <div class="carousel-caption cuplle">
                     <div class="photog">
                        <img src="images/fun.jpg" alt="#">
                     </div>
                  </div>
               </div>
            </div>
            <!-- controls -->
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container_width">
         <div class="row d_flex">
            <div class="col-md-7">
               <div class="titlepage text_align_left">
                  <h2>About Ashesi Student Council</h2>
                  <p>Since our founding in 2002, Ashesi has established a reputation as a leader in undergraduate
                     education in Africa, with an educational experience that fosters ethical leadership, an
                     entrepreneurial mindset and the ability to solve complex problems. These qualities are what set
                     Ashesi students and alumni apart. Across various industries today, Ashesi graduates are highly
                     sought, and over 90% have stayed to work for progress in Africa.
                  </p>
                  <a class="read_more" href="about.html">Read More</a>
               </div>
            </div>
            <div class="col-md-5">
               <div class="about_img text_align_center">
                  <figure><img src="images/ASC1.png" alt="#" /></figure>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- start ASC leadership -->
   <div class="form-box">
      <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2> Meet the Asc leadership</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-6">
                  <div id="ho_efcet" class="reader text_align_center">
                     <i><img src="images/doctor1.png" alt="#" /></i>
                     <h3>Tobias Woode <br> ASC President</h3>
                     <p>We are assuming that some patients with COVID-19 will have minimal symptoms or might not have
                        symptoms and that they can infect other individuals that might be at higher risks for poor
                        outcomes. By slowing the spread of COVID-19, they help their providers be able to provide the
                        appropriate care because not everybody will come at once to the hospital.</p>
                     <span><img src="images/do.png" alt="#" /></span>
                  </div>
               </div>
               <div class=" col-md-6">
                  <div id="ho_efcet" class="reader text_align_center">
                     <i><img src="images/doctor2.png" alt="#" /></i>
                     <h3>John Ayomah <br> ASC Vice Prsident</h3>
                     <p>Keeping your hands clean is essential because of how often people touch their faces or rub their
                        eyes, giving virus particles their pathway into the body. It’s in our hands. ... You have the
                        dynamics of the virus which, if left to its own devices, will keep resurging. The only way to
                        stop
                        it is what we do as a countermeasure. It can be done.</p>
                     <span><img src="images/do.png" alt="#" /></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end ASC leadership -->

   <!-- Committees -->
   <div class="form-box">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
                  <h2>ASC Committee Chairpersons</h2>
                  <p>Esther, a third year Business Administration Student is a member of a long and colourful list of
                     young ladies from Wesley Girl’s High School who have made Ashesi University College their home. At
                     Wesley Girl’s she served as a House Prefect, and subsequently extended those leadership qualities
                     to Ashesi, where she served for a year on the Welfare Committee.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="protect_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro1.png" alt="#" /></i>
                              <h3> Accademic Committee</h3>
                              <span> Esther, a third year Business Administration Student is a member of a long and
                                 colourful list of young ladies from Wesley Girl’s High School who have made Ashesi
                                 University College their home.</span>
                           </div>

                        </div>
                     </div>
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro2.png" alt="#" /></i>
                              <h3> Welfare Committee</h3>
                              <span> Esther, a third year Business Administration Student is a member of a long and
                                 colourful list of young ladies from Wesley Girl’s High School who have made Ashesi
                                 University College their home.</span>
                           </div>

                        </div>
                     </div>
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro3.png" alt="#" /></i>
                              <h3> Welfare Committee</h3>
                              <span> Esther, a third year Business Administration Student is a member of a long and
                                 colourful list of young ladies from Wesley Girl’s High School who have made Ashesi
                                 University College their home.</span>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end comittees -->


   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="hedingh3 text_align_left">
                     <h3>Resources</h3>
                     <ul class="menu_footer">
                        <li><a href="home.php">Home</a>
                        <li>
                        <li><a href="javascript:void(0)">What we do</a>
                        <li>
                        <li> <a href="javascript:void(0)">Media</a>
                        <li>
                        <li> <a href="javascript:void(0)">Travel Advice</a>
                        <li>
                        <li><a href="javascript:void(0)">Protection</a>
                        <li>
                        <li><a href="javascript:void(0)">Care</a>
                        <li>
                     </ul>


                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="hedingh3 text_align_left">
                     <h3>About</h3>
                     <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                        text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                     </p>
                  </div>
               </div>



               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="hedingh3  text_align_left">
                     <h3>Contact Us</h3>
                     <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Berekuso
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +233 1234567890
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : asc@gmail.com</a>
                        </li>
                     </ul>


                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="hedingh3 text_align_left">
                     <h3>countries</h3>
                     <div class="map">
                        <img src="images/map.png" alt="#" />
                     </div>
                  </div>
               </div>

            </div>
         </div>

      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>