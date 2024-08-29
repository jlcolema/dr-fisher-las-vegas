<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage RL THEME
 * @since 1.0
 * @version 1.2
 */

?>

<?php 
	if ( is_single() ) {
		the_title( '<h1>', '</h1>' );
	} elseif ( is_front_page() && is_home() ) {
		the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	} else {
		the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}

	if ( 'post' === get_post_type() ) {
		echo '<span>';
			if ( is_single() ) {
				//tirepirates_posted_on();
			} else {
				echo tirepirates_time_link();
				tirepirates_edit_link();
			};
		echo '</span><!-- .entry-meta -->';
	};

	if ( '' !== get_the_post_thumbnail() ) : ?>
	<div class="blog-f-img">
		<?php the_post_thumbnail( 'tirepirates-featured-image' ); ?>
	</div>
	<?php endif; 
?>
<p>
	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tirepirates' ),
			get_the_title()
		) );

		/*wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'lifelonghealth' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );*/
		?>
</p>
<?php 
	if(is_single()){
		tirepirates_entry_footer();
	}
?>
				