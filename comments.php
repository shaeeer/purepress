<div class="comments-box">
	<?php if (post_password_required()) : //password protected post?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'purepress' ); ?></p>
</div>
	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>
			<ul class="comments">
				<?php
				wp_list_comments( array(
					'callback' => 'pp_comments' //loading comments template
				) );?>
			</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'purepress' ); ?></p>

<?php endif; ?>
<?php  get_template_part('includes/comment-form'); // load comment form ?>
</div>
