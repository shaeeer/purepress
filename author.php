<?php get_header(); ?>

		<!-- section -->
		<section>

			<!-- archive title -->
			<h1 class="content-subhead"><?php _e( 'All posts by ', 'html5blank' ); echo get_the_author(); ?></h1>
			<!-- /archive title -->


			<?php if ( get_the_author_meta('description')) : ?>

			<?php echo get_avatar(get_the_author_meta('user_email')); // author avatar?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; // author name?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); // author description ?>

			<?php endif; ?>

			<!-- posts loop -->
			<?php get_template_part('loop'); ?>
			<!-- /posts loop -->


		</section>
		<!-- /section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
