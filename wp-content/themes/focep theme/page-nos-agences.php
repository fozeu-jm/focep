<?php get_header() ?>


<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1>Nos <span>Agences</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Nos agences</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Services Section Nine -->
<section style="padding-bottom: 130px;" class="services-section-nine">
    <div class="auto-container">

        <!-- Sec Title Two -->
        <div class="sec-title-two centered">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="title"><?php the_field('agency-small'); ?></div>
                <h2><?php the_field('agency-main'); ?></h2>
            <?php } ?>
        </div>

        <div class="clearfix">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'agency',
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                'order' => 'ASC',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Services Block Twelve -->
                <div class="services-block-twelve col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="<?php the_field('agence-img'); ?>" alt="FOCEP S.A la meilleure microfinance au Cameroun a Yaounde, Douala et Bafoussam"/>
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h4><?php the_title(); ?></h4>
                                        <div class="arrow-box fa fa-angle-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Overlay Box Two -->
                            <div class="overlay-box-two">
                                <div class="overlay-inner-two">
                                    <div class="large-icon flaticon-statistics"></div>
                                    <div class="content-two">
                                        <div class="icon-box">
                                            <span class="icon flaticon-statistics"></span>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php get_footer() ?>
