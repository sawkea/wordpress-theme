<?php get_header(); ?>
<!-- Button retour page accueil -->
<div class="container">
    <div class="mt-5 mb-3 text-right"><a href="<?php echo home_url( '/' );?>"<i class="fas fa-chevron-circle-left"></i></a></div>
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <div class="post">
            <h2><?php the_title(); ?></h2>
      
            <?php the_content(); ?>
        </div>
    
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>