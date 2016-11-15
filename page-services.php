<?php get_header();  ?>

<main>
  <section>
    <div class="servicesMain">
      <h1><?php the_field('services_main_headline') ?></h1>
      <p><?php the_field('services_main_text') ?></p>

    <div class="petTypeColumn">

      <?php while(have_rows('pet_type')) : the_row(); ?>
          <?php $petColour = get_sub_field('colour'); ?>
          <?php $icon = get_sub_field('icon') ?>
          <?php $petImage = get_sub_field('image') ?>
       
       <div class="petType">
        
        <div class="pet" style="border:<?php echo $petColour;?> 10px solid">
          <div class="icon"><img src="<?php echo $icon['url']; ?> " alt="<?php echo $icon['alt']; ?> "></div>
          <?php the_sub_field('headline') ?>
          <a href="<?php the_sub_field('button_link')?>" class="button"><?php the_sub_field('button_text') ?></a>
        </div>
        
        <div class="petImage">
           <img src="<?php echo $petImage['url']; ?> " alt="<?php echo $petImage['alt']; ?> ">
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <?php while(have_rows('dog_services_subcategories')) : the_row(); ?>
    <?php $dogServiceSubBG = get_sub_field('background_colour'); ?>
    <?php $dogIconSub = get_sub_field('dog_icon'); ?>
    <?php $serviceIconSub = get_sub_field('service_icon');?>
    <?php $servicesborder = get_sub_field('background_colour'); ?>
  
  <section class="dogServicesSubcategories" id="dog" style="background:<?php echo $dogServiceSubBG;?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <div class="iconBorder" style="border:<?php echo $servicesborder; ?> 10px solid">
          <img src="<?php echo $dogIconSub['url']; ?> " alt="<?php echo $dogIconSub['alt']; ?> ">
          <img src="<?php echo $serviceIconSub['url']; ?> " alt="<?php echo $serviceIconSub['alt']; ?> ">
        </div>
      </div>
      <div class="subcategories">
        <div class="subcategory1">
          <h3 class="uppercase"><?php the_sub_field('subcategory_headline_1') ?></h3>
          <h3><?php the_sub_field('subcategory_price_1') ?></h3>
          <p><?php the_sub_field('subcategory_intro_text_1') ?></p>
          <h4><?php the_sub_field('subcategory_details_title_1')?></h4>
          <?php the_sub_field('subcategory_details_1') ?>
        </div>
        <div class="subcategory2">
          <h3 class="uppercase"><?php the_sub_field('subcategory_headline_2') ?></h3>
          <h3><?php the_sub_field('subcategory_price_2') ?></h3>
          <p><?php the_sub_field('subcategory_intro_text_2') ?></p>
          <h4><?php the_sub_field('subcategory_details_title_2')?></h4>
          <?php the_sub_field('subcategory_details_2') ?>
        </div>
      </div>
    <div class="serviceButton"><a href="<?php the_sub_field('button_link') ?> " class="button"><?php the_sub_field('button_text') ?></a></div> 
    </div>
  </section> 
