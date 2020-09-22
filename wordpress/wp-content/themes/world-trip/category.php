<?php get_header(); ?>
	

	<h1><?php the_title(); ?></h1>
        <div>
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
        <?php the_content(); ?>
<?php get_footer(); ?>