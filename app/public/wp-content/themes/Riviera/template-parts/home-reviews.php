<style type="text/css">
	.item p{
		font-weight: 650;
		font-size: 16px;
		color:#002c54;
	}
</style>
<?php 
	$theme_data = tirepirates_set_theme_var();


	$args = array(
				  'post_type'   => 'ftestimonial',
				  'post_status' => 'publish',
				 );
	$testimonials = new WP_Query( $args );
	#echo "<PRE>";print_r($testimonials);exit;
	//$theme_data['home_reviews_title'] || $theme_data['home_reviews_desc'] || 
	if($testimonials->have_posts()) : 
	?>
		<section class="testimonials c-review" <?php if($theme_data['home_reviews_bg']){?> style="background-image: url('<?php echo esc_url( $theme_data['home_reviews_bg'] );?>');background-repeat: no-repeat;" <?php }?>>
			<div class="container">
				<?php //if($theme_data['home_reviews_title'] || $theme_data['home_reviews_desc']) :  ?>
					<div class="row">
						<div class="col-md-12">
							<?php if($theme_data['home_reviews_title']) : ?>
								<h2 class="t-title c-review-main-title"><?php echo $theme_data['home_reviews_title'];?></h2>
							<?php endif; ?>
							<?php if($theme_data['home_reviews_desc']) : ?>
								<p class="text-center c-review-main-content"><?php echo $theme_data['home_reviews_desc'];?></p>
							<?php endif; ?>
						</div>
					</div>
				<?php //endif; ?>
				<?php 
					if($testimonials->have_posts()) :
					?>
						<div class="row">
							<div class="col-md-12">
								<div class="owl-carousel testimo">
										<?php
											while($testimonials->have_posts()) : $testimonials->the_post(); 
												$author = get_post_meta( get_the_ID(), "author","true");
												?>
									            <div class="item tm c-review-main">
									            	<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/quots.png" class="quots" alt=""> -->
									            	<h2 class="r-title c-review-title"><?php the_title(); ?></h2>
									            	<?php the_content(); ?>
									            	<span class="author c-review-author"> <?php echo !empty($author) ? '- '.$author : ''; ?></span>
									            </div>
									            <?php
							            	endwhile; 
							            ?>
						        </div>
							</div>
						</div>
						<?php
					endif; 
					?>
			</div>
		</section>
	<?php
	endif;
?>

