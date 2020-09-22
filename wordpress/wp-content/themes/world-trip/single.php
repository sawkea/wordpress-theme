<?php get_header(); ?>
page single
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="post">
        <h2><?php the_title(); ?></h2>
  
        <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>