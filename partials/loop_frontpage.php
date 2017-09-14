<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('frontpage-news-item'); ?> data-mh="frontpage-news-item">

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(480,270)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
		<!-- /post details -->

		<?php secondthoughtwp_excerpt('secondthoughtwp_index'); // Build your custom callback length in functions/excerpts.php ?>

		<nav>
			<a class="button raised" href="<?php the_permalink(); ?>">Læs</a>
			<!-- <a class="button social-toggle" href="#">Del</a>
			<div class="social-share-buttons">
				<a class="socialbutton facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
				<a class="socialbutton twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="socialbutton googleplus" href="#"><i class="fa fa-google-plus"></i></a>
			</div> -->
		</nav>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'secondthought' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
