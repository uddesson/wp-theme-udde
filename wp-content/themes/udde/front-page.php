<!-- 
Template name: Front Page
-->

<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'navbar.php'; ?>
    
    <?php require 'front-page-header-content.php'; ?>

</div> <!-- .front-page-header -->

<div class="container posts-main-container">
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

                <div class="container posts-container">
                    <div class="row">

                        <!-- Loop -->
                        <?php  while ( $display_four_posts->have_posts() ) : $display_four_posts->the_post(); ?>
                    
                            <!-- Content in the loop -->
                            <div class="col-10 col-md-8 col-lg-4 offset-1 offset-md-2 offset-lg-1 post-content">
                                <a class="categoryid"><?php the_category(); ?></a>
                                <div class="thumbnail">
                                    <?php 
                                    // the_post_thumbnail(); 
                                    ?>
                                </div>
                                <h1><?php the_title(); ?></h1>    
                                <p><?php the_excerpt(); ?></p>
                                <a id=#readmore>Läs mer</a>                           
                            </div>
                
                        <?php endwhile;  ?>
                    
                    </div> <!-- .row  -->
                </div> <!-- .post-container -->

            <!-- Ends loop -->
            <?php endif; ?>

        </div> <!-- /.blog-main -->

    </div> <!-- /.row -->
</div>

<?php get_footer(); ?>