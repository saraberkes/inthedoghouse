<?php get_header();  ?>

<main>
  <section class="intro">
    <div class="container">
      <h1><?php the_field('services_main_headline') ?></h1>
      <p><?php the_field('services_main_text') ?></p>

      <?php while(have_rows('pet_type')) : the_row(); ?>
        <?php $petColour = get_sub_field('colour'); ?>
        <?php $icon = get_sub_field('icon') ?>
        <?php $petImage = get_sub_field('image') ?>

        <div class="pet" style="border:<?php echo $petColour;?> 10px solid">
          <img src="<?php echo $icon['url']; ?> " alt="<?php echo $icon['alt']; ?> ">
          <h3><?php the_sub_field('headline') ?></h3>
          <a href="<?php the_sub_field('button_link')?>"><?php the_sub_field('button_text') ?></a>
        </div>
        <img src="<?php echo $petImage['url']; ?> " alt="<?php echo $petImage['alt']; ?> ">
      <?php endwhile; ?>
    </div>
  </section>

  <?php while(have_rows('dog_services_subcategories')) : the_row(); ?>
    <?php $dogServiceSubBG = get_sub_field('background_colour'); ?>
    <?php $dogIconSub = get_sub_field('dog_icon'); ?>
    <?php $serviceIconSub = get_sub_field('service_icon');?>
  
  <section class="dogServicesSubcategories" style="background:<?php echo $dogServiceSubBG;?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <img src="<?php echo $dogIconSub['url']; ?> " alt="<?php echo $dogIconSub['alt']; ?> ">
        <img src="<?php echo $serviceIconSub['url']; ?> " alt="<?php echo $serviceIconSub['alt']; ?> ">
      </div>
      <div class="subcategory1">
        <h3><?php the_sub_field('subcategory_headline_1') ?></h3>
        <h3><?php the_sub_field('subcategory_price_1') ?></h3>
        <p><?php the_sub_field('subcategory_intro_text_1') ?></p>
        <h4><?php the_sub_field('subcategory_details_title_1')?></h4>
        <?php the_sub_field('subcategory_details_1') ?>
      </div>
      <div class="subcategory2">
        <h3><?php the_sub_field('subcategory_headline_2') ?></h3>
        <h3><?php the_sub_field('subcategory_price_2') ?></h3>
        <p><?php the_sub_field('subcategory_intro_text_2') ?></p>
        <h4><?php the_sub_field('subcategory_details_title_2')?></h4>
        <?php the_sub_field('subcategory_details_2') ?>
      </div>
     <a href="<?php the_sub_field('button_link') ?> "><?php the_sub_field('button_text') ?></a>
    </div>
  </section>

  <?php endwhile; ?> 

  <?php while(have_rows('dog_services')) : the_row(); ?>
    <?php $dogServiceBG = get_sub_field('background_colour'); ?>
    <?php $dogIcon = get_sub_field('pet_type_icon'); ?>
    <?php $serviceIcon = get_sub_field('service_icon');?>
  
  <section class="dogServices" style="background:<?php echo $dogServiceBG; ?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <img src="<?php echo $dogIcon['url']; ?> " alt="<?php echo $dogIcon['alt']; ?> ">
        <img src="<?php echo $serviceIcon['url']; ?> " alt="<?php echo $serviceIcon['alt']; ?> ">
      </div>
        <h3><?php the_sub_field('price') ?></h3>
        <p><?php the_sub_field('intro_text') ?></p>
        <h4><?php the_sub_field('details_title')?></h4>
        <?php the_sub_field('details') ?>

      <a href="<?php the_sub_field('button_link') ?> "><?php the_sub_field('button_text') ?></a>
    </div> 
  </section>
  <?php endwhile; ?>

  <?php $field = get_field_object('services_rotator_bg_colour');
  $testimonialbg = $field['value']; ?>

  <section class="testimonial" style="background:<?php echo $testimonialbg; ?>">
  <?php the_field('happy_pet_rotator', 'option'); ?>
    <?php while(have_rows('happy_pet', 'option')) : the_row(); ?>
      <div class="content">
      
        <?php $testimonialImage = get_sub_field('image') ?>
      
          <img src="<?php echo $testimonialImage['url'] ?> " alt="<?php echo $testimonialImage['alt'] ?> ">
          <h2><?php the_sub_field('pet_name') ?></h2>
          <p><?php the_sub_field('testimonial') ?></p>
      
      </div>
  </section>
  <?php endwhile; ?>

  <?php while(have_rows('cat_services_subcategories')) : the_row(); ?>
    <?php $catServiceSubBG = get_sub_field('background_colour'); ?>
    <?php $catIconSub = get_sub_field('cat_icon'); ?>
    <?php $serviceIconSubCat = get_sub_field('service_icon');?>
  
  <section class="catServicesSubcategories" style="background:<?php echo $catServiceSubBG;?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <img src="<?php echo $catIconSub['url']; ?> " alt="<?php echo $catIconSub['alt']; ?> ">
        <img src="<?php echo $serviceIconSubCat['url']; ?> " alt="<?php echo $serviceIconSubCat['alt']; ?> ">
      </div>
      <div class="subcategory1">
        <h3><?php the_sub_field('subcategory_headline_1') ?></h3>
        <h3><?php the_sub_field('subcategory_price_1') ?></h3>
        <p><?php the_sub_field('subcategory_intro_text_1') ?></p>
        <h4><?php the_sub_field('subcategory_details_title_1')?></h4>
        <?php the_sub_field('subcategory_details_1') ?>
      </div>
      <div class="subcategory2">
        <h3><?php the_sub_field('subcategory_headline_2') ?></h3>
        <h3><?php the_sub_field('subcategory_price_2') ?></h3>
        <p><?php the_sub_field('subcategory_intro_text_2') ?></p>
        <h4><?php the_sub_field('subcategory_details_title_2')?></h4>
        <?php the_sub_field('subcategory_details_2') ?>
      </div>
     <a href="<?php the_sub_field('button_link') ?> "><?php the_sub_field('button_text') ?></a>
    </div>
  </section>
  <?php endwhile; ?> 

  <?php while(have_rows('cat_services')) : the_row(); ?>
    <?php $catServiceBG = get_sub_field('background_colour'); ?>
    <?php $catIcon = get_sub_field('pet_type_icon'); ?>
    <?php $serviceIconCat = get_sub_field('service_icon');?>
  
  <section class="catServices" style="background:<?php echo $catServiceBG;?>">
    <div class="content">
      <h2><?php the_sub_field('headline') ?></h2>
      <div class="icons">
        <img src="<?php echo $catIcon['url']; ?> " alt="<?php echo $catIcon['alt']; ?> ">
        <img src="<?php echo $serviceIconCat['url']; ?> " alt="<?php echo $serviceIconCat['alt']; ?> ">
      </div>
        <h3><?php the_sub_field('price') ?></h3>
        <p><?php the_sub_field('intro_text') ?></p>
        <h4><?php the_sub_field('details_title')?></h4>
        <?php the_sub_field('details') ?>

      <a href="<?php the_sub_field('button_link') ?> "><?php the_sub_field('button_text') ?></a>
    </div>
  </section>
  <?php endwhile; ?> 

</main>

<footer> 
<h3><?php the_field('footer_opt_in_headline', 'option') ?></h3>
<form action="POST">
  <input type="text" placeholder="name">
  <input type="email" placeholder="email">
  <input type="submit" value="<?php the_field('footer_opt_in_button_text', 'option') ?> ">
</form>
<?php get_footer(); ?>
</footer>