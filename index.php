<?php
/*
The main template file
*/
?>

<?php get_header() ?>

   <!-- welcome section -->
   <div class="container-fluid text-center py-5">
     <div class="row">
       <!-- offset to 3 to make the header centered -->
       <div class="col-md-6 offset-md-3"> 
         <h3>Welcome to Tranquil Spa</h3>
         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
       </div>
      </div>
      
       <div class="row mt-4 d-flex justify-content-around">
       <div class="col-sm-3">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/makeup.jpg" alt="makeup image" class="card-img-top rounded-circle">
        <div class="card-body">
          <p class="card-text">Hair &amp; make up </p>
        </div>
       </div>

       <div class="col-sm-3">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candles.jpg" alt="candles image" class="card-img-top rounded-circle">
        <div class="card-body">
          <p class="card-text">Spa facilities </p>
        </div>
       </div>

       <div class="col-sm-3">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/retreat.jpg" alt="retreat image" class="card-img-top rounded-circle">
        <div class="card-body">
          <p class="card-text">Take a tour</p>
        </div>
       </div>
     </div>
    </div>
   </div>

<!-- Offers  -->
   <div class="container-fluid text-center bg-dark py-5">
    <div class="row">
      <div class="col-md-6 offset-md-3"> 
        <h3 class="text-light">Latest Spa Offers</h3>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25">
    </div>
   </div>

   <div class="row">
   <div class="col-md-4">
     <div class="card">
      <h4 class="card-header py-5">Family swim package <span class="font-weight-bold">$60</span></h4>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Our most popular swim package, great value for families or groups up to 12 people </p>
        </blockquote>
    </div>
    <ul class="list-group">
      <li class="list-group-item font-italic">Up to 12 people</li>
      <li class="list-group-item font-italic">Private sessions</li>
      <li class="list-group-item font-italic">Swim lessons also available</li>
    </ul>
     </div>
  </div>

  <div class="col-md-4">
    <div class="card">
     <h4 class="card-header py-5">For the bride <span class="font-weight-bold">$40</span></h4>
     <div class="card-body">
       <blockquote class="blockquote mb-0">
         <p>Our wedding packages are perfect for your big day. We can cater for groups large or small </p>
       </blockquote>
   </div>
   <ul class="list-group">
     <li class="list-group-item font-italic">Hair &amp; make up</li>
     <li class="list-group-item font-italic">Groups of any size</li>
     <li class="list-group-item font-italic">Champagne &amp; cocktails available</li>
   </ul>
  </div>
 </div>

 <div class="col-md-4">
  <div class="card">
   <h4 class="card-header py-5">Weekend pass<span class="font-weight-bold">$60</span></h4>
   <div class="card-body">
     <blockquote class="blockquote mb-0">
       <p>Take full advantage of all of the facilities we have to offer with our unlimited weekend pass</p>
     </blockquote>
  </div>
 <ul class="list-group">
   <li class="list-group-item font-italic">Pool &amp; sauna</li>
   <li class="list-group-item font-italic">Full use of our gym</li>
   <li class="list-group-item font-italic">Includes 2 treatments per person</li>
 </ul>
  </div>
  </div>
  </div> <!-- row-->
  </div>  <!--closing container-->


  <!-- ABOUT US  -->
  <div class="container-fluid py-5 text-center bg-light">
    <div class="row">
      <div class="col-sm-6 offset-sm-3">
        <h3>About Us</h3>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum reprehenderit qui nihil voluptatibus facilis, inventore molestiae aliquam est maxime ipsa, corporis veritatis amet laborum. Natus cumque quae odit quia totam?
        Quas, aperiam! Quos praesentium perferendis voluptatum blanditiis, dolores magnam. Officia reiciendis consequuntur voluptatum tenetur vero! Odio nemo non aperiam totam ad. Architecto necessitatibus nihil eligendi corporis maxime quaerat commodi labore!
        Provident repellendus quae voluptates at optio explicabo quos doloremque odio accusantium omnis sapiente commodi nemo libero, voluptatum, quod fuga, quis rem quibusdam repellat praesentium ipsum numquam assumenda quaerat sint. Nemo.
        Et beatae accusantium a ipsa aliquid sunt nulla esse labore, odit pariatur ipsam nesciunt deserunt blanditiis commodi necessitatibus animi dolor, illum cupiditate quisquam accusamus iusto! Sunt expedita odio corrupti itaque.
        Neque natus quaerat odio dolor esse tempore facere repellendus quia ab qui facilis praesentium reprehenderit dicta corporis incidunt ex nemo molestiae quos aliquid enim saepe tenetur, labore sequi error? Laudantium!
        </p>
      </div>
    </div>
  </div>

  <!-- PRICE LIST SECTION -->
  <div class="container-fluid py-5 bg-dark">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 text-center">
        <h3 class="text-light">Price List</h3>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25">
      </div>
    </div>

    <div class="row my-4">
      <div class="col-sm-8">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/massage.jpg" alt="massage picture">
      </div>
      <div class="col-sm-4">
        <h4 class="title text-center">Massages</h4>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item">MASSAGE 1 <em>$10</em></li>
          <li class="list-group-item">MASSAGE 2 <em>$10</em></li>
          <li class="list-group-item">MASSAGE 3 <em>$10</em></li>
          <li class="list-group-item">MASSAGE 4 <em>$10</em></li>
          <li class="list-group-item">MASSAGE 5 <em>$10</em></li>
        </ul>
      </div>
    </div>

    <div class="row my-4">
      <div class="col-sm-4">
        <h4 class="title text-center">Facials</h4>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item">Facial 1 <em>$10</em></li>
          <li class="list-group-item">Facial 2 <em>$10</em></li>
          <li class="list-group-item">Facial 3 <em>$10</em></li>
          <li class="list-group-item">Facial 4 <em>$10</em></li>
          <li class="list-group-item">Facial 5 <em>$10</em></li>
        </ul>
    </div>
    <div class="col-sm-8">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facial.jpg" alt="facial picture">
    </div>

    <div class="col-sm-8">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/cosmetics.jpg" alt="cosmetics picture">
      </div>
      <div class="col-sm-4">
        <h4 class="title text-center">Hair &amp; make up</h4>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item">Hair styles 1 <em>$10</em></li>
          <li class="list-group-item">Hair styles 2 <em>$10</em></li>
          <li class="list-group-item">Hair styles 3 <em>$10</em></li>
          <li class="list-group-item">Hair styles 4 <em>$10</em></li>
          <li class="list-group-item">Hair styles 5 <em>$10</em></li>
        </ul>
      </div>
  </div>
</div>

 <?php get_footer() ?>