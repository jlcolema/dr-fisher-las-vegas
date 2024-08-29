<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage RL Theme
 */

get_header(); ?>

<div class="main-containt">
    <div class="section-main blogsection">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-left">
						<div class="fullblog">
							<?php
							/* Start the Loop */
							
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content-detail', get_post_format() );

							endwhile; // End of the loop.
							?>
						</div>
						<?php 
						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'tirepirates' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'tirepirates' ) . '</span>',
						) );
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>
				</div>
				
				<div class="col-md-4" role="complementary">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
