<?php get_header(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1><?php the_title(); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                <li><a href="<?php echo site_url('/actualites'); ?>">Actu</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-single">
                    <div class="inner-box">
                        <div class="image">
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                            <img src="<?php echo $image[0]; ?>" alt="FOCEP S.A la meilleure Microfinance cameroun Yaounde, Douala et Bafoussam" />
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <li><span class="fa fa-calendar"></span><?php the_time('F d, Y'); ?></li>
                                    <li><span class="fa fa-user"></span>Par <?php the_author(); ?></li>
                                <?php } ?>
                            </ul>
                            <h4 style="text-align: center;"><?php the_title(); ?></h4>
                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">

                    <!-- Popular Post Widget-->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title-two">
                            <h4>Actualités Recentes</h4>
                        </div>
                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => '3',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                            <article class="post">
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                                <figure class="post-thumb"><img src="<?php echo $image[0]; ?>" alt="FOCEP S.A la meilleure microfinance au Cameroun a Yaounde, Douala et Bafoussam">
                                    <a href="<?php the_permalink(); ?>" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="post-info"><?php the_time('F d, Y'); ?></div>
                            </article>
                        <?php } ?>
                    </div>

                    <!-- Banner Widget-->
                    <div class="sidebar-widget banner-widget">
                        <div class="widget-content" style="background-image:url(<?php echo get_theme_file_uri('images/resource/service-15.jpg'); ?>)">
                            <div class="logo">
                                <img style="width: 60%;" src="<?php echo get_theme_file_uri('images/icons/widget-logo.png'); ?>" alt="" />
                            </div>
                            <div class="title">Securied Business with</div>
                            <h2>FOCEP S.A</h2>
                            <a href="<?php echo site_url('/contact'); ?>" class="theme-btn btn-style-seventen">Commencer !<span class="icon flaticon-link"></span></a>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
<!--End Sidebar Page Container-->

<?php get_footer(); ?>