<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CivicLink</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

        <link href="assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

        <link href="assets/css/theme.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide body-light multipage">

        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Wrap all content -->
        <div class="wrapper">
           <!-- HEADER -->
            <header class="header fixed">

                <!-- Top Line -->
                <div class="top-line">

<?php

$conn = pg_connect(getenv("DATABASE_URL"));

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $qry = "INSERT INTO events (name, begintime, endtime, location, price, description) VALUES (
  '".$_POST['name']."',
  '".trim(preg_replace('/\s+/',' ',$_POST['begin']))."', 
  '".trim(preg_replace('/\s+/',' ',$_POST['end']))."',
  '".$_POST['location']."', 
  '".$_POST['price']."',
  '".$_POST['description']."');";
  echo $qry;
  $res = pg_query($conn, $qry) or die('Query failed: ' . pg_last_error());
  echo pg_result_error($res);
}
// Closing connection
pg_close($conn);

?>

                    <div class="container">
                        <ul class="user-menu">
                            <li><a href="#popup-login"  data-toggle="modal"><i class="fa fa-file-text-o"></i> Register Now</a></li>
                            <li><a href="#popup-login" data-toggle="modal"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                        <div class="hot-line"><span><i class="fa fa-calendar"></i> <strong>GO VOTE!</strong></span>  Find Out  <a href = "https://www.vote.org/polling-place-locator/">Where</a></div>
                    </div>
                </div>
                <!-- /Top Line -->

                <div class="container">
                    <div class="header-wrapper clearfix">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" class="scroll-to">
                                <span class="fa-stack">
                                    <i class="fa logo-hex fa-stack-2x"></i>
                                    <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                                </span>
                                CivicLink
                            </a>
                        </div>
                        <!-- /Logo -->

                        <!-- Navigation -->
                        <div id="mobile-menu"></div>
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                            <ul class="sf-menu nav">
                                <li class="navigation closed clearfix">
                                    <a href="index.html">Home</a>
<!--
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="#">sub 1</a>
                                                    <ul>
                                                        <li><a href="#">sub 3</a></li>
                                                        <li><a href="#">sub 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">sub 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
-->
                                </li>
                                <li  class="navigation closed clearfix">
                                    <a href="event-grid.html">Events</a>
<!--
                                    <ul>
                                        <li><a href="event-list.html">Event List</a></li>
                                        <li><a href="event-grid.html">Event Grid</a></li>
                                        <li><a href="event-single.html">Single Event</a></li>
                                    </ul>
-->
                                </li>
<!--
                                <li>
                                    <a href="gallery-col-4.html">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-col-2.html">Gallery Col 2</a></li>
                                        <li><a href="gallery-col-3.html">Gallery Col 3</a></li>
                                        <li><a href="gallery-col-4.html">Gallery Col 4</a></li>
                                    </ul>
                                </li>
-->
<!--
                                <li>
                                    <a href="blog.html">Pages</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="search-results.html">Search Results</a></li>
                                        <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                        <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                        <li><a href="coming-soon-3.html">Coming Soon 3</a></li>
                                        <li><a href="error-page.html">404</a></li>
                                    </ul>
                                </li>
-->
<!--                                <li><a href="contact-us.html">The Team</a></li>-->
                                <li class="header-search-wrapper">
                                    <form action="#" class="header-search-form">
                                        <input type="text" class="form-control header-search" placeholder="Search"/>
                                        <input type="submit" hidden="hidden"/>
                                    </form>
                                </li>
                                <li><a href="#" class="btn-search-toggle"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" class="btn btn-theme btn-submit-event">SUBMIT EVENT <i class="fa fa-plus-circle"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->

                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- Content area -->
            <div class="content-area">

                <div id="main">
                    <!-- SLIDER -->
                    <section class="page-section no-padding background-img-slider">
                        <div class="container">

                            <div id="main-slider" class="owl-carousel owl-theme">
                                <!-- Slide -->
                                <div class="item page text-center slide5">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <p class="text-center avatar"><img src="assets/img/preview/slider-4-avatar.png" style="width: auto;" alt=""/></p>
                                                    <h2 data-animation="fadeInDown" data-animation-delay="100"><span>10 November at 15:00 - 17:00 | Park Ave Congregational Church</span></h2>
                                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300">Listening Across the Political Divide</h3>
