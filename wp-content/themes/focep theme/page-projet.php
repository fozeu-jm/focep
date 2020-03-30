<?php get_header() ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1>Nos <span>projets</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Nos projets</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Portfolio Section Three-->
<section class="portfolio-section-three">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <h2><?php the_field('project-main'); ?></h2>
            <?php } wp_reset_postdata(); ?>
        </div>

        <!--MixitUp Galery-->
        <div class="mixitup-gallery">

            <div class="filter-list row clearfix">
                <?php
                $custom = new WP_Query(array(
                    'post_type' => 'project',
                    'post_status' => 'publish',
                    'orderby' => 'publish_date',
                    'order' => 'ASC',
                    'posts_per_page' => '-1',
                ));
                while ($custom->have_posts()) {
                    $custom->the_post();
                    ?>
                    <!-- Project Block -->
                    <div class="project-block mix finance col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php the_field('project-cover'); ?>" alt="FOCEP S.A une microfinance au Cameroun a Yaounde, Douala et Bafoussam" />
                                <div class="overlay-box">
                                    <a href="<?php the_field('project-cover'); ?>" data-fancybox="gallery-1" data-caption="<?php the_title(); ?>" class="plus flaticon-plus-symbol"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <div class="designation"><?php the_field('project-sector'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php } wp_reset_postdata(); ?>
                    
                </div>
            </div>


        </div>
    </section>
    <!-- End Case Section Three-->

    <?php get_footer(); ?>