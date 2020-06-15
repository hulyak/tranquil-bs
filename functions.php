<?php
/*
* Function definitions for Tranquil Spa theme
*/
?>

<?php
if(! isset($content_width)){
  $content_width = 660;
}

function tranquilwp_setup(){
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tranquilwp_setup');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  register_nav_menus( array(
    'primary' => __( 'Main header menu', 'tranquilwp' ),
) );
}
add_action( 'after_setup_theme', 'register_navwalker' );

function tranquil_scripts() {
  /* Add styles , can take up to 5 parameters*/
  wp_enqueue_style('bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css' );
  wp_enqueue_style('fontawesome', get_template_directory_uri() .'/css/font-awesome/css/all.min.css' );
  wp_enqueue_style('custom', get_template_directory_uri() .'/style.css' );
  
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js' , array('jquery'), null, true );

}
add_action('wp_enqueue_scripts' , 'tranquil_scripts');

// https://developer.wordpress.org/reference/hooks/excerpt_more/
// remove [] at the end of blog posts
function new_excerpt_text(){
   return '...';
}
add_filter('excerpt_more' , 'new_excerpt_text');

?>