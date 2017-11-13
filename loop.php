<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- posts list -->
<div class="post-list">

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="featured-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			</div>
		<?php endif ?>
		<!-- /post thumbnail -->

		<!-- post -->
		<div class="post-box">

			<!-- post header -->
			<header>

				<!-- post title -->
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<!-- /post title -->

				<!-- post details -->
				<div class="post-meta">
					<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('j F Y'); ?></span>
					<span class="author"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>
					<span class="category"><i class="fa fa-inbox" aria-hidden="true"></i> <?php the_category(', '); // Separated by commas ?></span>
				</div>
				<!-- /post details -->

			</header>
			<!-- /post header -->

			<?php the_excerpt(); ?>
		</div>
		<!-- post -->

	</article>
	<!-- /article -->

</div>
<!-- posts list -->
<?php endwhile; ?>

<?php else: ?>

	<!-- article nothing found -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'purepress' ); ?></h2>
	</article>
	<!-- /article nothing found -->

<?php endif; ?>
