<?php get_header(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1>Nos <span>offres</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Nos offres</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- About Section Three -->
<section class="about-section-three">
    <div class="auto-container">
        <div class="row clearfix">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title"><?php the_field('service-small'); ?> </div>
                            <h2><?php the_field('service-main'); ?></h2>
                        </div>
                        <div class="bold-text"><?php the_field('service-first'); ?></div>
                        <div class="text"><?php the_field('service-second'); ?></div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image">
                        <img src="<?php the_field('service-img'); ?>" alt="" />
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End About Section Three -->

<!-- Companies Section -->
<section class="companies-section">
    <!-- Title Box -->
    <?php
    while (have_posts()) {
        the_post();
        ?>
        <div class="title-box" style="background-image:url(<?php the_field('second-back'); ?>)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <h2><?php the_field('second-main'); ?></h2>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="lower-section">

        <!--Company Info Tabs-->
        <div class="company-info-tabs">
            <!--Company Tabs-->
            <div class="company-tabs tabs-box">
                <div class="auto-container">
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#company-details" class="tab-btn active-btn">LES PRODUITS D’EPARGNE</li>
                        <li data-tab="#company-reviews" class="tab-btn">LES PRODUITS DE FINANCEMENT</li>
                        <li data-tab="#company-experts" class="tab-btn">LES SERVICES</li>
                    </ul>
                </div>
                <!--Tabs Container-->
                <div class="tabs-content">

                    <!--Tab epargne / Active Tab-->
                    <div class="tab active-tab" id="company-details">
                        <div class="auto-container">
                            <div class="content">
                                <div class="row clearfix">
                                    <!-- Services Section Ten -->
                                    <div class="auto-container">
                                        <div class="row clearfix">
                                            <?php
                                            $custom = new WP_Query(array(
                                                'post_type' => 'service',
                                                'post_status' => 'publish',
                                                'orderby' => 'publish_date',
                                                'order' => 'ASC',
                                                'posts_per_page' => '-1',
                                            ));
                                            while ($custom->have_posts()) {
                                                $custom->the_post();
                                                if (get_field('service-category') == 'epargne') {
                                                    ?>
                                                    <!-- Services Block Fourteen -->
                                                    <div  class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                                                        <div style="height: 430.8px; overflow: hidden;" class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                            <div class="box-one"></div>
                                                            <div class="box-two"></div>
                                                            <div class="icon-box">
                                                                <span class="icon <?php the_field('service-icon'); ?>"></span>
                                                            </div>
                                                            <h6><a href="#"><?php the_field('service-name'); ?></a></h6>
                                                            <div class="text"><?php the_field('service-description'); ?></div>
                                                        </div>
                                                    </div>
                                                <?php }
                                            }wp_reset_postdata();
                                            ?>

                                        </div>
                                    </div>
                                    <!-- End Services Section Ten -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="company-reviews">
                        <div class="content">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <!-- Services Section Ten -->
                                    <div class="auto-container">

                                        <div class="row clearfix">

                                            <?php
                                            $custom = new WP_Query(array(
                                                'post_type' => 'service',
                                                'post_status' => 'publish',
                                                'orderby' => 'publish_date',
                                                'order' => 'ASC',
                                                'posts_per_page' => '-1',
                                            ));
                                            while ($custom->have_posts()) {
                                                $custom->the_post();
                                                if (get_field('service-category') == 'finance') {
                                                    ?>
                                                    <!-- Services Block Fourteen -->
                                                    <div  class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                                                        <div style="height: 430.8px; overflow: hidden;" class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                            <div class="box-one"></div>
                                                            <div class="box-two"></div>
                                                            <div class="icon-box">
                                                                <span class="icon <?php the_field('service-icon'); ?>"></span>
                                                            </div>
                                                            <h6><a href="#"><?php the_field('service-name'); ?></a></h6>
                                                            <div class="text"><?php the_field('service-description'); ?></div>
                                                        </div>
                                                    </div>
                                                <?php }
                                            }wp_reset_postdata();
                                            ?>

                                        </div>
                                    </div>
                                    <!-- End Services Section Ten -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="company-experts">
                        <div class="content">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <!-- Services Section Ten -->
                                    <div class="auto-container">

                                        <div class="row clearfix">
                                            <?php
                                            $custom = new WP_Query(array(
                                                'post_type' => 'service',
                                                'post_status' => 'publish',
                                                'orderby' => 'publish_date',
                                                'order' => 'ASC',
                                                'posts_per_page' => '-1',
                                            ));
                                            while ($custom->have_posts()) {
                                                $custom->the_post();
                                                if (get_field('service-category') == 'service') {
                                                    ?>
                                                    <!-- Services Block Fourteen -->
                                                    <div  class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
                                                        <div style="height: 430.8px; overflow: hidden;" class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                            <div class="box-one"></div>
                                                            <div class="box-two"></div>
                                                            <div class="icon-box">
                                                                <span class="icon <?php the_field('service-icon'); ?>"></span>
                                                            </div>
                                                            <h6><a href="#"><?php the_field('service-name'); ?></a></h6>
                                                            <div class="text"><?php the_field('service-description'); ?></div>
                                                        </div>
                                                    </div>
                                                <?php }
                                            }
                                            wp_reset_postdata();
                                            ?>
                                            
                                        </div>
                                    </div>
                                    <!-- End Services Section Ten -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Companies Section -->


<?php get_footer(); ?>