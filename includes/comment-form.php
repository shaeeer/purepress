<?php 
$purepress_comment_form = array(
    // Changing Comment Form Class
   'class_form' => 'pure-form pure-form-aligned',
   // Submit Button
   'submit_field'         => '<div class="pure-controls">%1$s %2$s</div>',

    // Changeing comment text area
   'comment_field' => '<div class="pure-control-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment"></textarea></div>',
   'class_submit' => 'pure-button pure-button-primary',

   // Comment form fields 
   'fields' =>  array(
    'author' => '<div class="pure-control-group">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" placeholder="Name"' . $aria_req . $html_req . ' /></div>',
    'email'  => '<div class="pure-control-group"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes" placeholder="Email"' . $aria_req . $html_req  . ' /></div>'
  )
);
comment_form($purepress_comment_form);
?>