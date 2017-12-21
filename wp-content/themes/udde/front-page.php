<!-- 
Template name: Front-page
 -->

<?php get_header(); ?>

<div class="front-page-header">

    <?php require 'parts/navbar.php'; ?>
    
    <?php require 'parts/header-content-front-page.php'; ?>

</div> <!-- .front-page-header -->


<!-- Used for anchor link -->
<div id="jump-to-feed"></div>


<div class="container-fluid feed-container">    
    <div class="row">    

            <?php require 'parts/post-content-front-page.php' ?>

        </div> <!-- /.col-12 -->
</div> <!-- /feed-container -->


<div class="container-fluid author-container">
    <div class="row justify-content-md-center">
        <div class="col-10 col-md-3 offset-1 offset-md-0">
            <?php echo get_avatar($user_id = 1, $size='190', $alt='Avatar för Emma' );?>
        </div>
        <div class="col-10 col-md-4 offset-1 offset-md-1 offset-lg-0">
            <div class="small-authour-bio">
                <p><?php echo get_the_author_meta( 'description', $user_id = 1 ); ?></p>
                <ul>
                    <a href="https://github.com/uddesson" target="_blank"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/emmauddesson/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="mailto:emma.uddesson@gmail.com?Subject=Hello%20Emma" target="_top"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </ul>
            </div>
        </div>
    </div>
</div>    

<div class="front-footer">
    <?php get_footer(); ?>
</div>