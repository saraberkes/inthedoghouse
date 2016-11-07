<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Oops!</h1>
		<section class="entry-content">
			<p>Sorry, but we couldn't find what you were looking for. Why don't you try searching again?</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a>
      </h2>

			<section class="entry-content">
				<?php the_post_thumbnail('large'); ?>
				<div class="text-content"><?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
				<?php wp_link_pages( array(
          'before' => '<div class="page-link"> Pages:',
          'after' => '</div>'
        )); ?></div>
			</section><!-- .entry-content -->

			<footer class="postFooter">
				<h3>Posted in <?php the_category(', '); ?></h3>
        <h3><?php comments_popup_link('Comment', '1 Comment', '% Comments'); ?></h3>
			</footer>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries'); ?></p>
<?php endif; ?>
