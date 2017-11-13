<?php get_header(); ?>

		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<!-- page title -->
				<h1><?php _e( 'Page not found', 'purepress' ); ?></h1>
				<!-- /page title -->

				<!-- page subtitle -->
				<h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'purepress' ); ?></a></h2>
				<!-- /page subtitle -->

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
