<?php get_header();  ?>
<main>

	<section class="introTextWhite">
		<div class="contact">
			<h1><?php the_field('contact_headline')?></h1>
			<p><?php the_field('contact_text') ?></p>
		</div>
	</section>

	<?php $field = get_field_object('book_background_colour');
				$bookBackground = $field['value']; ?>
		
	<section class="bookServices" style="background:<?php echo $bookBackground;?>">
		
		<div class="introText contact">
			<h2><?php the_field('book_headline') ?></h2>
			<p><?php the_field('book_text') ?></p>

			<?php while(have_rows('info_form_buttons')) : the_row(); ?>

				<a href="<?php the_sub_field('button_link') ?> " class="button"><?php the_sub_field('button_text') ?></a>

			<?php endwhile; ?>
		
		</div>

</section>

	<?php $field = get_field_object('contact_form_background_colour');
				$contactBackground = $field['value']; ?>
	
	<section class="contactForm" style="background:<?php echo $contactBackground; ?>">
		
		<div class="contact">
			<h2><?php the_field('contact_form_headline') ?></h2>
			<p><?php the_field('contact_form_text') ?></p>
			<div class="form"><?php the_field('form') ?></div>
		</div>
	</section>

</main>

<?php get_footer(); ?>