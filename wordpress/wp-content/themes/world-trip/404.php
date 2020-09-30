
<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage world-trip 
 * @since world trip 1.0.0
 */

?>
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
      
        
        
    </header>

<div class="container">
    <div class="row align-items-center justify-content-between">
        <!-- Logo --------------------------------------------------->
        <div class="col-6">
            <a href="<?php echo home_url( '/' ); ?>">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/logo-world-trip.svg" alt="Logo World Trip" width="100">
            </a> 
        </div>

        <!-- Button retour page accueil -->
        <div class="col-6 text-right">
            <a href="<?php echo home_url( '/' );?>"<span class="fas fa-chevron-circle-left"></span></a>
        </div>
    </div>


    <!-- 404 PAGE NO FOUND ------------------------------------------>
    
        
            <div id="page-no-found">
                <div class="row justify-content-center">
            
                    <!-- ligne du titre---------->
                    <div class="title-line mb-2"></div>
            
                    <p class="num-page-no-found">404</p> <br>
                </div>
            
                <p class="page-no-found text-center">page no found</p>
            </div>
        
    
    

</div>

<?php
get_footer();
