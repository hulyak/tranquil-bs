<?php
/*
* The template for displaying comments
*/?>

<!-- set the styling with arguments 
https://developer.wordpress.org/reference/functions/comment_form/-->
<!-- => assigns to new value 
add bootstrap classes -->
<?php 
// if the post is password protected, return without loading up any comments
if(post_password_required()){
  return;
}
?>

<section>
  <?php if(have_comments() ): ?>
    <h2 class="py-3">
      <?php
       $number_of_comments = get_comments_number();
       if( $number_of_comments === 1 ) {
        printf(
          // %s make it plural ldquo -left double quotation 
          _x(
            'One comment on &ldquo;%s&rdquo;',
            'comments title'
          ),
          get_the_title()
        );
       } else {
        printf(
          _nx(
            '%1$s comment on &ldquo;%2$s&rdquo;',
            '%1$s comments on &ldquo;%2$s&rdquo;',
            $number_of_comments,
            'comments title'
          ),
          number_format_i18n($number_of_comments),
          get_the_title()
        );
       }
      ?>
    </h2>

    <ol>
      <?php 
      wp_list_comments(array(
        'style' => 'ol',
        'avatar_size' => 70
      ))
      ?>
    </ol>
  <?php endif; ?>
</section>


<?php 
$args = array(
  'title_reply' => '<div class="py-3">Reply or Comment</div>',

  'comment_field' => '
  <div class="form-group">
    <label for="comment">Comment *</label>
    <br />
    <textarea id="comment" name="comment" class="form-control"></textarea>
  </div>
  ',

  'submit_button' =>'
  <button type="submit" class="btn btn-primary">Submit</button>',

  'fields' => apply_filters('comment_form_default_fields', array(
    'author' => '
    <div class="form-group">
    <label for="author">Your name *</label>
    <input id="author" name="author" type="text" class="form-control">
     </div> 
    ',
    'email' => '
    <div class="form-group">
    <label for="email">Your email *</label>
    <input id="email" name="email" type="email" class="form-control">
     </div>
     '
  ))
);
comment_form($args);
?>