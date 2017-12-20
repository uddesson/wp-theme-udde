<!-- To use the function the_content, which echos the page content,
we must also use this while-loop --> 
<?php while ( have_posts() ) : the_post(); ?>

    <div class="content-thumbnail-container">
        <div class="col-12 content-thumbnail">
            
            <!-- Checks if page has thumbnail/featured image -->
            <?php if ( has_post_thumbnail() ): 

                /* Fetches the (optional) page thumbnail in original resolution 
                and assigns it to the class single-post-thumbnail-image */
                the_post_thumbnail('full', array('class' => 'content-thumbnail-image')); 

            endif; ?>

        <!-- Displays the content of the page -->
        <?php the_content(); ?>
        
        </div> <!--./page-thumbnail-->
    </div> <!--./page-thumbnail-container -->   

<!-- Ends loop -->
<?php endwhile; ?>