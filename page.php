<?php
/*
The template for displaying all single posts
*/
?>

<?php get_header() ?>

<!-- loop through blog posts  -->
<!-- https://developer.wordpress.org/themes/basics/the-loop/ -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content() ?>
<?php endwhile; else :  ?>
    <p><?php _e('Sorry, no pages matched your criteria'); ?></p>
<?php    
endif;
?>
<?php get_footer() ?>