<!DOCTYPE html>
<!-- Définit la langue du document -->
<html <?php language_attributes(); ?>>
<head>
    <!-- Encodage du site -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Chargement scripts et styles -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-world-trip.svg" alt="Logo World Trip">
        </a>  
    </header>
    
    <?php wp_body_open(); ?>