<!--
                                                    <div class="countdown-wrapper">
                                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                                    </div>
-->
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme btn-theme scroll-to" href="#" data-animation="flipInY" data-animation-delay="600">Find Your Squad</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="item page text-center slide4">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <h3 class="caption-subtitle">get linked</h3>
                                                    <h4><span>Find <a href="#">City Councils</a>,<a href="#">Town Halls</a>, <a href="#">Historic Preservation Meetings</a>, <a href="#">Legislative Summits</a>, <a href="#">Immigration Policy Forums</a>, <a href="#">Planning Boards</a> and more</span></h4>
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <form action="#" class="location-search">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control text" placeholder="FIND OPPORTUNITIES"/>
                                                                        <select class="selectpicker">
                                                                            <option>MA City</option>
                                                                            <option>Cambridge</option>
                                                                            <option>Lynn</option>
                                                                            <option>Somerville</option>
                                                                            <option>Waltham</option><option>Wellsely</option>

                                                                        </select>
                                                                        <button class="form-control button-search"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <p class="caption-text">
<!--                                                        <a class="btn btn-theme btn-theme btn-theme-dark scroll-to" href="#" data-animation="flipInY" data-animation-delay="600">Popular Events</a>-->
                                                        <a class="btn btn-theme btn-theme btn-theme-transparent-white" href="http://www.youtube.com/watch?v=O-zpOMYRi0w"  rel="prettyPhoto" data-animation="flipInY" data-animation-delay="900">Newest Events</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                    <!-- /SLIDER -->
                </div>

                <!-- Featured Event -->
<!--
                <section class="page-section light featured-line xs-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="section-title two-lines">
                                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex dark fa-stack-2x"></i><i class="fa fa-calendar fa-stack-1x"></i></span></span>
                                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><span class="theme-color"> Featured Event </span><small>Dont Miss The Event. PHP Conference In ISTANBUL</small></span>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <div class="countdown-wrapper countdown-featured">
                                    <div id="defaultCountdown2" class="defaultCountdown clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="btn btn-theme btn-details">Tickets &amp; Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
-->
                <!-- /Featured Event -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">

                        <div class="clear clearfix overflowed">
                            <div class="section-title pull-left" style="width: auto;">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                            </div>
<!--
                            <ul id="filtrable-events" class="filtrable clearfix">
                                <li class="all"><a href="#" data-filter="*">All</a></li>
                                <li class="festival current"><a href="#" data-filter=".festival">Festival</a></li>
                                <li class="playground"><a href="#" data-filter=".playground">Playground</a></li>
                                <li class="conferance"><a href="#" data-filter=".conference">Conference</a></li>
                            </ul>
-->
                        </div>

                        <div class="row thumbnails events vertical isotope isotope-items">

                            <div class="col-md-6 col-sm-6 isotope-item festival">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Health  &amp; Environmental Committee Hearing</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 13 November at 15:00 - 17:00 | Cambridge, MA</p>
                                                <p class="caption-price">Open to Public</p>
                                                <p class="caption-text">City Hall
                                                    2nd Floor Sullivan Chamber
                                                    795 Massachusetts Ave.
                                                    Cambridge, MA 02139</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme"> details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item miscellaneous">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item festival playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item festival conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item conference playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item festival conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 isotope-item playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                <img src="assets/img/preview/event-1.jpg" alt="">
                                                <div class="caption hovered"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                <p class="caption-price">Tickets from $49,99</p>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center margin-top">
                            <a data-animation="fadeInUp" data-animation-delay="100" href="event-grid.html" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> See all events</a>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->


                <!-- PAGE -->
<!--
                <section class="page-section">
                    <div class="container">
-->
<!--
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-file-text-o fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Recent Blog Posts <small> / get news!</small></span>
                        </h1>
                        <div class="post-row">
                            <div class="carousel-slider">
                                <div class="owl-carousel slide-3">
-->
                                    <!-- -->
