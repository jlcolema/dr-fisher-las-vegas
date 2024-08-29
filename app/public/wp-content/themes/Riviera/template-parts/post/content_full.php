<?php $theme_data = tirepirates_set_theme_var();?>
<li id="post-<?php the_ID(); ?>">
	<?php
		if ( is_single() ) {
			the_title( '<h1>', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		} else {
			the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		}
	?>

	<?php /*if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'tirepirates-featured-image' ); ?>
		</a>	
	<?php endif;*/ ?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<!-- <div class="image-full-blog">
		  	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
			<img src="<?php echo $url ?>" />
		</div> -->
	<?php endif; ?>

		<p>
			<?php
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tirepirates' ),
				get_the_title()
			) );	

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'tirepirates' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</p>
		<span>
			<?php 
			if ( 'post' === get_post_type() ) {
				if ( is_single() ) {
					tirepirates_posted_on();
				} else {
					echo tirepirates_time_link();
				};
			};
			?>
		</span>
</li>