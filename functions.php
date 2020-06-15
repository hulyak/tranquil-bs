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

function tranquil_scripts() {
  /* Add styles , can take up to 5 parameters*/
  wp_enqueue_style('bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css' );
  wp_enqueue_style('fontawesome', get_template_directory_uri() .'/css/font-awesome/css/all.min.css' );
  wp_enqueue_style('custom', get_template_directory_uri() .'/style.css' );
  
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js' , array('jquery'), null, true );

}
add_action('wp_enqueue_scripts' , 'tranquil_scripts')
?>