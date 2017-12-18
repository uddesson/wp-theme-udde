<?php if ( have_posts() ) : ?> 

    <!-- Loops out the post -->
    <?php while ( have_posts() ) : the_post(); ?>
        
    <!-- Content in the loop -->
    <div class="col-10 offset-1 single-post-content">
        <div class=post-categories>
                <a><?php the_category('<a>/</a>'); ?></a>
        </div>

        <div class="single-post-thumbnail-container">
            <div class="single-post-thumbnail">
            
                <?php 
                if ( has_post_thumbnail() ): 

                    /* Fetches the post thumbnail in original resolution 
                    and assigns it to my class single-post-thumbnail-image */
                    the_post_thumbnail('full', array('class' => 'single-post-thumbnail-image')); 

                endif; ?>
            
            </div> <!--./single-post-thumbnail-->
        </div> <!--./single-post-thumbnail-container-->   
        
        <!-- Fetches and formats title, excerpt and post content from database -->
        <h1><?php the_title(); ?></h1> 
        <p><?php the_excerpt(); ?></p>   
        <p><?php the_content(); ?></p>                           
    </div> <!-- ./single-post-content -->
        
    <?php endwhile;  ?>

<!-- Ends loop -->
<?php endif; ?>