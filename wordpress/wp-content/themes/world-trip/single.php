<?php get_header(); ?>
<!-- Button retour page accueil -->
<div class="mt-5 mb-3 text-right"><a href="<?php echo home_url( '/' );?>"<span class="fas fa-chevron-circle-left"></span></a></div>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="post">
        <h2><?php the_title(); ?></h2>
  
        <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>