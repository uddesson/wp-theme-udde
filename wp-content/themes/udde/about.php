<!-- 
Template name: About 
-->

<?php get_header(); ?>

<div class="container-fluid nav-container">
	<?php require 'navbar.php'; ?>
</div>

	<div class="row">

		<div class="col-sm-8 posts-main">

		<h1> (Template: About) ah, about mig alltså </h1>
		<p><?php the_author_meta( 'description' ); ?></p>
		

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>