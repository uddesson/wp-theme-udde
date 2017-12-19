<?php 
/* Custom changes and functions for theme Udde */

/* Adds the option of adding post-thubnails in theme, using pre defined WP-function */
add_theme_support('post-thumbnails');

/* Changing the pattern of the WP-function wp_list_pages 
adding a separator between page-links - and nothing after or before first/last link
Reference: https://www.rarescosma.com/2010/02/link-separator-for-wp_list_pages/ */
$args = array(
    'sort_column' => 'menu_order',
    'title_li' => '',
    'depth' => '1',
    'echo' => 0
  );
  $separator = ' / ';
  $pattern = '/(<\\/a>).*?(<\\/li>).*?(<li)/is';
  $replace = '</a>' . $separator . '</li><li';
  
  /* This is all saved into a new variable called $navbar, which is fetched in navbar.php*/
  $navbar = preg_replace($pattern,$replace,wp_list_pages($args));
