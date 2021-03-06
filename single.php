<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->
				<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
			<!-- /post details -->

			<?php the_content(); ?>

			<?php // comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>


	<?php endif; ?>

	</section>
	<?php get_sidebar( 'sidebar-widget-area' ); ?>
	<!-- /section -->


	</main>

<?php get_footer(); ?>
