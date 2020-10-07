<?php get_header(); ?>

<!-- Pour version desktop -->
<!-- <h1><div class="mx-auto"><img class="img-fluid mt-5 mb-5" src="<?php echo get_template_directory_uri(); ?>/img/photo-hero.png" alt="Image hero"></div></h1>
<p id="text-header">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, aliquam aut. Explicabo nam a eum quaerat quod voluptatibus, sapiente corrupti dolores velit amet hic iure facilis numquam similique impedit possimus!</p>
    
<div id="about" class="mt-10"><?php the_content(); ?></div> -->

<!-- <h1><div class="mx-auto"><img class="img-fluid mt-5 mb-5" src="<?php echo get_template_directory_uri(); ?>/img/photo-hero.png" alt="Image hero"></div></h1>
<p id="text-header">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, aliquam aut. Explicabo nam a eum quaerat quod voluptatibus, sapiente corrupti dolores velit amet hic iure facilis numquam similique impedit possimus!</p>
    
<div id="about" class="mt-10"><?php the_content(); ?></div> -->

<!-- section HOME ---------------------------------------------------------------->
<section class="container">
    <h2 id="text-header" class="text-justify mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit, uibusdam, aliquam aut. Explicabo nam a eum quaerat quod voluptatibus, sapiente corrupti amet hic iure facilis similique impedit possimus !</h2>
        
    <div class="mx-auto"><img class="img-fluid mt-5 mb-5" src="<?php echo get_template_directory_uri(); ?>/img/photo-hero.png" alt="Image hero"></div>
</section>
    </div>


<!-- section ABOUT --------------------------------------------------------------->
<section>
    <?php get_template_part('parts/about', 'page') ?>
</section>


    
<!-- Section RECENT POST  -------------------------------------------------------->
<section class="container mt-10">

    <!-- Menu CATEGORIES ---------------------------->
    <div><?php get_template_part('parts/menu-categories', 'menu') ?></div>

    <h2>RECENT POST</h2>
    <!-- ligne du titre---------->
    <div class="title-line"></div>
        <div class="row">
            <div class="mt-5 mx-auto">
                <?php
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=4');
                ?>
                <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="post__link"><div class="mb-2"><?php the_post_thumbnail('medium', ['class' => 'col-12', 'alt'=>'', 'style' => 'height : auto;']); ?></div></a>
                    </div>
                <?php endwhile; ?>
            </div>
            
        </div>
</section>



<!-- section GOLDEN BOOK  ------------------------------------------------------->
<section>
    <div><?php get_template_part('parts/golden-book', 'page') ?></div>
</section>



<?php get_footer(); ?>