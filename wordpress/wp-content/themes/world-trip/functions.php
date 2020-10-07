<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menu( 'header-menu', __( 'header-menu'));
    register_nav_menu( 'category', __( 'category'));
}

// MENU
function wordltrip_menus () {
    register_nav_menu('menu-kebab','menu-kebab');
}

// AJOUT STYLES _______________________________________________________________________________________________
function worldtrip_register_assets () {

    // FONTS ****************************************************************************
    wp_register_style('fonts', 'href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet"');
    wp_enqueue_style( 'fonts' );

    // BOOTSTRAP ********************************************************************
    // enregistrer le style
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    // enregistrer script js 
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);

    //ne pas enregistrer je jquery de wordpress a faire attention pour des plugins wordpress
    wp_deregister_script('jquery');

    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);

    // utiliser le style et les scripts
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_script( 'bootstrap' );

    // FONTAWESOME **********************************************************************
    wp_register_script('fontawesome', 'https://kit.fontawesome.com/1bf0880d3b.js', [], false, true);
    wp_enqueue_script('fontawesome');

    // STYLE.CSS de la racine************************************************************
    wp_enqueue_style( 
        'worldtrip',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
    

    // Déclarer le JS *******************************************************************
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
add_action('after_setup_theme', 'wordltrip_menus');
// action styles
add_action('wp_enqueue_scripts', 'worldtrip_register_assets');

