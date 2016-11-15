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