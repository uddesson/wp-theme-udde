<?php get_header(); ?>

<div class="container-fluid nav-container-invert">
    <?php require 'parts/navbar.php'; ?>
</div>

<div class="container-fluid feed-container">
    <div class="row">
        <?php require 'parts/single-post-content.php'; ?>
    </div>
</div>
<?php get_footer(); ?>