<?php get_header(); ?>
	

    <div class="container">
        <div class="d-flex align-items-center">
            <?php
                if( has_nav_menu('category')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'category',
                            'menu_class' => 'nav-item', 'dropdown', 
                            // 'depth' => 1,
                        )
                    );
                }
            ?>
        </div>
    </div>
        <?php the_content(); ?>
<?php get_footer(); ?>