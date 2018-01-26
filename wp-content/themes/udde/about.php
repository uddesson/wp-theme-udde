<!-- 
Template name: Page with sidebar
-->

<?php get_header(); ?>

<div class="container-fluid nav-container-invert">
	<?php require 'parts/navbar.php'; ?>
</div>

<div class="row"> 
	
	<div class="col-10 col-lg-7 offset-1 content">
		<?php require 'parts/page-content.php'; ?>
	</div> 
	

</div> <!-- /.row -->

<?php get_footer(); ?>    