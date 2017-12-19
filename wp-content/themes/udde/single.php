<!-- Single post page -->
<?php get_header(); ?>

<div class="container-fluid nav-container-invert">
    <?php require 'parts/navbar.php'; ?>
</div>

<div class="container-fluid feed-container">
    <div class="row">
        <div class="col-10 col-lg-7 offset-lg-1"> <!-- This tag is closed whithin the loop in parts -->

            <?php require 'parts/single-post-content.php'; ?>
        
    </div>
</div>
<?php get_footer(); ?>