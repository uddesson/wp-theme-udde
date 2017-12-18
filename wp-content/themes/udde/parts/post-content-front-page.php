<!-- Content of blog posts -->

<!-- Creates a new query to display only four posts when front page-template page is used.  -->
<?php $display_four_posts = new WP_Query( 'no_found_rows=true&posts_per_page=4' ); 

/*Also uses 'no_found_rows=true' to avoid the loop from counting the total matching rows in db,
which could slow down the site when db has more content.
On the topic I found this helpful: https://flavio.tordini.org/speed-up-wordpress-get_posts-and-query_posts-functions
*/

if ( $display_four_posts->have_posts() ) : ?>
    <div class="row justify-content-md-center">

        <!-- Loop -->
        <?php  while ( $display_four_posts->have_posts() ) : $display_four_posts->the_post(); ?>
    
            <!-- Content in the loop -->
            <div class="col-10 col-md-8 col-lg-5 offset-1 offset-md-0 post-content">
                <div class=post-categories>
                    <a><?php the_category('<a>/</a>'); ?></a>
                </div>
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
                <?php echo '<h2><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></h2>'; ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></p></a>
                <a href="<?php the_permalink(); ?>" id="readmore">Läs mer</a>                           
            </div> 

        <?php endwhile;  ?>
    
    </div> <!-- .row  -->
    
<!-- Ends loop -->
<?php endif; ?>
