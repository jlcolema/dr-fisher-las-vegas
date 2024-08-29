<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage RL Theme
 */

get_header(); ?>
<style type="text/css">
    .attachment-tirepirates-featured-image.size-tirepirates-featured-image.wp-post-image{
        width: 360px;
        height: 240px;
    }
</style>
<?php $theme_data = tirepirates_set_theme_var();?>
<div class="main-content" id="main-content" role="main">
    <div class="section-main blogsection">
    	<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-left">
						<ul class="blog-shrtdesc">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

							 	if($theme_data['blog_full_show'] == 1){
                    	       		get_template_part( 'template-parts/post/content', get_post_format() );
                                }else{
                                    get_template_part( 'template-parts/post/content_full', get_post_format() );
                                }

							endwhile; // End of the loop.
							?>
						</ul>
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
    </div>
</div>

<?php get_footer();
