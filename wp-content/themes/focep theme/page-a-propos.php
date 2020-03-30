<?php get_header(); ?>


<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1>A <span>propos</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>A propos</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- About Section Two -->
<section class="about-section-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Video Column -->
            <div class="video-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Video Box-->
                    <div class="video-box">
                        <figure class="image">
                            <img src="<?php the_field('ident-img'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam">
                        </figure>
                        <!--<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>-->
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3><?php the_field('ident-title'); ?></h3>
                    <div class="text">
                        <?php the_field('ident-titre'); ?>
                    </div>
                    <!--                    <a href="#" class="theme-btn btn-style-three">About us</a>-->
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section Two -->

<!-- Faq Section -->
<section style="margin-bottom: 100px;" class="faq-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Faq Column -->
            <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <h2 style="font-weight: bold;"><?php the_field('mission-main'); ?></h2>
                        </div>

                        <!--Accordion Box-->
                        <ul class="accordion-box">

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pie-chart-3">

                                    </span><?php the_field('mission-small'); ?> <span class="arrow fa fa-angle-right"></span></div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <p>
                                            <?php the_field('mission-description'); ?>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> 
                                        <span class="icon icon-minus fa fa-arrow-down"></span></div> 
                                    <span class="icon-inner flaticon-up-arrow-1"></span>
                                    <?php the_field('vision-small'); ?>
                                    <span class="arrow fa fa-angle-right"></span></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>
                                            <?php the_field('vision-description'); ?>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!--Image Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <img src="<?php the_field('mission-img'); ?>" alt="FOCEP S.A microfinance au Cameroun Yaounde, Douala et Bafoussam">
                                </div>
                            </div>
                        <?php } ?>
                        <!--Content Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">

                            <div class="fact-counter style-two">

                                <!--Column-->
                                <?php
                                $custom = new WP_Query(array(
                                    'post_type' => 'page',
                                    'post_status' => 'publish',
                                    'p' => 15,
                                    'posts_per_page' => '-1',
                                ));
                                while ($custom->have_posts()) {
                                    $custom->the_post();
                                    ?>
                                    <div class="column counter-column">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2500" data-stop="<?php the_field('chiffre-4'); ?>">0</span>
                                                <h4 class="counter-title"><?php the_field('chiffre-label4'); ?></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column">
                                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="<?php the_field('chiffre-3'); ?>">0</span>
                                                <h4 class="counter-title"><?php the_field('chiffre-label3'); ?></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3500" data-stop="<?php the_field('chiffre-2'); ?>">0</span>+
                                                <h4 class="counter-title"><?php the_field('chiffre-label2'); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php }wp_reset_postdata(); ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="side-image" style="background-image:url(<?php echo get_theme_file_uri('images/resource/image-3.jpg'); ?>)"></div>
    </div>
</section>
<!-- End Faq Section -->

<!-- Gallery Section -->

<section class="gallery-section">
    <div style="text-align: center; margin-bottom: 80px;">
        <h1 style="color: black; ">LA GOUVERNANCE <span class="accent">FOCEP S.A</span> </h1>
    </div>
    <div class="outer-container">
        <div class="gallery-carousel owl-carousel owl-theme">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'govern',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!--Gallery Block-->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php the_field('organ-img'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <h3><a href="#"><?php the_title(); ?></a></h3>
                                    <div class="text">
                                        <?php the_field('organ-description'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata();?>

        </div>
    </div>
</section>

<!-- End Gallery Section -->

<!-- Testimonial Section -->
<section class="testimonial-section padding-top">

    <div class="auto-container">
        <div class="single-item-carousel owl-carousel owl-theme">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon">
                            <span class="icon flaticon-right-quote-sign"></span>
                        </div>
                        <div class="text">
                            <?php the_field('testimonial'); ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="author"><?php the_field('testi-poste'); ?></div>
                    </div>
                </div>
            <?php }wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!-- Team Section Two -->
<section class="team-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <?php
        $custom = new WP_Query(array(
            'post_type' => 'page',
            'post_status' => 'publish',
            'p' => 15,
            'posts_per_page' => '-1',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <div class="sec-title-three centered">
                <div class="title"><?php the_field('team-small'); ?></div>
                <h2><?php the_field('team-main'); ?></h2>
            </div>
        <?php } wp_reset_postdata(); ?>
        <div class="row clearfix">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'team',
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                'order' => 'ASC',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                if (get_field('team-level') == 'one') {
                    ?>
                    <!--Team Block-->
                    <div class="team-block-two col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="team.html"><img src="<?php the_field('team-img') ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam" title=""></a>
                                <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h5><a href="#"><?php the_title(); ?></a></h5>
                                <div class="designation"><?php the_field('team-post'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }wp_reset_postdata();
            ?>

            <?php
            $custom = new WP_Query(array(
                'post_type' => 'team',
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                'order' => 'ASC',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                if (get_field('team-level') == 'two') {
                    ?>
                    <!--Team Block-->
                    <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="team.html"><img src="<?php the_field('team-img') ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam" title=""></a>
                                <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h5><a href="#"><?php the_title(); ?></a></h5>
                                <div class="designation"><?php the_field('team-post'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }wp_reset_postdata();
            ?>
        </div>

    </div>
</section>
<!-- End Team Section Two -->


<!--Sponsors Section-->
<section class="sponsors-section">
    <div class="auto-container">

        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <?php
                $custom = new WP_Query(array(
                    'post_type' => 'partners',
                    'post_status' => 'publish',
                    'posts_per_page' => '-1',
                ));
                while ($custom->have_posts()) {
                    $custom->the_post();
                    ?>
                    <li><div class="image-box"><a href="<?php the_field('part-link'); ?>"><img src="<?php the_field('part-img'); ?>" alt="Partenaire de la FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam"></a></div></li>
                            <?php } wp_reset_postdata(); ?>
            </ul>
        </div>

    </div>
</section>
<!--End Sponsors Section-->


<?php get_footer(); ?>