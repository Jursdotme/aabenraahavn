<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-image">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>

		<div class="post-content">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

			<?php secondthoughtwp_excerpt('secondthoughtwp_index'); // Build your custom callback length in functions/excerpts.php ?>
			<a class="read-more btn btn-brand" href="<?php the_permalink(); ?>"><?php _e('Read more', 'secondthought'); ?></a>
		</div>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'secondthought' ); ?></h2>
	</article>

<?php endif; ?>
