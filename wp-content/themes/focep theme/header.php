<!DOCTYPE html>
<html>

    <!-- Mirrored from themexriver.com/tfhtml/finano/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jun 2019 09:51:41 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="author" content="KAIZER WEB DESIGN">
        <!-- Stylesheets -->

        <!--        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
                <link rel="icon" href="images/favicon.png" type="image/x-icon">-->

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php wp_head(); ?>
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header-->
            <header class="main-header header-style-five">

                <!--Header Top-->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="top-left">
                                <ul class="contact-list clearfix">
                                    <li><i class="fa fa-envelope-o"></i> contact@focep.com</li>
                                    <li><i class="fa fa-phone"></i><a href="#">+237 22 231 42 70</a></li>
                                    <li><i class="fa fa-map-marker"></i><a href="#">Capitole, Cameroun, Yaounde</a></li>
                                </ul>
                            </div>
                            <div class="top-right">

                                <!--Language-->
                                <span class="contact-mobile" style="color: white;"><i class="fa fa-envelope-o"></i> contact@focep.com</span>
                                <div id="weglot_here"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Top -->

                <!--Header-Upper-->
                <div class="header-upper">
                    <div style="max-width: 1368px;" class="auto-container">
                        <div class="clearfix">

                            <div class="pull-left logo-box">
                                <div class="logo" style="margin-left: 95px;">
                                    <a href="<?php echo site_url('/'); ?>"><img id="main-logo" src="<?php echo get_theme_file_uri('images/focep.png'); ?>" alt="focep logo" title=""></a></div>
                            </div>

                            <div class="nav-outer clearfix">

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="<?php
                                            if (is_front_page()) {
                                                echo 'current';
                                            }
                                            ?>"><a href="<?php echo site_url(''); ?>">ACCUEIL</a></li>
                                            <li class="<?php if(is_page('a-propos')){echo 'current';} ?>"><a href="<?php echo site_url('/a-propos'); ?>">A PROPOS</a></li>
                                            <li class="<?php if(is_page('service')){echo 'current';} ?>"><a href="<?php echo site_url('/service'); ?>">NOS OFFRES</a></li>
                                            <li class="<?php if(is_page('projet') OR get_post_type() == 'project'){echo 'current';} ?>"><a href="<?php echo site_url('/projet'); ?>">NOS PROJETS</a></li>
                                            <li class="<?php if(get_post_type() == 'post'){ echo 'current';} ?>"><a href="<?php echo site_url('/actualites'); ?>">ACTUALITES</a></li>
                                            <li class="dropdown <?php if(is_page('demande-stage') OR is_page('offre-emploi') OR get_post_type() == 'emploi'){ echo 'current';} ?>"><a href="#">CARRIERE</a>
                                                <ul>
                                                    <li><a href="<?php echo site_url('/demande-stage'); ?>">Stages</a></li>
                                                    <li><a href="<?php echo site_url('offre-emploi'); ?>">Offres d'emploi</a></li>
                                                </ul>
                                            </li>
                                            <li class="<?php if(is_page('nos-agences') OR get_post_type() == 'agency'){echo 'current';} ?>"><a href="<?php echo site_url('/nos-agences'); ?>">NOS AGENCES</a></li>
                                            <li class="<?php if(is_page('contact')){echo 'current';} ?>"><a href="<?php echo site_url('/contact'); ?>">CONTACT</a></li>
                                        </ul>
                                    </div>

                                </nav>

                                <!--Outer Box-->


                            </div>

                        </div>
                    </div>
                </div>
                <!--End Header Upper-->

                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="<?php echo site_url('/'); ?>" class="img-responsive"><img style="max-width: 100px;" src="<?php echo get_theme_file_uri('images/focep.png'); ?>" alt="FOCEP LOGO" title="FOCEP"></a>
                        </div>

                        <!--Right Col-->
                        <div class="kaizer right-col pull-right">
                            <!-- Main Menu -->
                            <nav id="mobile-header" class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                    <ul class="navigation clearfix">
                                        <li class="<?php
                                            if (is_front_page()) {
                                                echo 'current';
                                            }
                                            ?>"><a href="<?php echo site_url(''); ?>">ACCUEIL</a></li>
                                        <li class="<?php if(is_page('a-propos')){echo 'current';} ?>"><a href="<?php echo site_url('/a-propos'); ?>">A PROPOS</a></li>
                                        <li class="<?php if(is_page('service')){echo 'current';} ?>"><a href="<?php echo site_url('/service'); ?>">NOS OFFRES</a></li>
                                        <li class="<?php if(is_page('projet')  OR get_post_type() == 'project'){echo 'current';} ?>"><a href="<?php echo site_url('/projet'); ?>">NOS PROJETS</a></li>
                                        <li class="<?php if(get_post_type() == 'post'){ echo 'current';} ?>"><a href="<?php echo site_url('/actualites'); ?>">ACTUALITES</a></li>
                                        <li class="dropdown <?php if(is_page('demande-stage') OR is_page('offre-emploi') OR get_post_type() == 'emploi'){ echo 'current';} ?>"><a href="#">CARRIERE</a>
                                            <ul>
                                                <li><a href="<?php echo site_url('/demande-stage'); ?>">Stages</a></li>
                                                <li><a href="<?php echo site_url('offre-emploi'); ?>">Offres d'emploi</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if(is_page('nos-agences') OR get_post_type() == 'agency'){echo 'current';} ?>"><a href="<?php echo site_url('/nos-agences'); ?>">NOS AGENCES</a></li>
                                        <li class="<?php if(is_page('contact')){echo 'current';} ?>"><a href="<?php echo site_url('/contact'); ?>">CONTACT</a></li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                        </div>

                    </div>
                </div>
                <!--End Sticky Header-->

            </header>
            <!--End Main Header -->