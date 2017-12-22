<?php 
/*---------------------------------------------
 Custom changes and functions for theme Udde 
---------------------------------------------- */


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



/* Creates a custom setting in "Settings/General" */ 
$new_general_setting = new new_general_setting();

class new_general_setting {
    
  /* We tell WordPress to register new options, with admin-init WP knows it's safe to save the options */
  function new_general_setting( ) {
    add_action( 'admin_init' , array( &$this , 'register_fields' ) );
  }

  /* We tell WP which settings section we want it on and what to call it */  
  function register_fields() {
    register_setting( 'general', 'welcomemessage', 'esc_attr' );
    /* "esc_attr" makes sure the input is HTML and otherwise strips it of invalid or special characters */

    /* Output to the user in general settings */
    add_settings_field('welcomemessage', '<label for="welcomemessage">'.__('Welcome Message' , 
    'welcomemessage' ).'</label>' , array(&$this, 'fields_html') , 'general' );
  }
  
  /* Displays the field and description of the setting */ 
  function fields_html() {
    /* The users input in the text field is set to $value */
    $value = get_option( 'welcomemessage', '' );
    
    echo '<input type="text" id="welcomemessage" name="welcomemessage" class="regular-text ltr" 
    placeholder="Ex. Hello World" value="' . $value . '" />
    <p class="description"> Greet the visitor with one or two words, displayed on the front page. </p>';
  }
}