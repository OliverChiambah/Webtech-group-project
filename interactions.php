<?php
session_start();
require("checklogin.php");
$user_data = check_login($con);
//connect to database class
include_once (dirname(__FILE__)) . '/./controllers/post_controller.php';

$posts = getPosts();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/post_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
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

    <body>
        <div class="container container-custom">
            <h1>Welcome!</h1>
            <?php // Get all posts from database
            //echo("how are you");
            // $comments_query_result = mysqli_query($db, "SELECT * FROM posts  ORDER BY created_at DESC");
            // $comments_query_result->fetch_all(MYSQLI_ASSOC);


            ?>

            <h6>Share your thoughts with other members of Ashesi community</h6>
            <form method="POST" action="./functions/post_create.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Post Title</label>
                    <input type="text" name="title" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Post Body</label>
                    <textarea class="form-control" name="body" id="" cols="30" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn1 btn-primary" name="submit">Submit</button>
            </form>

            <div>
                <h3 class="mt-5">Posts</h3>
                <ul class="list-group">
                    <?php
                    foreach ($posts as $key => $value) {
                    ?>
                        <li class="list-group-item"> <?= $value['title'] ?>
                            <a href="./functions/post_delete.php?id=<?= $value['id'] ?>" style="color: red;" class="btn btn-danger btn-custom" onclick="return confirm('Are you sure you want to delete this post?')"> Delete</a>
                            <a href="./view/post_update.php?id=<?= $value['id'] ?>" style="color: blue;" class="btn btn-secondary btn-custom"> Update</a>
                            <a href="./view/post.php?id=<?= $value['id'] ?>" style="color: green;" class="btn btn-primary btn-custom">View</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

            </div>
        </div>
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

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>

</html>