<!-- Menu listant les catégories -->

<div class="relative">
    <div class="dropdown active mt-5">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Catégories
      </a>
    
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <?php
                 wp_list_categories (
                    array(
                        'theme_location' => 'category',
                        'menu_class' => 'dropdown-item', 
                        // 'depth' => 1,
                    )
                );
            
            ?>
      </div>
    </div> 
    
</div>