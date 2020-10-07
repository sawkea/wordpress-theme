<?php get_header(); ?>

<div class="container">
    
    <!-- Menu CATEGORIES ------------------------------------------------------------->
    <?php get_template_part('parts/menu-categories', 'menu') ?>
        
    <!-- The ITEMS  ------------------------------------------------------------->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <div class="post card mb-2">
        
            <a href="<?php the_permalink(); ?>" class="post__link">
                <div class="card-img-top rounded mx-auto d-block"><?php the_post_thumbnail('medium'); ?></div>
            </a>
      
        </div>

<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>