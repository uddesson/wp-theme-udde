<?php if ( have_posts() ) : ?>

    <!-- Loops out all posts (How many per page is set in Admin panel/Reading) -->
    <?php while ( have_posts() ) : the_post(); ?>
            
        <!-- Content in the loop -->
        <div class="col-10 col-md-5 offset-1 post-content">
            <div class="thumbnail-container">
                <div class="thumbnail">
                    <!-- Assigns link (to the post) to thumbnail -->
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ): 

                        /* Fetches the post thumbnail in wordpress-default-size called "medium large" 
                        and assigns it to my class thumbnail-image */
                        the_post_thumbnail('medium_large', array('class' => 'thumbnail-image')); 

                    endif; 
                    ?>
                    </a>
                </div> <!--./thumbnail -->
            </div> <!--./thumbnail-container -->
        </div> <!--.post-content -->

        <!-- Container for title, excerpt and read-more button (all with links to post) -->
        <div class="col-10 offset-1 col-md-5 offset-md-0 col-lg-4 preview-post-text-content">          
            <?php echo '<h2><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></h2>'; ?>
            <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></p></a>
            <a href="<?php the_permalink(); ?>" id="readmore">Read more</a>                           
        </div> 

    <?php endwhile;  ?>

<!-- Ends loop -->
<?php endif; ?>