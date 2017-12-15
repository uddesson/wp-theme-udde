<?php get_header(); ?>

<div class="container-fluid nav-container">
    <?php require 'parts/navbar.php'; ?>
</div>

<?php echo 'DET HÄR ÄR ARKIV'; ?>

<div class="container-fluid feed-container">
    <div class="row">
        <div class="col-10 col-lg-7 offset-lg-1"> <!-- This tag is closed whithin the loop in parts -->
            <?php require 'parts/post-content-archive.php' ?>

        <div class="col-lg-3 sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>    