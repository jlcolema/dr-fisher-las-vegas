<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package RL Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {    
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title"> 
			<?php
				//printf( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'tirepirates' ),
					//number_format_i18n( get_comments_number() ), '<code>' . get_the_title() . '</code>' );
			?>
			<?php echo number_format_i18n( get_comments_number() ); ?> COMMENTS
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'tirepirates' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( ' Previous Comments', 'tirepirates' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Next Comments', 'tirepirates' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>       	

		<ol class="comment-list clearfix">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 100,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'tirepirates' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Previous Comments', 'tirepirates' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Next Comments', 'tirepirates' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tirepirates' ); ?></p>
	<?php endif; ?>
</div><!-- #comments -->

<div class="leave-comment">
	<?php 
	    $req = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );

		$comments_args = array(
	        // change the title of send button 
	        'label_submit'=> esc_html(__('Post Comments','tirepirates')),
	        // change the title of the reply section
	        'title_reply'=> esc_html(__('Leave a Comment','tirepirates')),
	        // redefine your own textarea (the comment body)

	        'fields' => array(
			    'author' =>'' .
			      '<div class="form-group"><div class="input-field input-name">' .
			      '<input class="validate" id="name" name="author" placeholder="'. esc_attr(__('Name','tirepirates')) .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			      '" size="30"' . $aria_req . ' /></div><div class="input-field input-name">' .
			      '<input class="validate" id="email" name="email" placeholder="'. esc_attr(__('Email','tirepirates')) .'" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			      '" size="30"' . $aria_req . ' /></div></div>',
			    ),
	        'comment_field' => ' 
	        <div class="form-group"><div class="input-field"><textarea class="materialize-textarea" type="text" rows="10" id="textarea1" name="comment" aria-required="true"></textarea></div></div>',
	    );

	comment_form($comments_args); 	?> 
</div>
