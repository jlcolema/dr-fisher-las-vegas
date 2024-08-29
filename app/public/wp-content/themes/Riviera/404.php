<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage RL Theme
 */

get_header(); ?>

	<section class="fourerrorpage">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-md-pad-none">
                            <div class="pnotfound">
                                <div>
                                <h1 class="four0four">404</h1>
                                <h2><?php _e('Page not found','lifelonghealth'); ?></h2>
                                <p><?php _e('Why don\'t you try one of these page instead?','lifelonghealth');?></p>
                                <a href="<?php echo site_url();?>" class="btn btn-blue">Home</a><a href="<?php echo site_url();?>/contact-us" class="btn btn-blue">Contact</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php get_footer(); ?>