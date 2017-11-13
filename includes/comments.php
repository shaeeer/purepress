<?php
function pp_comments( $comment, $args, $depth ) {
	global $post;
	$author_id = $post->post_author;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments. ?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'purepress' ); ?></span> <?php comment_author_link(); ?></div>
	<?php
		break;
		default :
		// Proceed with normal comments. ?>
	<li id="li-comment-<?php comment_ID(); ?>" class="comment">
		<article id="comment-<?php comment_ID(); ?>" <?php comment_class('clearfix'); ?>>
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 45 ); ?>
			</div><!-- .comment-author -->
			<div class="comment-details clearfix">
				<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'purepress' ); ?></p>
				<?php endif; ?>
				<div class="comment-content entry clr">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->
				<header class="comment-meta clearfix">
					<cite class="fn comment-by">by <?php comment_author_link(); ?></cite>
					<span class="comment-date">
					<?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						sprintf( _x( '%1$s', '1: date', 'purepress' ), get_comment_date() )
					); ?> <?php esc_html_e( 'at', 'purepress' ); ?> <?php comment_time(); ?>
					</span><!-- .comment-date -->
				</header><!-- .comment-meta -->
			</div><!-- .comment-details -->
			<div class="reply comment-reply-link pure-button">
				<?php comment_reply_link( array_merge( $args, array(
					'reply_text' => esc_html__( 'Reply', 'purepress' ),
					'depth'      => $depth,
					'max_depth'	 => $args['max_depth'] )
				) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // End comment_type check.
}