<!--
                                    <div>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                                            <div class="post-media">
                                                <div class="post-type">
                                                    <i class="fa fa-video-camera"></i>
                                                </div>
                                                <img src="assets/img/preview/recent-post-1.jpg" alt=""/>
                                            </div>
                                            <div class="post-header">
                                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                                <div class="post-meta">
                                                    <span class="post-date">
                                                        Posted on
                                                        <span class="day">17th</span>
                                                        <span class="month">May</span>
                                                        <span class="year">2015</span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-excerpt">
                                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                                </div>
                                            </div>
                                            <div class="post-footer"></div>
                                        </article>
                                    </div>
-->

                                    <!-- -->
<!--
                                    <div>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="300">
                                            <div class="post-media">
                                                <div class="post-type">
                                                    <i class="fa fa-photo"></i>
                                                </div>
                                                <img src="assets/img/preview/recent-post-2.jpg" alt=""/>
                                            </div>
                                            <div class="post-header">
                                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                                <div class="post-meta">
                                                    <span class="post-date">
                                                        Posted on
                                                        <span class="day">17th</span>
                                                        <span class="month">May</span>
                                                        <span class="year">2015</span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-excerpt">
                                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                                </div>
                                            </div>
                                            <div class="post-footer"></div>
                                        </article>
                                    </div>
-->

                                    <!-- -->
<!--
                                    <div>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">
                                            <div class="post-media">
                                                <div class="post-type">
                                                    <i class="fa fa-music"></i>
                                                </div>
                                                <img src="assets/img/preview/recent-post-3.jpg" alt=""/>
                                            </div>
                                            <div class="post-header">
                                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                                <div class="post-meta">
                                                    <span class="post-date">
                                                        Posted on
                                                        <span class="day">17th</span>
                                                        <span class="month">May</span>
                                                        <span class="year">2015</span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-excerpt">
                                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                                </div>
                                            </div>
                                            <div class="post-footer"></div>
                                        </article>
                                    </div>
-->

                                    <!-- -->
<!--
                                    <div>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">
                                            <div class="post-media">
                                                <div class="post-type">
                                                    <i class="fa fa-music"></i>
                                                </div>
                                                <img src="assets/img/preview/recent-post-1.jpg" alt=""/>
                                            </div>
                                            <div class="post-header">
                                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                                <div class="post-meta">
                                                    <span class="post-date">
                                                        Posted on
                                                        <span class="day">17th</span>
                                                        <span class="month">May</span>
                                                        <span class="year">2015</span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-excerpt">
                                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                                </div>
                                            </div>
                                            <div class="post-footer"></div>
                                        </article>
                                    </div>
-->

                                    <!-- -->
<!--
                                    <div>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">
                                            <div class="post-media">
                                                <div class="post-type">
                                                    <i class="fa fa-music"></i>
                                                </div>
                                                <img src="assets/img/preview/recent-post-2.jpg" alt=""/>
                                            </div>
                                            <div class="post-header">
                                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                                <div class="post-meta">
                                                    <span class="post-date">
                                                        Posted on
                                                        <span class="day">17th</span>
                                                        <span class="month">May</span>
                                                        <span class="year">2015</span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-excerpt">
                                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                                </div>
                                            </div>
                                            <div class="post-footer"></div>
                                        </article>
                                    </div>
-->

                                    <!-- -->
<!--
                                    <div>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">
                                            <div class="post-media">
                                                <div class="post-type">
                                                    <i class="fa fa-music"></i>
                                                </div>
                                                <img src="assets/img/preview/recent-post-3.jpg" alt=""/>
                                            </div>
                                            <div class="post-header">
                                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                                <div class="post-meta">
                                                    <span class="post-date">
                                                        Posted on
                                                        <span class="day">17th</span>
                                                        <span class="month">May</span>
                                                        <span class="year">2015</span>
                                                    </span>
                                                    <span class="pull-right">
                                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-excerpt">
                                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                                </div>
                                            </div>
                                            <div class="post-footer"></div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center margin-top">
                            <a data-animation="flipInY" data-animation-delay="100" href="blog.html" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> &nbsp;See all news</a>
                        </div>
                    </div>
                </section>
