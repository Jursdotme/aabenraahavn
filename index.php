<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest News', 'secondthought' ); ?></h1>

			<?php get_template_part('partials/loop'); ?>

			<?php get_template_part('partials/pagination'); ?>

		</section>
		<!-- /section -->

		<?php get_sidebar( 'sidebar-widget-area' ); ?>

	</main>

	<?php dynamic_sidebar( 'footer-widget-area' ); ?>

<?php get_footer(); ?>
