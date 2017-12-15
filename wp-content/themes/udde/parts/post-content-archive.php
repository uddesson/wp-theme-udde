
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
            <?php echo '<h1><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></h1>'; ?>
            <p><?php the_excerpt(); ?></p>
            <a id=#readmore>Läs mer</a>                           
        </div>

    <?php endwhile;  ?>
            
    </div>

<!-- Ends loop -->
<?php endif; ?>