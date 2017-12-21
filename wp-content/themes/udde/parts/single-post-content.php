<?php if ( have_posts() ) : ?> 

    <!-- Loops out the post -->
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Content in the loop -->
        <div class="col-10 offset-1 col-lg-8 offset-lg-2 content">
            <div class="post-categories">
                    <a><?php the_category('<a>/</a>'); ?></a>
            </div>

            <div class="content-thumbnail-container">
                <div class="col-12 content-thumbnail">
                
                    <?php 
                    if ( has_post_thumbnail() ): 

                        /* Fetches the post thumbnail in original resolution 
                        and assigns it to the class content-thumbnail-image, used for styling*/
                        the_post_thumbnail('full', array('class' => 'content-thumbnail-image')); 

                    endif; ?>
                
                </div> <!--./content-thumbnail-->
            </div> <!--./content-thumbnail-container-->   
            
            <!-- Fetches and formats title, excerpt and post content from database -->
            <h1><?php the_title(); ?></h1> 
            <p><?php the_excerpt(); ?></p>   
            <p><?php the_content(); ?></p>

        </div> <!-- ./content -->

    <?php endwhile;  ?>

<!-- Ends loop -->
<?php endif; ?>