<?php get_header(); ?>

<div class="container-fluid nav-container">
    <?php require 'parts/navbar.php'; ?>
</div>

<?php echo 'DET HÄR ÄR PORTFOLIO/HOME'; ?>

<div class="container-fluid feed-container">
    <div class="row">
            <?php require 'parts/post-content-archive.php' ?>
    </div>
</div>

<div class="pagination-links">
    <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?>
</div>

<?php get_footer(); ?>    