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