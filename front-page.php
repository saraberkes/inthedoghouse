<?php get_header();  ?>

<main>
<section class="hero">
	 <?php 
		$heroImage = get_field('hero_image');
		?> 
			<?php 
			/* this is to get the user input colours */
			$field = get_field_object('headline_speech_bubble_colour'); $speechbubble = $field['value']; ?> 
		<div class="headline" span style="border:<?php echo $speechbubble; ?> 10px solid">
		<h1><?php the_field('main_headline') ?></h1></div>
		
		<img src="<?php echo $heroImage['url']?>" alt="<?php echo $heroImage['alt'] ?> ">
</section>

<?php $field = get_field_object('intro_background_colour');
$introbg = $field['value']; ?>

<section class="introText" style="background:<?php echo $introbg; ?>">
	<div class="content">
		<p><?php the_field('intro_text') ?></p>
	</div>
</section>

<section class="services">
<div class="content">
	<div class="indServices">
		<h2><?php the_field('services_headline', 'option') ?></h2>
			
			<?php 
				while(have_rows('services', 'option')) : the_row();
			 ?>
				<div class="servicesIndividual">
				
				<?php $serviceIcon = get_sub_field('services_icon'); ?>
				
				<?php $servicesborder = get_sub_field('colour'); ?>
				
				<div class="servicesIcon" style="border:<?php echo $servicesborder; ?> 10px solid">
					<img src="<?php echo $serviceIcon['url'] ?> " alt="<?php echo $serviceIcon['alt'] ?> ">
				</div>
				
				<h3><?php the_sub_field('services_title')?></h3>
				
				<p><?php the_sub_field('services_description')?></p>
			 
			 </div>
	<?php endwhile; ?>
	</div>
	<a href="<?php the_field('button_link') ?> "><?php the_field('button_text') ?></a>
</div>
</section>

<?php $field = get_field_object('home_rotator_bg_colour');
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
	<?php endwhile; ?>
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
			<input type="text" placeholder="name">
			<input type="email" placeholder="email">
			<input type="submit" value="<?php the_field('newsletter_button_text', 'option') ?> ">
		</form>
	</div>
</section>


</main>

<?php get_footer(); ?>