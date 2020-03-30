<?php

function theme_post_types() {

    register_post_type('slider', array(
        'rewrite' => array('slug' => 'Diaporama'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Diaporama',
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier diapositive',
            'all_items' => 'Toutes les diapositives',
            'singular_name' => 'Diaporama'
        ),
        'menu_icon' => 'dashicons-slides',
    ));

    register_post_type('offers', array(
        'rewrite' => array('slug' => 'offres'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Nos Offres',
            'add_new_item' => 'Ajouter une offre',
            'edit_item' => 'Modifier une offre',
            'all_items' => 'Tous nos offres',
            'singular_name' => 'Offre'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('govern', array(
        'rewrite' => array('slug' => 'offres'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Gouvernance FOCEP S.A',
            'add_new_item' => 'Ajouter un organe',
            'edit_item' => 'Modifier un organe',
            'all_items' => 'Tous les organes',
            'singular_name' => 'Organe'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('team', array(
        'rewrite' => array('slug' => 'testimonial'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Equipe',
            'add_new_item' => 'Ajouter un membre',
            'edit_item' => 'Modifier un membre',
            'all_items' => 'Tous les membres',
            'singular_name' => 'Membre'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('partners', array(
        'rewrite' => array('slug' => 'partner'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Partenaire',
            'add_new_item' => 'Ajouter un partenaire',
            'edit_item' => 'Modifier un partenaire',
            'all_items' => 'Tous les partenaires',
            'singular_name' => 'Partenaire'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('service', array(
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Nos Services',
            'add_new_item' => 'Ajouter un service',
            'edit_item' => 'Modifier un service',
            'all_items' => 'Tous nos service',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('project', array(
        'rewrite' => array('slug' => 'project'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Projets',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier un projet',
            'all_items' => 'Tous nos projets',
            'singular_name' => 'Projet'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('emploi', array(
        'rewrite' => array('slug' => 'emploi'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Emploie',
            'add_new_item' => "Ajouter une offre d'emploi",
            'edit_item' => "Modifier une offre d'emploi",
            'all_items' => "Tous nos offre d'emploi",
            'singular_name' => 'Emploie'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('agency', array(
        'rewrite' => array('slug' => 'agencies'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Agence',
            'add_new_item' => "Ajouter une agence",
            'edit_item' => "Modifier une agence",
            'all_items' => "Tous nos agences",
            'singular_name' => 'Agence'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('testimonial', array(
        'rewrite' => array('slug' => 'testimonial'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Témoignage',
            'add_new_item' => 'Ajouter un Témoignage',
            'edit_item' => 'Modifier un témoignage',
            'all_items' => 'Tous vos Témoignages',
            'singular_name' => 'Témoignage'
        ),
        'menu_icon' => 'dashicons-format-quote',
    ));
}

add_action('init', 'theme_post_types');
