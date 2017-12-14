<!-- PORTFOLIO PAGE (POSTS-PAGE)-->

<?php get_header(); ?>

    <?php require 'navbar.php'; ?>

	<div class="row">
        
		<div class="col-sm-8 blog-main">

        <h1> Den här heter home.php men är min inläggssida "portfolio" </h1>

        
		<?php if ( have_posts() ) : 

                while ( have_posts() ) : the_post();
  	
                  get_template_part( 'content', get_post_format() );
  
                endwhile; 
            
        endif; ?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>