<?php endwhile; ?>

  <?php while(have_rows('dog_services')) : the_row(); ?>
    <?php $dogServiceBG = get_sub_field('background_colour'); ?>
    <?php $dogIcon = get_sub_field('pet_type_icon'); ?>
    <?php $serviceIcon = get_sub_field('service_icon');?>
    <?php $servicesborder = get_sub_field('background_colour'); ?>
  
  <section class="dogServices" style="background:<?php echo $dogServiceBG; ?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <div class="iconBorder" style="border:<?php echo $servicesborder; ?> 10px solid">
          <img src="<?php echo $dogIcon['url']; ?> " alt="<?php echo $dogIcon['alt']; ?> ">
          <img src="<?php echo $serviceIcon['url']; ?> " alt="<?php echo $serviceIcon['alt']; ?> ">
        </div>
      </div>
        <h3><?php the_sub_field('price') ?></h3>
        <p><?php the_sub_field('intro_text') ?></p>
        <h4><?php the_sub_field('details_title')?></h4>
        <?php the_sub_field('details') ?>
      <div class="serviceButton"><a href="<?php the_sub_field('button_link') ?> " class="button"><?php the_sub_field('button_text') ?></a></div>
    </div> 
  </section>
  <?php endwhile; ?>

  <?php $field = get_field_object('services_rotator_bg_colour');
  $testimonialbg = $field['value']; ?>

  <section class="testimonial" style="background:<?php echo $testimonialbg; ?>">
  <div class="carousel"  data-flickity='{"contain":true,"imagesLoaded":true,"freeScroll":true,"wrapAround": true, "pageDots":false,"lazyLoad":true, "autoPlay":7000, "pauseAutoPlayOnHover":false}'>
  <?php the_field('happy_pet_rotator', 'option'); ?>
    <?php while(have_rows('happy_pet', 'option')) : the_row(); ?>
      <div class="carousel-cell">
      
        <?php $testimonialImage = get_sub_field('image') ?>

          <h2 class="happyPet"><?php the_sub_field('pet_name') ?></h2>
          <div class="happyPetBorder"><div class="happyPetBG" style="border:<?php echo $testimonialbg; ?> 0px solid">
          <div class="happyPetImage"><img src="<?php echo $testimonialImage['url'] ?> " alt="<?php echo $testimonialImage['alt'] ?> "></div></div></div>
          <div class="text"><p><?php the_sub_field('testimonial') ?></p></div>
      
      </div>
      <?php endwhile; ?>
    </div>
  </section>

  <?php while(have_rows('cat_services_subcategories')) : the_row(); ?>
    <?php $catServiceSubBG = get_sub_field('background_colour'); ?>
    <?php $catIconSub = get_sub_field('cat_icon'); ?>
    <?php $serviceIconSubCat = get_sub_field('service_icon');?>
    <?php $servicesborder = get_sub_field('background_colour'); ?>
  
  <section class="catServicesSubcategories" id="cat" style="background:<?php echo $catServiceSubBG;?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <div class="iconBorder" style="border:<?php echo $servicesborder; ?> 10px solid">
          <img src="<?php echo $catIconSub['url']; ?> " alt="<?php echo $catIconSub['alt']; ?> ">
          <img src="<?php echo $serviceIconSubCat['url']; ?> " alt="<?php echo $serviceIconSubCat['alt']; ?> ">
        </div>
      </div>
      <div class="subcategories">
        <div class="subcategory1">
          <h3 class="uppercase"><?php the_sub_field('subcategory_headline_1') ?></h3>
          <h3><?php the_sub_field('subcategory_price_1') ?></h3>
          <p><?php the_sub_field('subcategory_intro_1') ?></p>
          <h4><?php the_sub_field('subcategory_details_title_1')?></h4>
          <?php the_sub_field('subcategory_details_1') ?>
        </div>
        <div class="subcategory2">
          <h3 class="uppercase"><?php the_sub_field('subcategory_headline_2') ?></h3>
          <h3><?php the_sub_field('subcategory_price_2') ?></h3>
          <p><?php the_sub_field('subcategory_intro_2') ?></p>
          <h4><?php the_sub_field('subcategory_details_title_2')?></h4>
          <?php the_sub_field('subcategory_details_2') ?>
        </div>
      </div>
     <div class="serviceButton"><a href="<?php the_sub_field('button_link') ?> " class="button"><?php the_sub_field('button_text') ?></a></div> 
    </div>
  </section> 
<?php endwhile; ?>

  <?php while(have_rows('cat_services')) : the_row(); ?>
    <?php $catServiceBG = get_sub_field('background_colour'); ?>
    <?php $catIcon = get_sub_field('pet_type_icon'); ?>
    <?php $serviceIconCat = get_sub_field('service_icon');?>
    <?php $servicesborder = get_sub_field('background_colour'); ?>
  
  <section class="catServices" style="background:<?php echo $catServiceBG;?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <div class="iconBorder" style="border:<?php echo $servicesborder; ?> 10px solid">
          <img src="<?php echo $catIcon['url']; ?> " alt="<?php echo $catIcon['alt']; ?> ">
          <img src="<?php echo $serviceIconCat['url']; ?> " alt="<?php echo $serviceIconCat['alt']; ?> ">
        </div>
      </div>
        <h3><?php the_sub_field('price') ?></h3>
        <p><?php the_sub_field('intro_text') ?></p>
        <h4><?php the_sub_field('details_title')?></h4>
        <?php the_sub_field('details') ?>
     <div class="serviceButton"><a href="<?php the_sub_field('button_link') ?> " class="button"><?php the_sub_field('button_text') ?></a></div> 
    </div> 
  </section>
<?php endwhile; ?>

</main>

<footer> 
    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
    <form action="//ottawapetsitter.us11.list-manage.com/subscribe/post?u=3f2951fc709e0df4cc42a6270&amp;id=03946e3136" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
      <h3><?php the_field('footer_opt_in_headline', 'option') ?></h3>
    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name">
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
    <input type="submit" value="<?php the_field('newsletter_button_text', 'option') ?> " name="subscribe" id="mc-embedded-subscribe" class="button">
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3f2951fc709e0df4cc42a6270_03946e3136" tabindex="-1" value=""></div>
      </div>
  </form>
    </div>
<?php get_footer(); ?>
</footer>