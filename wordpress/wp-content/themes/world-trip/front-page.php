<?php get_header(); ?>
<?php get_header(); ?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

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
        <?php the_content();
        ?>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
<?php get_footer(); ?>