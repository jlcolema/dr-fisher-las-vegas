<?php
/* Blog */
get_header();

?>
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
	                    	while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
                                if($theme_data['blog_full_show'] == 1){
                                    get_template_part( 'template-parts/post/content', get_post_format() );
                                }else{
                                    get_template_part( 'template-parts/post/content_full', get_post_format() );
                                }

							endwhile;
	                        ?>
                    	</ul>
                        <?php 
                        //the_posts_pagination();

                        the_posts_navigation( array(
                            'prev_text' => __('Previous Post','structural'),
                            'next_text' => __('Next Post','structural'),
                        ) ); 
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
<?php get_footer(); ?>
