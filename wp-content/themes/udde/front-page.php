<!-- 
Template name: Front Page
-->

<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'parts/navbar.php'; ?>
    
    <?php require 'parts/front-page-header-content.php'; ?>

</div> <!-- .front-page-header -->

<div class="container-fluid feed-container">
    <div class="row">
        <div class="col-12">

            <?php 
            /** Creates a new query to display only four posts when this template page is used.
            Also uses 'no_found_rows=true' to avoid the loop from counting the total matching rows in db,
            which could slow down the site when db has more content.
            On the topic I found this helpful: https://flavio.tordini.org/speed-up-wordpress-get_posts-and-query_posts-functions
            **/
            $display_four_posts = new WP_Query( 'no_found_rows=true&posts_per_page=4' ); 

            if ( $display_four_posts->have_posts() ) : ?>
                <div class="row">

                    <!-- Loop -->
                    <?php  while ( $display_four_posts->have_posts() ) : $display_four_posts->the_post(); ?>
                
                        <!-- Content in the loop -->
                        <div class="col-10 col-md-8 col-lg-4 offset-1 offset-md-2 offset-lg-1 post-content">
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
                
                </div> <!-- .row  -->
                
            <!-- Ends loop -->
            <?php endif; ?>

        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container posts-main-container -->

<?php get_footer(); ?>