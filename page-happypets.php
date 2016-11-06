<?php get_header();  ?>

<main>
  <?php while(have_rows('pet_info')) : the_row(); ?>
    <?php $happypetBG = get_sub_field('background_colour') ?>
    <?php $petImage = get_sub_field('image') ?>
    <div class="testimonial" style="background:<?php echo $happypetBG?>">
      <div class="content">
        <h2 class="happyPet"><?php the_sub_field('pet_name') ?></h2>
        <div class="happyPetBorder"><div class="happyPetBG" style="border:<?php echo $happypetBG; ?> 0px solid"><div class="happyPetImage"><img src="<?php echo $petImage['url']; ?> " alt="<?php echo $petImage['alt']; ?> "></div></div></div>
        <p><?php the_sub_field('testimonial') ?></p>

      </div>
    </div>

  <?php endwhile; ?>

</main>

<footer> 
<h3><?php the_field('footer_opt_in_headline', 'option') ?></h3>
<form action="POST">
  <input type="text" placeholder="Name">
  <input type="email" placeholder="Email">
  <input type="submit" value="<?php the_field('footer_opt_in_button_text', 'option') ?> ">
</form>
<?php get_footer(); ?>
</footer>