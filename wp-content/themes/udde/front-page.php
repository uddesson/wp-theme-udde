<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'parts/navbar.php'; ?>
    
    <?php require 'parts/header-content-front-page.php'; ?>

</div> <!-- .front-page-header -->

<div class="container-fluid author-container">
    <div class="row justify-content-md-center">
        <div class="col-10 col-md-3">
            <?php echo get_avatar($user_id = 1, $size='190', $alt='Avatar för Emma' );?>
        </div>
        <div class="col-10 col-md-4 offset-1 offset-md-0">
            <div class="small-authour-bio">
                <h2>Hej</h2>
                <p><?php echo get_the_author_meta( 'description', $user_id = 1 ); ?></p>
                <ul>
                    <i class="fa fa-github-alt" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid feed-container">
    <div class="row">
        <div class="col-12">
            <h1 id="latest-headline">Mina senaste projekt:</h1>

            <?php require 'parts/post-content-front-page.php' ?>

        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container posts-main-container -->

<?php get_footer(); ?>