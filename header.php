<?php 
/*
*The header four our theme
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FONT AWESOME -->
   <!-- <link rel="stylesheet" href="css/font-awesome/css/all.min.css"> -->

     <!-- Custom Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet"> -->
    
    <!-- Custom CSS -->
     <!-- <link rel="stylesheet" href="css/custom.css"> --> 

    <!-- <title>Tranquil Spa</title> -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>
   <header>
     <nav class="navbar navbar-expand-md navbar-light bg-light">
       <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><?php echo get_bloginfo('name') ?></a>
       <!-- dropdown -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
         <span class="navbar-toggler-icon"></span>
       </button>
       <!-- <div class="collapse navbar-collapse " id="navbarNav"> -->
         <!-- <ul class="navbar-nav">
           <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
           <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
         </ul> -->
         <!-- https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->
         <?php wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse justify-content-end',
    'container_id'    => 'navbarNav',
    'menu_class'      => 'navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>
       <!-- </div> -->
     </nav>

     <section class="container-fluid">
        <div class="row position-relative d-flex justify-content-center align-items-center text-center">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lake.jpg" alt="lake background" class="header_img">
          <div class="position-absolute feature-bg">
            <p class="feature-text"><?php featureText();?></p>
          </div>
        </div>
     </section>

   </header>
