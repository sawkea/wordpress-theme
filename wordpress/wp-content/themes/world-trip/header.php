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

        <!-- Menu kebab ----------------------------------------------->
        <!-- <div class="d-flex justify-content-end pr-2">
            
                <div class="kebab">
                    <figure></figure>
                    <figure class="middle"></figure>
                    <p class="cross">x</p>
                    <figure></figure>
                    <ul class="dropdown">
                        <li><a href="http://www.g.com">Home</a></li>
                        <li><a href="http://www.g.com">About</a></li>
                        <li><a href="http://www.g.com">Items</a></li>
                        <li><a href="http://www.g.com">Golden book</a></li>
                    </ul>
                </div>
        </div> -->
        <!-- Menu kebab ----------------------------------------------->
        <div class="d-flex justify-content-end pr-2">
            
                <div class="kebab">
                    <figure></figure>
                    <figure class="middle"></figure>
                    <p class="cross">x</p>
                    <figure></figure>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'menu-kebab', // identifiant du menu, défini dans functions.php
                                'container'       => 'nav', // élément conteneur
                                'container_class' => 'kebab', // élément conteneur
                                'menu_class'      => 'dropdown', // class du menu
                            )
                        );
                    ?>
                    <!-- <ul class="dropdown">
                        <li><a href="http://www.g.com">Home</a></li>
                        <li><a href="http://www.g.com">About</a></li>
                        <li><a href="http://www.g.com">Items</a></li>
                        <li><a href="http://www.g.com">Golden book</a></li>
                    </ul> -->
                </div>
            
        </div>

        
            <?php
                // wp_nav_menu(
                //     array(
                //         'theme_location'  => 'menu-kebab', // identifiant du menu, défini dans functions.php
                //         'container'       => 'false', // élément conteneur
                //         'container_class' => 'd-flex justify-content-end pr-2', // classe de cet élément
                //         'menu_class'      => 'kebab', // class du menu
                //     )
                // );
            ?>
       

        
      
                <!-- Logo --------------------------------------------------->
                <a href="<?php echo home_url( '/' ); ?>">
                    <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/logo-world-trip.svg" alt="Logo World Trip">
                </a> 
        
    
            


 
    </header>

    <div class="container">
    <div class="navigation">
        <?php
            if( has_nav_menu('header-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar'
                    )
                );
            }
            ?>
    </div>
    
    



<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
    <?php wp_body_open(); ?>
    