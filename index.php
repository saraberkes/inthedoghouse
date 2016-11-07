<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main>
  <div class="blogContent">
    <div class="blogPosts">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.blog posts -->
		
		<div class="sidebar">
    <?php get_sidebar(); ?>
		</div>
  </div> 
</main>

<?php get_footer(); ?>