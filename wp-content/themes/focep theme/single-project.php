<?php get_header(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo get_theme_file_uri('images/background/8.jpg'); ?>)">
    <div class="auto-container">
        <div class="content">
            <h1><?php the_title(); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/projet'); ?>">Projets</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Portfolio Single Section -->
<section class="portfolio-single-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="<?php the_field('project-cover'); ?>" alt="FOCEP S.A la meilleure microfinance au cameorun a Yaounde, Douala et Bafoussam" />
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="inner-column">
                        <h3><?php the_title(); ?></h3>
                        <div class="text text-justify">
                            <?php the_content(); ?>
                        </div>
                        <ul class="project-list">
                            <li><span class="icon fa fa-tag"></span> <strong>Secteur: </strong><?php the_field('project-sector'); ?></li>
                            <li><span class="icon fa fa-user"></span> <strong>Client: </strong><?php the_field('project-client'); ?></li>
                            <li><span class="icon fa fa-calendar"></span> <strong>Date: </strong><?php the_field('project-date'); ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- End Portfolio Single Section -->

<?php get_footer(); ?>