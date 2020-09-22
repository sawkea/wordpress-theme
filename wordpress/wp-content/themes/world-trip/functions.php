<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menu( 'header-menu', __( 'header-menu'));

}
// Ajout style Bootstrap via une fonction
function montheme_register_assets () {
    // enregistrer le style
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    // utiliser le style
    wp_enqueue_style( 'bootstrap' );
}

// ACTIONS ___________________________________________________________________________________________________

// action menu
add_action('init', 'register_menu');
// action bootstrap
add_action('wp_enqueue_scripts', 'montheme_register_assets');

