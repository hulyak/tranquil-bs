
      <div class="py-3">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, corporis. Accusamus blanditiis corporis autem magnam consectetur dolorum optio molestiae ex fuga praesentium mollitia, dicta voluptatem. Numquam distinctio aut laboriosam odit.
        <hr>
      </p>
      </div>
<!-- change the dynamic contents-->
      <div class="py-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <!-- <li><a href="">June 2020</a></li>
          <li><a href="">May 2020</a></li>
          <li><a href="">April 2020</a></li> -->
          <?php wp_get_archives(); ?>
        </ol>
      </div>

      <div class="py-3">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">
          <!-- <li><a href="">News</a></li>
          <li><a href="">Offers</a></li> -->
          <?php wp_list_categories('title_li='); ?>
        </ol>
      </div>

      <div class="py-3">
        <h4 class="font-italic">Follow Us</h4>
        <a href="https://www.facebook.com/hulya.karakaya.144/">
          <i class="fab fa-facebook-square fa-2x"></i>
        </a>
        <a href="https://twitter.com/hulyakarakayaa">
          <i class="fab fa-twitter-square fa-2x"></i>
        </a>
        <i class="fab fa-instagram-square fa-2x"></i>
        <i class="fab fa-pinterest-square fa-2x"></i>
      </div>

