<?php
/*
The main template file
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
          <!-- read more link in title-->
          <a href="<?php the_permalink(); ?>">
          <h2><?php the_title(); ?></h2>
          </a>
          <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author();?></a></p>
          <div class="pb-2">
            <i class="fas fa-tags"></i>
            <p class="d-inline"><?php the_tags('Tagged: ', ' ~ ')?></p>
          </div>
          <p><?php the_excerpt() ?></p>
          <!--read more link -->
          <div class="mb-3">
            <a href="<?php the_permalink(); ?>">
              <?php _e('Read more...') ?>
            </a>
          </div>
        </div>
        <?php endwhile; else :  ?>

        <nav>
          <ul class="nav">
            <li>Next Page</li> &nbsp; 
            <li>Previous Page</li>
          </ul>
        </nav>
      </div>  

    <aside class="col-sm-4">
      <div class="py-3">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, corporis. Accusamus blanditiis corporis autem magnam consectetur dolorum optio molestiae ex fuga praesentium mollitia, dicta voluptatem. Numquam distinctio aut laboriosam odit.
        <hr>
      </p>
      </div>

      <div class="py-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="">June 2020</a></li>
          <li><a href="">May 2020</a></li>
          <li><a href="">April 2020</a></li>
        </ol>
      </div>

      <div class="py-3">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="">News</a></li>
          <li><a href="">Offers</a></li>
        </ol>
      </div>

      <div class="py-3">
        <h4 class="font-italic">Follow Us</h4>
        <i class="fab fa-facebook-square fa-2x"></i>
        <i class="fab fa-twitter-square fa-2x"></i>
        <i class="fab fa-instagram-square fa-2x"></i>
        <i class="fab fa-pinterest-square fa-2x"></i>
      </div>

    </aside>


    </div> <!-- closing row -->
   </main>  <!-- container -->



    <p><?php _e('Sorry, no posts matched your criteria'); ?></p>
<?php    
endif;
?>
<?php get_footer() ?>