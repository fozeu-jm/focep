<?php get_header() ?>

<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1><span>Contact</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            
        </div>
    </div>
    <div class="auto-container">
        <div class="inner-container">
            <?php
            while (have_posts()) {
                the_post();
            ?>
            <h2><?php the_field('contact-main'); ?></h2>
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <ul style="margin-top: 50px;" class="list-style-five">
                            <li><span class="icon fa fa-building"></span> <?php the_field('contact-place'); ?></li>
                            <li><span class="icon fa fa-fax"></span> <?php the_field('contact-number'); ?></li>
                            <li><span class="icon fa fa-envelope-o"></span><?php the_field('contact-mail'); ?></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Contact Form-->
                        <div class="contact-form">
                            <?php
                            while (have_posts()) {
                                the_post();
                                the_content();
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