<?php get_header(); ?>
page items
<h1><?php the_title(); ?></h1>
      
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