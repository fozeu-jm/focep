<?php get_header() ?>


<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1>Nos <span>actualités</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li>Actualités</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Blog List Section -->
<section class="blog-list-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <?php
        $custom = new WP_Query(array(
            'post_type' => 'page',
            'post_status' => 'publish',
            'p' => 13,
            'posts_per_page' => '-1',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <div class="sec-title centered">
                <div class="title"><?php the_field('actu-small'); ?></div>
                <h2><?php the_field('actu-main'); ?></span></h2>
            </div>
        <?php } ?>
        <div class="row clearfix">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <!-- News Block Four -->
                <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                            <img src="<?php echo $image[0]; ?>" alt="FOCEP S.A la meilleure Microfinance cameroun Yaounde, Douala et Bafoussam" />
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
                            <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-eighteen">En Savoir plus</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <?php echo paginate_links(); ?>      
        <!--End Styled Pagination-->

    </div>
</section>
<!-- End Blog List Section -->



<?php get_footer() ?>