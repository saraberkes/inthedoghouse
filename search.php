<?php get_header(); ?>
<div class="main">
	<div class="container">

		<div class="content results">
			<?php if ( have_posts() ) : ?>

				<h1>Search Results for: <?php echo get_search_query(); ?></h1>
				<?php get_template_part( 'loop', 'search' ); ?>

			<?php else : ?>

				<h2>Oops!</h2>
				<p>Sorry, nothing matched your search terms. Why don't you try searching again?</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div> <!-- /.content -->

	</div><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
