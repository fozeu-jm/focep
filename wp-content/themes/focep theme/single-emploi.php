<?php get_header() ?>

<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1><?php the_title(); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Emploi</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="contact-page-section testing">
    <div class="container">
        <?php
        while (have_posts()) {
            the_post();
            the_content();
        }
        ?>
    </div>
</section>
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div style="top: unset;" class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas format-img" style="background-image: url(<?php echo get_theme_file_uri('images/intern.jpg'); ?>);">

            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="inner-container">
            <h2><?php the_title(); ?></h2>
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text"><?php the_field('job-description'); ?></div>
                        <ul class="list-style-five">
                            <li><span class="icon fa fa-building"></span><?php the_field('job-place'); ?></li>
                            <li><span class="icon fa fa-fax"></span> <?php the_field('job-line'); ?></li>
                            <li><span class="icon fa fa-envelope-o"></span><?php the_field('job-email'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Contact Form-->
                        <!--Contact Form-->
                        <div class="contact-form">
                            <?php
                                while (have_posts()) {
                                    the_post();
                                    the_field('job-form');
                                }
                                ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Team Page Section -->


<?php get_footer() ?>
