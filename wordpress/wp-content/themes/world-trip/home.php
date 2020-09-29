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

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="post">
        <h2><?php the_title(); ?></h2>
  
        <?php the_post_thumbnail(); ?>
        
        <p class="post__meta">
            Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
            par <?php the_author(); ?> • <?php comments_number(); ?>
        </p>
        
          <?php the_excerpt(); ?>
          
          <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>
    </div>



    
    

<?php endwhile; endif; ?>
<?php get_footer(); ?>