<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(!empty($this->uri->segment(1))) { echo ucfirst($this->uri->segment(1)); } else { echo 'Home'; } ?> | CNC</title>
    <link rel="icon" href="<?php echo base_url(); ?>public/assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/main.css">

   
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>public/assets/img/callncure-logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item <?php if($this->uri->segment(1) == 'home' ){echo "active"; } ?>">
                                    <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment(1) == 'about' ){echo "active"; } ?>">
                                    <a class="nav-link" href="<?php echo base_url(); ?>about">About Us</a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment(1) == 'services' ){echo "active"; } ?>">
                                    <a class="nav-link" href="<?php echo base_url(); ?>services">Services</a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment(1) == 'categories' ){echo "active"; } ?>">
                                    <a class="nav-link" href="<?php echo base_url(); ?>categories">Doctors</a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment(1) == 'mental-health' ){echo "active"; } ?>">
                                    <a class="nav-link" href="<?php echo base_url(); ?>shop">Shop</a>
                                </li>
                                <li class="nav-item <?php if($this->uri->segment(1) == 'contact' ){echo "active"; } ?>">
                                    <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="<?php echo base_url(); ?>signin">Sign In</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->