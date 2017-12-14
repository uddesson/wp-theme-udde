<!-- PORTFOLIO PAGE (POSTS-PAGE)-->

<?php get_header(); ?>

<div class="container-fluid nav-container">
    <?php require 'parts/navbar.php'; ?>
</div>

<div class="container-fluid feed-container">
    <div class="row">
        <div class="col-10 col-lg-7 offset-lg-1">

            <?php if ( have_posts() ) : ?>

                <!-- Loops out all the posts -->
                <?php while ( have_posts() ) : the_post(); ?>
                        
                    <!-- Content in the loop -->
                    <div class="col post-content">
                        <a><?php the_category(); ?></a>
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
                        <?php echo '<h1><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></h1>'; ?>
                        <p><?php the_excerpt(); ?></p>
                        <a id=#readmore>Läs mer</a>                           
                    </div>
        
                <?php endwhile;  ?>
                        
        </div>

            <!-- Ends loop -->
            <?php endif; ?>

        <div class="col-lg-3 sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>