-->
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section light create-new-event">
                    <div class="container text-center">
                        <h1 class="section-title">Have an opportunity to share?</h1>
                        <p>Find </p>
                        <div><a href="#" class="btn btn-theme btn-theme-md">SUBMIT EVENT</a></div>
                    </div>

                    <div class="container text-center">
                        <form action="/index.php" method="post">
                            Name: <input type="text" name="name"><br>
        Begin date:
        <div class="container">
            <div class='col-md-5'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker6'>
                        <input type='text' name="begin" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div><br>
        End date:
            <div class='col-md-5'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7'>
                        <input type='text' name="end" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div><br>
                            Location: <input type="text" name="location"><br>
                            Price: <input type="text" name="price"><br>
                            Description: <textarea name="description"></textarea><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE LOCATION -->
                <section class="page-section" id="location">
                    <div class="container full-width gmap-background">

                        <div class="container">
                            <div class="on-gmap color">
                                <h1 class="section-title">
                                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-map-marker fa-stack-1x"></i></span></span>
                                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Event Location</span>
                                </h1>
                                <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">Apple Store SOHO‎ <br/>
                                    103 Prince St New York, <br/>
                                    NY 10012, United States <br/>
                                    +1 212-226-3126</p>
                                <p><a href="mailto:youremail@domain.com">hello@imevent.com</a></p>
                                <a href="#" class="btn btn-theme"
                                   data-animation="flipInY" data-animation-delay="300">Get Direction <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- Google map -->
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                        <!-- /Google map -->

                    </div>
                </section>
                <!-- /PAGE LOCATION -->


            </div>
            <!-- /Content area -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-meta">
                    <div class="container text-center">
                        <div class="clearfix">
                            <ul class="social-line list-inline">
                                <li data-animation="flipInY" data-animation-delay="100"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="200"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="300"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="400"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="500"><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="600"><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="700"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; &#8212; made by jThemes Studio</span>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div class="to-top"><i class="fa fa-angle-up"></i></div>


        </div>
        <!-- Popup: Login -->
        <div class="modal fade login-register" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" id="main-slider">
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="form-background">
                    <div class="col-sm-6 popup-form">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Login</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="form-footer color">
                            <a href="#" class="popup-password"> Lost your password?</a>
                        </div>
                    </div>

                    <div class="popup-form col-sm-6">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Register</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="E-mail"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Register Now <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <!-- /Popup: Login -->



    <!-- /Wrap all content -->

    <!-- JS Global -->

    <!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->

    <script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script>
    <script src="assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script src="assets/plugins/modernizr.custom.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap/js/collapse.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.com/libraries/moment.js"></script>
    <script src="assets/plugins/superfish/js/superfish.js"></script>
    <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/plugins/placeholdem.min.js"></script>
    <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
    <script src="assets/plugins/moment.js"></script>
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <script src="assets/plugins/smooth-scrollbar.min.js"></script>

    <!-- JS Page Level -->
    <script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
    <script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
    <script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <!--<script src="assets/js/theme-ajax-mail.js"></script>-->
    <script src="assets/js/theme.js"></script>



    <script type="text/javascript">
        "use strict";
        jQuery(document).ready(function () {
            theme.init();
            theme.initMainSlider();
            theme.initCountDown();
            theme.initPartnerSlider();
            theme.initTestimonials();
            theme.initCorouselSlider4();
            theme.initCorouselSlider3();
            theme.initGoogleMap();
        });
        jQuery(window).load(function () {
            theme.initAnimation();
        });

        jQuery(window).load(function () {
            jQuery('body').scrollspy({offset: 100, target: '.navigation'});
        });
        jQuery(window).load(function () {
            jQuery('body').scrollspy('refresh');
        });
        jQuery(window).resize(function () {
            jQuery('body').scrollspy('refresh');
        });

        jQuery(document).ready(function () {
            theme.onResize();
        });
        jQuery(window).load(function () {
            theme.onResize();
        });
        jQuery(window).resize(function () {
            theme.onResize();
        });

        jQuery(window).load(function () {
            if (location.hash != '') {
                var hash = '#' + window.location.hash.substr(1);
                if (hash.length) {
                    jQuery('html,body').delay(0).animate({
                        scrollTop: jQuery(hash).offset().top - 44 + 'px'
                    }, {
                        duration: 1200,
                        easing: "easeInOutExpo"
                    });
                }
            }
        });

    </script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>

</body>
</html>
