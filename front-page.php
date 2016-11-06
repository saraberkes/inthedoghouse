<?php get_header();  ?>

<main>
<section class="hero">
<div class="content">
	 <?php 
		$heroImage = get_field('hero_image');
		?> 
			<?php 
			/* this is to get the user input colours */
			$field = get_field_object('headline_speech_bubble_colour'); $speechbubble = $field['value']; ?> 
		<div class="headline" style="border:<?php echo $speechbubble; ?> 10px solid">
		<h1><?php the_field('main_headline') ?></h1>
		</div>
		
		<img src="<?php echo $heroImage['url']?>" alt="<?php echo $heroImage['alt'] ?> ">
	</div>
</section>

<?php $field = get_field_object('intro_background_colour');
$introbg = $field['value']; ?>

<section class="introText" style="background:<?php echo $introbg; ?>">
	<div class="content">
		<p><?php the_field('intro_text') ?></p>
	</div>
</section>

<section class="services content">
		<h2><?php the_field('services_headline', 'option') ?></h2>
		<div class="indService">
			<?php 
				while(have_rows('services', 'option')) : the_row();
			 ?>
				<div class="servicesIndividual">
				
				<?php $serviceIcon = get_sub_field('services_icon'); ?>
				
				<?php $servicesborder = get_sub_field('colour'); ?>
				
				<div class="servicesIcon" style="border:<?php echo $servicesborder; ?> 10px solid">
					<img src="<?php echo $serviceIcon['url'] ?> " alt="<?php echo $serviceIcon['alt'] ?> ">
					</div>
				
				<h3 style="color:<?php echo $servicesborder; ?> "><?php the_sub_field('services_title')?></h3>
				
				<p><?php the_sub_field('services_description')?></p>
				</div>
	<?php endwhile; ?>
	</div>
	<a href="<?php the_field('services_button_link', 'option') ?> " class="button"><?php the_field('services_button_text', 'option') ?></a>
</section>

<?php $field = get_field_object('home_rotator_bg_colour');
$testimonialbg = $field['value']; ?>

<section class="testimonial" style="background:<?php echo $testimonialbg; ?>"><div class="carousel"  data-flickity='{"contain":true,"imagesLoaded":true,"freeScroll":true,"wrapAround": true,"pageDots":false,"lazyLoad":true, "autoPlay":7000, "pauseAutoPlayOnHover":false}'>
<?php the_field('happy_pet_rotator', 'option'); ?>
	<?php while(have_rows('happy_pet', 'option')) : the_row(); ?>
		<div class="carousel-cell">
			<?php $testimonialImage = get_sub_field('image') ?>
		
				<h2 class="happyPet"><?php the_sub_field('pet_name') ?></h2>
				<div class="happyPetBorder"><div class="happyPetBG" style="border:<?php echo $testimonialbg; ?> 0px solid"><div class="happyPetImage"><img src="<?php echo $testimonialImage['url'] ?> " alt="<?php echo $testimonialImage['alt'] ?> "></div></div></div>
				<div class="text"><p><?php the_sub_field('testimonial') ?></p></div>
		
		</div>
	<?php endwhile; ?>
	</div>
</section>

<section class="instagram">
	<div class="container">
		<h2><?php the_field('instagram_headline') ?></h2>
	</div>
</section>

<?php $field = get_field_object('newsletter_background_colour', 'option');
$value = $field['value']; ?>

<section class="newsletter" style="background:<?php echo $value; ?> ">
	<div class="content">
		<h2><?php  the_field('newsletter_headline', 'option')?></h2>
		<p><?php the_field('newsletter_text', 'option') ?></p>
		<form action="POST">
			<input type="text" placeholder="Name">
			<input type="email" placeholder="Email">
			<input type="submit" value="<?php the_field('newsletter_button_text', 'option') ?> ">
		</form>
	</div>
</section>


</main>

<?php get_footer(); ?>