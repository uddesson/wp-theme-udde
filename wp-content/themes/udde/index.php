<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'navbar.php'; ?>
    
    <?php require 'front-page-header-content.php'; ?>

</div> <!-- .front-page-header -->

<div class="row">

    <div class="col-lg-10 offset-lg-2 posts-main">

    <?php echo 'VARNING DET HÄR ÄR INDEX'; ?>
    
    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

</div> <!-- /.row -->

<?php get_footer(); ?>