<?php get_header(); ?>

<div class="container-fluid nav-container-invert">
    <?php require 'parts/navbar.php'; ?>
</div>

<div class="col-12 col-lg-10 offset-lg-1 filterby-container">
    <h1>filter_portfolio_by();</h1>
    <?php wp_list_categories(); ?>
</div>

<div class="container-fluid feed-container">
    <div class="row">
            <?php require 'parts/post-content-archive.php' ?>
    </div>
</div>

<div class="col-12 col-lg-10 offset-lg-1 pagination-links">
    <?php previous_posts_link(); ?> 
    <?php next_posts_link(); ?>    
</div>

<?php get_footer(); ?>    