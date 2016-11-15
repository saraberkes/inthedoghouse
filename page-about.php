<?php get_header();  ?>
<main>
	<section class="heroImage">
		<?php $aboutImage = get_field('about_main_image') ?>
		<img src="<?php echo $aboutImage['url']?>" alt="<?php echo $aboutImage['alt'] ?> ">
	</section>

	<section class="introTextWhite">
		<div class="content">
			<p><?php the_field('about_intro_text')?></p>
		</div>
	</section>

	<section class="meetTeam">
	<?php $meetTeamBG = get_field('meet_our_team_bg_colour') ?>
	<div class="meetTeamHeadline" style="background:<?php  echo $meetTeamBG?>">
	<h1><?php the_field('meet_our_team_headline') ?></h1>
	</div>

	<?php while(have_rows('first_team_member')) : the_row() ?>
		<?php $firstTeamBackground = get_sub_field('background_colour') ?>
		<?php $firstTeamPhoto = get_sub_field('image') ?>

		<div class="teamMember" style="background:<?php echo $firstTeamBackground; ?> ">
		<div class="content first">
			<div class="image">
				<div class="teamPhotoBorder">
					<div class="teamPhoto">
						<img src="<?php echo $firstTeamPhoto['url'] ?> " alt="<?php echo $firstTeamPhoto['alt'] ?> ">
					</div>
				</div>
			</div>
			<div class="teamText">
				<h3><?php the_sub_field('name') ?>, <?php the_sub_field('position') ?></h3>
				<p><?php the_sub_field('about') ?></p>
			</div>
		</div>
	</div>

<?php endwhile; ?>
	<?php $counter = 0;
		if(have_rows('team_members')): 
		while(have_rows('team_members')) : the_row() ?>
		<?php $teamBackground = get_sub_field('background_colour')?>
		<?php $teamPhoto = get_sub_field('image') ?>

<?php if ($counter % 2 === 0): ?>
	<div class="teamMember" style="background:<?php echo $teamBackground;?>">
		<div class="content even">
		<div class="image">
			<div class="teamPhotoBorder">
				<div class="teamPhoto">
					<img src="<?php echo $teamPhoto['url'] ?> " alt="<?php echo $teamPhoto['alt'] ?> ">
				</div>
			</div>
		</div>
		<div class="teamText">
			<h3><?php the_sub_field('name') ?>, <?php the_sub_field('position') ?></h3>
			<p><?php the_sub_field('about') ?></p>
		</div>
		</div>
	</div>
<?php else: ?>
	<div class="teamMember" style="background:<?php echo $teamBackground;?>">
		<div class="content odd">
		<div class="image">
			<div class="teamPhotoBorder">
				<div class="teamPhoto">
					<img src="<?php echo $teamPhoto['url'] ?> " alt="<?php echo $teamPhoto['alt'] ?> ">
				</div>
			</div>
		</div>
		<div class="teamText">
			<h3><?php the_sub_field('name') ?>, <?php the_sub_field('position') ?></h3>
			<p><?php the_sub_field('about') ?></p>
		</div>
		
		</div>

<?php endif; ?>

	<?php $counter++; endwhile; ?>

		</div>

<?php endif; ?>

	</section>

	<section class="services content">
			<?php get_template_part('services'); ?>
	</section>

	<?php $field = get_field_object('newsletter_background_colour', 'option');
	$value = $field['value']; ?>

	<section class="newsletter" style="background:<?php echo $value; ?> ">
	<?php get_template_part('newsletter'); ?>
	</section>

</main>
	


<?php get_footer(); ?>