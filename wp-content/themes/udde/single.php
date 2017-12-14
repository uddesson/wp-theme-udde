<!-- Single post page -->
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
                        <div class="thumbnail">
                            <?php 
                            // the_post_thumbnail(); 
                            ?>
                        </div>
                        <h1><?php the_title(); ?></h1> 
                        <p><?php the_excerpt(); ?></p>   
                        <p><?php the_content(); ?></p>
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