<?php 
/*
* The template for displaying all the blog posts 
*/
?>

<?php get_header() ?>

<!-- loop through blog posts  -->
<!-- https://developer.wordpress.org/themes/basics/the-loop/ -->
<!-- BLOG SECTION -->
<main class="container-fluid py-5">
    <div class="row">
      <div class="col-sm-8">
<!-- make blog posts dynamic instead of hard coding the html -->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div>
        
          <h2><?php the_title(); ?></h2>
  
          <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author();?></a></p>
          <div class="pb-2">
            <i class="fas fa-tags"></i>
            <p class="d-inline"><?php the_tags('Tagged: ', ' ~ ')?></p>
          </div>
          <p><?php the_content() ?></p>
          <!-- show other  pages  -->
            <?php wp_link_pages(); ?>
        </div>
        <?php endwhile; else :  ?>


    <p><?php _e('Sorry, no posts matched your criteria'); ?></p>
<?php    
endif;
?>

<!-- create comment section under post -->
<?php 
if(comments_open() || get_comments_number()):
  comments_template();
endif;
?>

    <nav>
          <ul class="nav">
            <li><?php next_post_link(); ?></li> &nbsp; 
            <li><?php previous_post_link(); ?></li>
          </ul>
        </nav>

      </div> 
<!-- sidebar-dark.php  -> get_sidebar('dark') -->
      <aside class="col-sm-4">
      <?php get_sidebar(); ?>
    </aside>
    
    </div> <!-- closing row -->
   </main>  <!-- container -->

<!-- Footer section -->
<?php get_footer() ?>