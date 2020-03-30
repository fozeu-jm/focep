<?php

function theme_resources() {
    
    
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('responsive', get_theme_file_uri('css/responsive.css'));
    


    wp_enqueue_script('query', get_theme_file_uri('js/jquery.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('js/popper.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('boot', get_theme_file_uri('js/bootstrap.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('mix', get_theme_file_uri('js/mixitup.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('validate', get_theme_file_uri('js/validate.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('fancy', get_theme_file_uri('js/jquery.fancybox.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('appear', get_theme_file_uri('js/appear.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('scroll', get_theme_file_uri('js/jquery.mCustomScrollbar.concat.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('owl', get_theme_file_uri('js/owl.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('wow', get_theme_file_uri('js/wow.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('ui', get_theme_file_uri('js/jquery-ui.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), '1.0', true);
    
    
    
    wp_enqueue_script('carte', get_theme_file_uri('http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU'), array('jquery'), '1.0', true);
    wp_enqueue_script('map_api', get_theme_file_uri('js/map-script.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_resources');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'theme_features');

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );

function logintitle() {
    return 'Powered by KaizerWebDesign';
}

add_filter('login_headertitle', 'logintitle');

add_action('login_enqueue_scripts', 'login_css');

function login_css() {
    wp_enqueue_style('owltheme', get_theme_file_uri('css/login.css'));
}

