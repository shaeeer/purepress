<?php get_header(); ?>

	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- page title -->
			<h1><?php the_title(); ?></h1>
			<!-- /page title -->

			<!-- page content -->
			<?php the_content(); ?>
			<!-- /page content -->

			<!-- page tags -->
			<?php the_tags( '<div class="post-tags"><h3>Tags</h3><ul><li>', '</li><li>', '</li></ul></div>' ); ?>
			<!-- /page tags -->

		</article>
		<!-- /article -->

	<?php endwhile;
				endif; ?>

	</section>
	<!-- /section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
