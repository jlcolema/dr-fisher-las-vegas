<?php 
$theme_data = tirepirates_set_theme_var();
$classFooter = 'col-lg-12 col-md-4 col-sm-4';
$showSocial = '';
if($theme_data['facebook_show_footer'] == 1 || $theme_data['twitter_show_footer'] == 1 || $theme_data['instagram_show_footer'] == 1 || $theme_data['linkedin_show_footer'] == 1 || $theme_data['pinterest_show_footer'] == 1  || $theme_data['yelp_show_footer'] == 1 || $theme_data['rss_show_footer'] == 1 || $theme_data['youtube_show_footer'] == 1 || $theme_data['gplus_show_footer'] == 1  || $theme_data['angellist_show_footer'] == 1 || $theme_data['bbb_show_footer'] == 1 ){
	$showSocial = 1;
	$classFooter = 'col-lg-6 col-md-6 col-sm-4';
	if($theme_data['location1_phone_show_right'] == 1 || $theme_data['location2_phone_show_right'] == 1 || $theme_data['location3_show_right'] == 1 || $theme_data['location4_phone_show_right'] == 1 ){
		$classFooter = 'col-lg-4 col-md-4 col-sm-4';
	}
}else{
	if($theme_data['location1_phone_show_right'] == 1 || $theme_data['location2_phone_show_right'] == 1 || $theme_data['location3_show_right'] == 1 || $theme_data['location4_phone_show_right'] == 1 ){
		$classFooter = 'col-lg-6 col-md-6 col-sm-4';
	}
}
?>
	<footer class="footer" role="contentinfo">
		<div class="topfooter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
	                    <div class="foot-navlink">
	                        <?php 
							if ( is_nav_menu( 'footer-menu' ) ) {
								wp_nav_menu( array( 'menu' => 'footer-menu', 'theme_location' => 'footer-menu', 'container' => 'div', 'menu_class' => '', 'depth' =>1, 'submenu' =>false) ); 
							}
							else{
								wp_nav_menu( array( 'menu' => 'header-menu', 'theme_location' => 'header-menu', 'container' => 'div', 'menu_class' => '', 'depth' =>1, 'submenu' =>false) ); 
							}
							?>
	                    </div>
	                </div>
	                <div class="footerfirst ffffcol <?php echo $classFooter; ?>">
						<div class="row">
							<?php if(!empty($theme_data['location1_address_title'])){ ?>
								<div class="citydtil foot foot2 col-sm-12">
									<div class="location-footer">
				                		<p class="loc-add"><?php echo $theme_data['location1_address_title']; ?></p>
				                        <p class="addrs"><?php echo $theme_data['location1_address']; ?>
				                            <?php echo $theme_data['location1_extracontent']; ?>
				                        </p>
		                    		</div>
		                		</div>
	                		<?php
	                		}?>
                			<?php if(!empty($theme_data['location2_address_title'])){ ?>
				                <div class="citydtil foot foot2 col-sm-12">
									<div class="location-footer">
				                        <p class="loc-add"><?php echo $theme_data['location2_address_title']; ?></p>
				                        <p class="addrs"><?php echo $theme_data['location2_address']; ?>
				                        
				                            <?php echo $theme_data['location2_extracontent']; ?>
				                        </p>
			                        </div>
			                    </div>
			                <?php } ?>
			            </div>
					</div>
					<?php 
					if($theme_data['location1_show_right'] == 1 || $theme_data['location2_show_right'] == 1 || $theme_data['location3_show_right'] == 1 || $theme_data['location4_show_right'] == 1 || $theme_data['location5_show_right'] == 1 || $theme_data['location6_show_right'] == 1 || $theme_data['location1_phone_show_right'] == 1  || $theme_data['location2_phone_show_right'] == 1 || $theme_data['location3_phone_show_right'] == 1 || $theme_data['location4_phone_show_right'] == 1 || $theme_data['location5_phone_show_right'] == 1 || $theme_data['location6_phone_show_right'] == 1){?>
						<div class="footersecond ffffcol <?php echo $classFooter; ?>" id="fot-contct-us">
							<div class="row">
							<?php 
							if($theme_data['location1_show_right'] == 1 ||  $theme_data['location1_phone_show_right'] == 1){?>
								<div class="citydtil foot foot2 col-sm-6">
									<div class="location-phone-footer">
										<?php 
										if($theme_data['location1_show_right'] == 1){  
											echo '<p>'.$theme_data['location1_footer_title'].'</p>';
										} 
										?>
										<?php
											if($theme_data['location1_phone_show_right'] == 1){
											 	if(!empty($theme_data['location1_footer_phone'])){  ?>
				                            	<a href="tel:<?php echo $theme_data['location1_footer_phone']; ?>">
				                            		<strong class="mno"><?php echo $theme_data['location1_footer_phone']; ?></strong>
				                            	</a>
			                            		<?php } 
			                            	} 
		                            	?>
									</div>
								</div>
								<?php
							}
							if($theme_data['location2_show_right'] == 1 ||$theme_data['location2_phone_show_right'] == 1){  ?>
								<div class="citydtil foot foot2 col-sm-6">
									<div class="location-phone-footer">
										<?php 
										if($theme_data['location2_show_right'] == 1){  
											echo '<p>'.$theme_data['location2_footer_title'].'</p>';
										} 
										?>
										<?php
											if($theme_data['location2_phone_show_right'] == 1){
											 	if(!empty($theme_data['location2_footer_phone'])){  ?>
				                            	<a href="tel:<?php echo $theme_data['location2_footer_phone']; ?>">
				                            		<strong class="mno"><?php echo $theme_data['location2_footer_phone']; ?></strong>
				                            	</a>
			                            		<?php } 
			                            	} 
		                            	?>
									</div>
								</div>
								<?php
							}
							if($theme_data['location3_show_right'] == 1 || $theme_data['location3_phone_show_right'] == 1){  ?>
								<div class="citydtil foot foot2 col-sm-6">
									<div class="location-phone-footer">
										<?php 
										if($theme_data['location3_show_right'] == 1){  
											echo '<p>'.$theme_data['location3_footer_title'].'</p>';
										} 
										?>
										<?php
											if($theme_data['location3_phone_show_right'] == 1){
											 	if(!empty($theme_data['location3_footer_phone'])){  ?>
				                            	<a href="tel:<?php echo $theme_data['location3_footer_phone']; ?>">
				                            		<strong class="mno"><?php echo $theme_data['location3_footer_phone']; ?></strong>
				                            	</a>
			                            		<?php } 
			                            	} 
		                            	?>
									</div>
								</div>
								<?php
							}
							if($theme_data['location4_show_right'] == 1 || $theme_data['location4_phone_show_right'] == 1){?>
								<div class="citydtil foot foot2 col-sm-6">
									<div class="location-phone-footer">
										<?php 
										if($theme_data['location4_show_right'] == 1){  
											echo '<p>'.$theme_data['location4_footer_title'].'</p>';
										} 
										?>
										<?php
											if($theme_data['location4_phone_show_right'] == 1){
											 	if(!empty($theme_data['location4_footer_phone'])){  ?>
				                            	<a href="tel:<?php echo $theme_data['location4_footer_phone']; ?>">
				                            		<strong class="mno"><?php echo $theme_data['location4_footer_phone']; ?></strong>
				                            	</a>
			                            		<?php } 
			                            	} 
		                            	?>
									</div>
								</div>
							<?php
							}
							if($theme_data['location5_show_right'] == 1 || $theme_data['location5_phone_show_right'] == 1){?>
								<div class="citydtil foot foot2 col-sm-6">
									<div class="location-phone-footer">
										<?php 
										if($theme_data['location5_show_right'] == 1){  
											echo '<p>'.$theme_data['location5_footer_title'].'</p>';
										} 
										?>
										<?php
											if($theme_data['location5_phone_show_right'] == 1){
											 	if(!empty($theme_data['location5_footer_phone'])){  ?>
				                            	<a href="tel:<?php echo $theme_data['location5_footer_phone']; ?>">
				                            		<strong class="mno"><?php echo $theme_data['location5_footer_phone']; ?></strong>
				                            	</a>
			                            		<?php } 
			                            	} 
		                            	?>
									</div>
								</div>
							<?php
							}
							if($theme_data['location6_show_right'] == 1 || $theme_data['location6_phone_show_right'] == 1){?>
								<div class="citydtil foot foot2 col-sm-6">
									<div class="location-phone-footer">
										<?php 
										if($theme_data['location6_show_right'] == 1){  
											echo '<p>'.$theme_data['location6_footer_title'].'</p>';
										} 
										?>
										<?php
											if($theme_data['location6_phone_show_right'] == 1){
											 	if(!empty($theme_data['location6_footer_phone'])){  ?>
				                            	<a href="tel:<?php echo $theme_data['location6_footer_phone']; ?>">
				                            		<strong class="mno"><?php echo $theme_data['location6_footer_phone']; ?></strong>
				                            	</a>
			                            		<?php } 
			                            	} 
		                            	?>
									</div>
								</div>
							<?php
							}
							?>
							</div>
						</div>
						<?php
					}
					if(!empty($showSocial)){?>
						<div class="footerthird ffffcol <?php echo $classFooter;?>">
							<div class="socials">
								<span  class="financ"><?php echo $theme_data['find_online_text'];?></span>
								<?php echo tirepirates_get_social_block_footer();?>
							</div>
							<div class="citydtil foot foot2 finacetxt">
								<?php if($theme_data['financing_text']!=''){?>
									<h5><?php echo $theme_data['financing_text'];?></h5>
								<?php
								} 
								if($theme_data['footer_client_img1']!=''){?>					
									<img src="<?php echo $theme_data['footer_client_img1'];?>">
								<?php
								}
								if($theme_data['footer_client_img2']!=''){?>
									<img src="<?php echo $theme_data['footer_client_img2'];?>">
								<?php
								}?>
							</div>
						</div>   
					<?php
					}?>  
				</div>
			</div>
		</div>
		<div class="botmfooter">
			<div class="container">
				<div class="row">
					<div class="col-md-8 copyright">
						<span>
							<?php echo $theme_data['copyright'];?>
						</span>
						<div class="liks">
						<?php wp_nav_menu( array( 'menu' => 'footer-secondary-menu', 'theme_location' => 'footer-secondary-menu', 'container' => 'div', 'menu_class' => 'footer-link', 'depth' =>1, 'submenu' =>false) ); ?>
						</div>
					</div>
					<div class="col-lg-4 reachloacallogo">
						<div class="rechlogo">
							<!--<img src="<?php //echo get_template_directory_uri();?>/images/reach-local.png">-->
							<?php if($theme_data['Local_IQ_img_hide_footer'] == ''){	
							if ($theme_data['LocalIQ_img'] == ''){ ?>
								<img src="<?php echo get_template_directory_uri();?>/images/LocalIQ_Powered.png" alt="LocalIQ Powered">
							<?php }else{ ?>
								<img src="<?php echo $theme_data['LocalIQ_img'];?>" alt="LocalIQ Powered">
							<?php } } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
	<?php 
	echo $theme_data['footer_js_code'];
	?>
	<?php wp_footer();?>
	<!-- <script type="text/javascript">rl_chatinit('USA2973363', '128638', '228742') ;</script> -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.stellarnav').stellarNav({theme: 'light'});
			<?php if($theme_data['header_sticky'] == ''){ ?>
				var navHeight = jQuery(".Darken").height();
				jQuery('.main-content').css('margin-top',navHeight);
			<?php } ?>
		});
	</script>
</body>
</html>