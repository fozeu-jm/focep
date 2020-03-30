<?php get_header() ?>

<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1><?php the_title(); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Agences</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- Contact Page Section -->
<section style="padding-top: 0px;" class="contact-page-section">
    <div style="top: 0px; position: relative;" class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <iframe style="width: 100%;" src="<?php the_field('agence-map'); ?>" width="640" height="480"></iframe>
        </div>
    </div>
    <div class="auto-container">
        <div style="top: -95px;" class="inner-container">
            <h2><?php the_title(); ?></span></h2>
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text text-justify">
                            <?php
                            while (have_posts()) {
                                the_post();
                                the_content();
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="gallery-slider owl-carousel owl-theme">
                        <?php
                        while (have_posts()) {
                            the_post();
                            $images = acf_photo_gallery('agency-gallery', get_the_ID());
                            $img_count = count($images);
                            for ($i = 0; $i < $img_count; $i++) {
                                ?>
                                <div class="image-slide">
                                    <img src="<?php echo $images[$i]['full_image_url'] ?>" alt="FOCEP S.A the best microfinance agency in Cameroon at Yaounde, Douala and Bafoussam">
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Team Page Section -->

<?php get_footer(); ?>