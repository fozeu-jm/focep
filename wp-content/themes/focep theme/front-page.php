<?php
get_header();
?>

<!--Main Slider-->
<section class="main-slider style-four">
    <div class="main-slider-carousel owl-carousel owl-theme">
        <?php
        $custom = new WP_Query(array(
            'post_type' => 'slider',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <div class="slide" style="background-image:url(<?php the_field('slider-bg'); ?>)">
                <div class="auto-container">
                    <div class="content">
                        <div class="title"><?php the_field('slider-small'); ?></div>
                        <h1><?php the_field('slider-main'); ?></h1>
                        <div class="text"><?php the_field('slider-description'); ?></div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-twelve">Démarrer <span class="fa fa-angle-right"></span></a>
                            <a href="#" class="theme-btn btn-style-thirteen">Nos offres <span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }wp_reset_postdata(); ?>
    </div>
    <!--End Slide Info Boxed-->

</section>
<!--End Main Slider-->

<!-- About Section Four -->
<section class="about-section-four">
    <?php
    while (have_posts()) {
        the_post();
        ?>
        <div class="auto-container">

            <!-- Sec Title Three -->
            <div class="sec-title-three">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title"><?php the_field('about-small'); ?></div>
                        <h2><?php the_field('about-small'); ?></h2>
                    </div>
                    <div class="pull-right text-justify">
                        <div class="text"><?php the_field('about-descrption'); ?></div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <!-- Content Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-1"><img src="<?php the_field('abt-img2'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam"></div>
                        <div class="image-2"><img src="<?php the_field('abt-img1'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam"></div>
                    </div>
                </div>

                <!-- Skills Column -->
                <div class="skills-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!-- Services Block Thirteen -->
                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-headphones"></span>
                                    </div>
                                    <h5><?php the_field('qualite_1'); ?></h5>
                                </div>
                            </div>

                            <!-- Services Block Thirteen -->
                            <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box alternate">
                                        <span class="icon flaticon-loading"></span>
                                    </div>
                                    <h5><?php the_field('qualite_2'); ?></h5>
                                </div>
                            </div>

                            <!-- Services Block Thirteen -->
                            <div class="services-block-thirteen col-lg-4 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-creativity"></span>
                                    </div>
                                    <h5><?php the_field('qualite_3'); ?></h5>
                                </div>
                            </div>

                        </div>

                        <!--Skills-->
                        <div class="skills">

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><?php the_field('comptences_1'); ?></div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="<?php the_field('valeur_1'); ?>">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><?php the_field('comptences_2'); ?></div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="<?php the_field('valeur_2'); ?>">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
                                </div>
                            </div>

                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title"><?php the_field('comptences_3'); ?></div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="<?php the_field('valeur_3'); ?>">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
                                </div>
                            </div>

                        </div>						

                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
</section>
<!-- End About Section Four -->

<!-- Services Section Four-->
<section style="background-color: #f3f3f3;" class="about-section-four">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title-three">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title"><?php the_field('offre-small'); ?></div>
                    <h2><?php the_field('offre-main'); ?></h2>
                </div>
                <div class="pull-right">
                    <div class="text text-justify">
                        <?php the_field('offre-description') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'offers',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Services Block Four -->
                <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="<?php the_field('offer-img'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam">
                            <div class="overlay-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-statistics-1"></span>
                                    </div>
                                    <h6><?php the_field('offer-title'); ?></h6>
                                </div>
                            </div>

                            <div class="overlay-box-two">
                                <div class="overlay-inner-two">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics-1"></span>
                                        </div>
                                        <h6><a href="services-single.html"><?php the_field('offer-title'); ?></a></h6>
                                        <div class="text"><?php the_field('offer-description'); ?></div>
                                        <a class="read-more" href="<?php echo site_url('service'); ?>">En savoir plus <span class="fa fa-angle-double-right"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>	
            <?php }wp_reset_postdata(); ?>
        </div>

    </div>
</section>
<!-- End Services Section Four-->

<!-- Feature Section -->
<section class="feature-section">
    <div class="auto-container">
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <!-- Sec Title Three -->
            <div class="sec-title-three">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title"><?php the_field('choose-small'); ?></div>
                        <h2><?php the_field('choose-main'); ?></h2>
                    </div>
                    <div class="pull-right">
                        <div class="text text-justify">
                            <?php the_field('choose-descrption'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--Feature Tabs-->
            <div class="feature-tabs tabs-box">

                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#feature-expert" class="tab-btn">
                                <?php the_field('reason_1'); ?>
                                <span><?php the_field('reason1_description'); ?></span>
                            </li>
                            <li data-tab="#feature-brand" class="tab-btn active-btn">
                                <?php the_field('reason_2'); ?>
                                <span><?php the_field('reason2_description'); ?></span>
                            </li>
                            <li data-tab="#feature-ideas" class="tab-btn">
                                <?php the_field('reason_1'); ?>
                                <span><?php the_field('reason3_description'); ?></span>
                            </li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!-- Tab -->
                            <div class="tab" id="feature-expert">
                                <div class="content">
                                    <div class="image">
                                        <img src="<?php the_field('reason1_image'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam">
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab active-tab" id="feature-brand">
                                <div class="content">
                                    <div class="image">
                                        <img src="<?php the_field('reason2_image'); ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam">
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="feature-ideas">
                                <div class="content">
                                    <div class="image">
                                        <img src="<?php the_field('reason3_image'); ?>" alt="FONDS CAMEROUNAIS D’EPARGNE POUR LE PROGRES FOCEP SA">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>

    </div> 
</section>
<!-- End Feature Section -->


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
            <?php }wp_reset_postdata(); ?>

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

<!-- Counter Section -->
<section class="counter-section" style="background-image:url(<?php echo get_theme_file_uri('images/background/6.jpg'); ?>)">
    <div class="auto-container">
        <!-- Fact Counter -->
        <div class="fact-counter style-three">
            <div class="row clearfix">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-start"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000ms" data-stop="<?php the_field('chiffre-1'); ?>">0</span>+
                                <div class="counter-title"><?php the_field('chiffre-label1'); ?></div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-collaboration"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="<?php the_field('chiffre-2'); ?>">0</span>
                                <div class="counter-title"><?php the_field('chiffre-label2'); ?></div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-hand-shake-1"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="<?php the_field('chiffre-3'); ?>">0</span>
                                <div class="counter-title"><?php the_field('chiffre-label3'); ?></div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-stopwatch"></span>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="<?php the_field('chiffre-4'); ?>">0</span>
                                <div class="counter-title"><?php the_field('chiffre-label4'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>
<!-- Counter Section -->

<!-- Team Section Two -->
<section class="team-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <div class="sec-title-three centered">
                <div class="title"><?php the_field('team-small'); ?></div>
                <h2><?php the_field('team-main'); ?></h2>
            </div>
        <?php } ?>
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

<!-- News Section Two -->
<section class="news-section-two style-two">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title-three">
            <div class="clearfix">
                <div class="pull-left">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="title"><?php the_field('blog-title'); ?></div>
                        <h2><?php the_field('blog-main'); ?></h2>
                    </div>
                    <div class="pull-right">
                        <div class="text"><?php the_field('blog-description'); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="row clearfix">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '3',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- News Block Two -->
                <div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                            <img src="<?php echo $image[0]; ?>" alt="FOCEP S.A une Microfinance caameroun Yaounde, Douala et Bafoussam" />
                            <div class="overlay-box">
                                <a href="<?php echo $image[0]; ?>" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="fa fa-calendar"></span><?php the_time('F d, Y'); ?></li>
                                <li><span class="fa fa-user"></span><?php the_author(); ?></li>
                            </ul>
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-fourteen">En Savoir plus</a>
                        </div>
                    </div>
                </div>
            <?php }wp_reset_postdata(); ?>


        </div>

    </div>
</section>

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

<?php
get_footer();
?>