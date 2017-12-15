<?php if ( have_posts() ) : ?> 

<!-- Loops out all the posts -->
<?php while ( have_posts() ) : the_post(); ?>
    
    <!-- Content in the loop -->
    <div class="col post-content">
        <a><?php the_category(); ?></a>
        <div class="thumbnail">
            <?php 
            // the_post_thumbnail(); 
            ?>
        </div>
        <h1><?php the_title(); ?></h1> 
        <p><?php the_excerpt(); ?></p>   
        <p><?php the_content(); ?></p>                         
    </div>

    
<?php endwhile;  ?>


</div>

            <!-- Ends loop -->
            <?php endif; ?>