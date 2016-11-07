<?php get_header(); ?>

<div class="main">
  <div class="container">

    <h1>Oops!</h1>
    <p>That page doesn't seem to exist! Why don't you <a href="page-services.php">check out our services</a> or <a href="page-about.php">learn more about us?</a></p>
		 <?php $heroImage = get_field('hero_image'); ?> 
    <img src="<?php echo $heroImage['url']; ?> " alt="<?php echo $heroImage['alt']; ?> ">

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>