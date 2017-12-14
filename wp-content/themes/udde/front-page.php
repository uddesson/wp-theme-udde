<!-- 
Template name: Front Page
-->

<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'navbar.php'; ?>
    
    <?php require 'front-page-header-content.php'; ?>

</div> <!-- .front-page-header -->

<div class="row">

    <div class="col-lg-10 posts-main-wrapper">

        <?php 
        /** Creates a new query to display only four posts when this template page is used.
        Also uses 'no_found_rows=true' to avoid the loop from counting the total matching rows in db,
        which could slow down the site when db has more content.
        On the topic I found this helpful: https://flavio.tordini.org/speed-up-wordpress-get_posts-and-query_posts-functions
        **/
        $display_four_posts = new WP_Query( 'no_found_rows=true&posts_per_page=4' ); 

        if ( $display_four_posts->have_posts() ) : ?>

            <div class="container post-container">
                <div class="row">

                    <!-- Loop -->
                    <?php  while ( $display_four_posts->have_posts() ) : $display_four_posts->the_post(); ?>
                
                        <!-- Content in the loop -->
                        <div class="col-5 post-content">
                            <?= the_category(); ?>
                            <?= the_post_thumbnail(); ?>
                            <p> <?= the_content(); ?> </p>    
                            <h1> <?= the_title(); ?> </h1>                                                             
                        </div>
            
                    <?php endwhile;  ?>
                
                </div> <!-- .row  -->
            </div> <!-- .post-container -->

        <!-- Ends loop -->
       <?php endif; ?>

    </div> <!-- /.blog-main -->

</div> <!-- /.row -->

<?php get_footer(); ?>