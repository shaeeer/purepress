<?php get_header(); ?>

	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1><?php the_title(); ?></h1>
			<!-- /post title -->

			<!-- post details -->
			<div class="post-meta">
				<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j F Y'); ?></span>
				<span class="author"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>
				<span class="category"><i class="fa fa-inbox" aria-hidden="true"></i> <?php the_category(', '); // Separated by commas ?></span>
				<span class="comments"><i class="fa fa-comments" aria-hidden="true"></i> <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'No Comments', 'purepress' ), __( '1 Comment', 'purepress' ), __( '% Comments', 'purepress' )); ?></span>
			</div>
			<!-- /post details -->

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				</div>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post content -->
			<?php the_content(); ?>
			<!-- /post content -->

			<!-- post tags -->
			<?php the_tags( '<div class="post-tags"><h3>Tags</h3><ul><li>', '</li><li>', '</li></ul></div>' ); ?>
			<!-- /post tags -->

			<!-- post comments -->
			<?php comments_template(); ?>
			<!-- /post comments -->

		</article>
		<!-- /article -->

	<?php endwhile;
				endif; ?>
	</section>
	<!-- /section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
