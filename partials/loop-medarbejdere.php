<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="medarbejder" data-mh="medarbejder">

		<?php
		  // Setup Image data
		  $id = get_field('portrat');
		  $size = 'full'; // (thumbnail, medium, large, full or custom size)
		  $image_attributes = wp_get_attachment_image_src( $id, $size );
		 ?>

		<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">


		<h2 class="name">
			<?php the_title(); ?>
		</h2>

		<span class="title"><?php the_field('titel'); ?></span>

		<?php if (get_field('email')): ?>
			<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
		<?php endif; ?>

	</div>
	<!-- /article -->

<?php endwhile; ?>

<?php endif; ?>
