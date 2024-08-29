<?php 
$theme_data = tirepirates_set_theme_var();
if($theme_data['home_blog_side'] == 'right'):
	$postargs = array(
					  'post_type'   => 'post',
					  'post_status' => 'publish',
					  'posts_per_page'=> 6
					 );
	$wp_query = new WP_Query($postargs);

	if($theme_data['home_blog_title'] && $wp_query->have_posts()) : 
	?>
	<div class="blog-port c-blog" <?php if($theme_data['home_blog_bg']){?> style="background-image: url('<?php echo esc_url( $theme_data['home_blog_bg'] );?>');background-repeat: no-repeat;" <?php }?>>
			<?php if($theme_data['home_blog_title'] || $theme_data['home_blog_desc']) :  ?>
				<?php if($theme_data['home_blog_title']) : ?>
					<h2 class="ti-lines c-blog-main-title"><?php echo $theme_data['home_blog_title'];?></h2>
				<?php endif; ?>
				<?php if($theme_data['home_blog_desc']) : ?>
					<p class="c-blog-main-content"><?php echo $theme_data['home_blog_desc'];?></p>
				<?php endif; ?>
			<?php 
				endif;
				if($wp_query->have_posts()) :
				?>
				<div class="line-blog"></div>
					<ul class="blog-uli">
						<?php 
							$k=1;
							while ($wp_query->have_posts()) : $wp_query->the_post(); 
							if($k<=3):
							?>
							<li class="item">
			             		<span class="blog-date c-blog-date"><?php echo get_the_date();?></span>
			             		<a href="<?php echo the_permalink();?>" class="c-blog-title"><?php the_title(); ?></a>
			             		<!-- <div class="blog-info c-blog-content"><?php the_excerpt(); ?></div> -->
			             	</li>
			            	<?php 
			            	endif;
			            	$k++;
			            	endwhile; 
		            	?>
		       		</ul>
				<?php endif; ?>
	</div>
	
	<?php endif; ?>
<?php endif; ?>
	