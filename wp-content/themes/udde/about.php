<!-- 
Template name: Page with sidebar
-->

<?php get_header(); ?>

<div class="container-fluid nav-container-invert">
	<?php require 'parts/navbar.php'; ?>
</div>

<!-- This row contains both content and sidebar -->
<div class="row"> 
	
	<div class="col-7 offset-1 content">
		<?php require 'parts/page-content.php'; ?>
	</div> 
	
	<div class="col-3">
		<!-- Displays the content of the sidebar -->
		<?php get_sidebar(); ?>
	</div>

</div> <!-- /.row -->

<?php get_footer(); ?>