<!-- To use the function the_content, which echos the page content,
we must also use this while-loop --> 
<?php while ( have_posts() ) : the_post(); ?>
            
    <!-- Checks if page has thumbnail/featured image -->
    <?php if ( has_post_thumbnail() ): ?>

        <div class="content-thumbnail-container">
            <div class="col-12 content-thumbnail">

                <?php 
                /* Fetches the (optional) page thumbnail in original resolution 
                and assigns it to the class single-post-thumbnail-image */
                the_post_thumbnail('full', array('class' => 'content-thumbnail-image')); 
                ?>

            </div> <!--./page-thumbnail-->
        </div> <!--./page-thumbnail-container -->   

    <?php endif; ?>

<!-- Displays the content of the page -->
<?php the_content(); ?>

<!-- Ends loop -->
<?php endwhile; ?>