<?php 
	$theme_data = tirepirates_set_theme_var();
	//echo "<PRE>";print_r($theme_data);exit();
	if($theme_data['home_blog_side'] == 'slider'):
		$postargs = array(
						  'post_type'   => 'post',
						  'post_status' => 'publish',
						  'posts_per_page'=> 6
						 );
		$wp_query = new WP_Query($postargs);

		if($theme_data['home_blog_title'] || $theme_data['home_blog_desc'] || $wp_query->have_posts()) : 
	?>
	<section class="Blog odd-bg" <?php if($theme_data['home_blog_bg']){?> style="background-image: url('<?php echo esc_url( $theme_data['home_blog_bg'] );?>');background-repeat: no-repeat;" <?php }?>>
		<div class="container">
			<?php if($theme_data['home_blog_title'] || $theme_data['home_blog_desc']) :  ?>
				<div class="row">
					<div class="col-md-12">
						<?php if($theme_data['home_blog_title']) : ?>
							<h2 class="title-blue ti-lines c-blog-main-title"><?php echo $theme_data['home_blog_title'];?></h2>
						<?php endif; ?>
						<?php if($theme_data['home_blog_desc']) : ?>
							<!-- <p class="text-center c-blog-main-content"><?php echo $theme_data['home_blog_desc'];?></p> -->
						<?php endif; ?>
				<?php 
					endif;
					if($wp_query->have_posts()) :
					?>
						<div class="owl-carousel blogs">
							<?php 
								while ($wp_query->have_posts()) : $wp_query->the_post(); 
								?>
								<div class="item">
					             	<?php //echo get_the_date();?>
					             	<div class="blog-title c-blog-title"><?php the_title(); ?></div>
					             	<div class="blog-info c-blog-content"><?php the_excerpt(); ?></div>
					             	<div class="comments"><a href="<?php the_permalink();?>">Read More		<i class="fa fa-angle-right"></i></a>
					             	</div>
					             </div>
				            	<?php 
				            	endwhile; 
			            	?>
				        </div>
				        <?php $blogpage = get_page_by_title('Blog');?>
						<div class="blogs-view">
							<a href="<?php echo $blogpage->post_name;?>" class="btn btn-yellow">View all</a>
						</div>
	            	<?php 
	            	endif; 
	        	?>
			</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php endif; ?>