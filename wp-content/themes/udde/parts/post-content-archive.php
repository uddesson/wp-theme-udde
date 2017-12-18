<?php if ( have_posts() ) : ?>

    <!-- Loops out all the posts -->
    <?php while ( have_posts() ) : the_post(); ?>
            
        <!-- Content in the loop -->
        
        <div class="col-10 col-md-5 offset-1 post-content">
            <div class="thumbnail-container">
                <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ): 

                        /* Fetches the post thumbnail in wordpress-default-size called "medium large" 
                        and assigns it to my class thumbnail-image */
                        the_post_thumbnail('medium_large', array('class' => 'thumbnail-image')); 

                    endif; ?>
                    </a>
                </div> <!--./thumbnail-->
            </div> <!--./thumbnail-container-->
        </div> <!--.col-6>-->
        <div class="col-10 offset-1 col-md-4 offset-md-0">          
        <?php echo '<h2><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></h2>'; ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></p></a>
        <a href="<?php the_permalink(); ?>" id="readmore">Läs mer</a>                           
    </div> 
    

    <?php endwhile;  ?>
            
    

<!-- Ends loop -->
<?php endif; ?>