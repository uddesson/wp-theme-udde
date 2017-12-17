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

                        //Creates array that points to the source of the posts thumbnail
                        $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
                        //Sets class to img src which now can be styled directly via class
                        echo '<img class="thumbnail-image" src="' . $image_src[0] . '">';
                            
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