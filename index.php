<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="blogPosts">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.blog posts -->
		
		<div class="sidebar">
    <?php get_sidebar(); ?>
		</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>