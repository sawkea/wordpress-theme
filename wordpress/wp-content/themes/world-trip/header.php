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

        <!-- Image header --------------------------------------------->
        <div >
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header.png" alt="image du header">
        </div>

        <!-- Menu kebab - visible en mobile version -------------------->
        <div class="d-flex justify-content-end d-block d-lg-none">
            
                <div class="kebab">
                    <figure></figure>
                    <figure class="middle"></figure>
                    <p class="cross">x</p>
                    <figure></figure>
                    <?php
                        // class wp pour menu kebab afin de creer le ul et les li
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'menu-kebab', // identifiant du menu, défini dans functions.php
                                'container'       => 'nav', // élément conteneur
                                'container_class' => 'kebab', // élément conteneur
                                'menu_class'      => 'dropdown', // class du menu
                            )
                        );
                    ?>
                </div>
        </div>
      
        <!-- Logo --------------------------------------------------->
        
            <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/logo-world-trip.svg" alt="Logo World Trip">
            <h1 class="text-center mb-5"><?php bloginfo('description'); ?></h1>
         
        
    </header>

    


    <div class="container ">
    <div class="menu-desktop d-none d-lg-block">
        <?php
            if( has_nav_menu('header-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar',

                    )
                );
            }
            ?>
    </div>
    
</div>
    
    



<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
    <?php wp_body_open(); ?>
    