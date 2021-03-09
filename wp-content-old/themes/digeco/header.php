<?php global $post;?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vikgol | <?php the_title();?> </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/media/favicon.png">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/select2/css/select2.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/wow/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/page-piling/css/jquery.pagepiling.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/nivo-slider/css/nivo-slider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/meanmenu/css/meanmenu.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/slick/css/slick.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/slick/css/slick-theme.css" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.css" type="text/css">
    <!-- Animation Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dependencies/animation-css/animation-css.css" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <?php wp_head();?>
</head>

<body>

<div id="preloader" class="tlp-preloader">
    <div class="animation-preloader">
        <div class="tlp-spinner"></div>
        <img src="<?php echo get_template_directory_uri();?>/media/preloader.png" alt="Preloader">
    </div>
</div>

<div id="wrapper" class="wrapper">
    <a href="#main_content" data-type="section-switch" class="return-to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <div id="main_content">

        <!--=====================================-->
        <!--=            Navbar Start           =-->
        <!--=====================================-->
        <header class="sticky-on">
            <div id="sticky-placeholder"></div>
            <div id="navbar-wrap" class="navbar-wrap">
                <div class="navbar-layout1">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center position-relative">
                            <div class="col-lg-2 d-flex justify-content-start">
                                <div class="temp-logo text-center">
                                    <a href="<?php echo home_url();?>" class="default-logo">
                                        <img src="<?php echo get_template_directory_uri();?>/media/logo-light.png" alt="logo" class="img-fluid">
                                    </a>
                                    <a href="<?php echo home_url();?>" class="sticky-logo">
                                        <img src="<?php echo get_template_directory_uri();?>/media/logo-dark.png" alt="logo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end possition-static">
                                <nav id="dropdown" class="template-main-menu">
                                    <ul>
                                        <li class="position-static d-none d-lg-block">
                                            <a href="<?php echo home_url();?>">Home</a>

                                        </li>
                                        <li>
                                            <a href="about.php">About Us</a>

                                        </li>

                                        <li>
                                            <a href="#">Product</a>
                                            <ul class="dropdown-menu-col-1">
                                                <li><a href="#"><span>For Business</span></a></li>
                                                <li><a href="#"><span>Vikgoler/Creator</span></a></li>
                                            </ul>
                                        </li>


                                        <li>
                                            <a href="#">Services</a>
                                            <ul class="dropdown-menu-col-1">
                                                <li class="has-child-second-level"><a href="content.php"><span>Content</span></a>

                                                    <ul class="second-level">

                                                        <li><a href="#"><span>Blog Content</span></a></li>
                                                        <li><a href="#"><span>Other Content</span></a></li>


                                                    </ul>

                                                </li>

                                                <li class="has-child-second-level"><a href="#"><span>Langauge</span></a>

                                                    <ul class="second-level">

                                                        <li><a href="#"><span>English</span></a></li>
                                                        <li><a href="#"><span>Hindi</span></a></li>
                                                        <li><a href="#"><span>Urdu</span></a></li>


                                                    </ul>


                                                </li>


                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-end">
                                <ul class="header-action-items">
                                    <li class="single-item mr-3">
                                        <a href="#" class="item-btn btn-ghost btn-light">Become a Vikgoler</a>
                                    </li>

                                    <li class="single-item mr-2">
                                        <a href="#" class="item-btn btn-ghost btn-light">Get a Quote</a>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </header>
