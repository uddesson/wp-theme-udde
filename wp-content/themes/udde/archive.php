<!-- 
Template name: Archive view
 -->

<?php get_header(); ?>

<div class="container-fluid nav-container-invert">
    <?php require 'parts/navbar.php'; ?>
</div>


<div class="container-fluid feed-container">

  <div class="col-10 offset-1 offset-lg-2 filterby-container">
      <h1>filter_portfolio_by();</h1>

      <!-- Displays all categories that has posts in them -->
      <?php wp_list_categories('title_li='); ?>
  </div>

    <div class="row">
        <?php require 'parts/post-content-archive.php' ?>
    </div>
</div>
        

<div class="col-10 offset-1 pagination-links">
    <?php previous_posts_link(); ?> 
    <?php next_posts_link(); ?>    
</div>

<?php get_footer(); ?>    