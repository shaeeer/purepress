<?php get_header(); ?>

		<!-- section -->
		<section>

			<!-- category title -->
			<h1 class="content-subhead"><?php single_cat_title(); ?></h1>
			<!-- /category title -->

			<!-- posts loop -->
			<?php get_template_part('loop'); ?>
			<!-- /posts loop -->

		</section>
		<!-- /section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
