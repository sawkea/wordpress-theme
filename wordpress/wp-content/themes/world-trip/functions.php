<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menu( 'header-menu', __( 'header-menu'));

}


// AJOUT STYLES _______________________________________________________________________________________________
function worldtrip_register_assets () {

    // BOOTSTRAP ********************************************************************
    // enregistrer le style
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    // enregistrer script js 
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);

    //ne pas enregistrer je jquery de wordpress a faire attention pour des plugins wordpress
    wp_deregister_script('jquery');

    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    // utiliser le style et les scripts
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_script( 'bootstrap' );

    // STYLE.CSS de la racine************************************************************
    wp_enqueue_style( 
        'worldtrip',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // Déclarer le JS
	wp_enqueue_script( 
        'worldtrip', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
}


// ACTIONS ___________________________________________________________________________________________________

// action title 
add_filter('wp_title', 'worldtrip_title');
// action menu
add_action('init', 'register_menu');
// action styles
add_action('wp_enqueue_scripts', 'worldtrip_register_assets');

