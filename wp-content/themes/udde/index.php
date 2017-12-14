<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'navbar.php'; ?>
    
    <?php require 'front_page_header_content.php'; ?>

</div> <!-- .front-page-header -->

<div class="row">

    <div class="col-sm-8 blog-main">

    <?php echo 'VARNING DET HÄR ÄR INDEX'; ?>
    
    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

</div> <!-- /.row -->

<?php get_footer(); ?>