<p class="post__meta">
            Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
            par <?php the_author(); ?> • <?php comments_number(); ?>
        </p> -->
          <?php the_excerpt(); ?> -->
          
          <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>

        <h2 class="card-title"><?php the_title(); ?></h2>