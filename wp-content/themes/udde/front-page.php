<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'parts/navbar.php'; ?>
    
    <?php require 'parts/header-content-front-page.php'; ?>

</div> <!-- .front-page-header -->

<div class="container-fluid feed-container">
    <div class="row">
        <div class="col-12">

            <?php require 'parts/post-content-front-page.php' ?>

        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container posts-main-container -->

<?php get_footer(); ?>