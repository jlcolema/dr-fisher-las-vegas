<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript">

		var templateUrl = '<?= get_bloginfo("template_url"); ?>';

	</script>



	<?php 

	$theme_data = tirepirates_set_theme_var();

	echo stripcslashes($theme_data['font_link']);

	#echo "<PRE>";print_r($theme_data);exit;

	?>



	<?php wp_head();?>

	<?php echo "\n".$theme_data['header_js_code']; ?>

</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main-content">Skip to content</a>	


	<div class="divcontaint"> <!-- ./divcontaint -->	

		<?php 

			$stickyClass = 'sticky ToTop';

			if($theme_data['header_sticky'] == '1'){

				$stickyClass = '';

			}

		?> 

		<?php 

			$phoneCounter = '0';

			if(!empty($theme_data['location1_phone'])){ 

				$phoneCounter++;

			}

			if(!empty($theme_data['location2_phone'])){ 

				$phoneCounter++;

			}

			if(!empty($theme_data['location3_phone'])){ 

				$phoneCounter++;

			}

			if(!empty($theme_data['location4_phone'])){ 

				$phoneCounter++;

			}

			if(!empty($theme_data['location5_phone'])){ 

				$phoneCounter++;

			}

			if(!empty($theme_data['location6_phone'])){ 

				$phoneCounter++;

			}

			$extraClass = '';

			if($phoneCounter == 1){

				$extraClass = 'topnav-header';

			}

			else{

				if( $theme_data['show_all_phone'] == '1'){

					$extraClass = 'topnav-header';		

				}

			}

		?>

		<header class="Darken <?php echo $stickyClass; ?>" id="masthead">
			<?php 

			    $stickyClass = '';

				$logo = wp_get_attachment_image_src( $theme_data['custom_logo_id'] , 'full' );



				list($width, $height, $type, $attr) = getimagesize($logo[0]);

				if(($width >= 75 && $width <= 250) && ($height >= 80 && $height <= 125)){

					/* SMALL LOGO */

					?>

						<div class="navbar topnav <?php echo $stickyClass; ?> <?php echo $extraClass; ?> stic" role="banner"> 

							<div class="container">

								<div class="row">

									<?php if($phoneCounter == 1 || $theme_data['show_all_phone'] == '1'){ ?>

										<a href="#" class="menu-toggle full menu-toggle-top" aria-label="<?php echo get_bloginfo( 'name' ); ?> main menu" aria-expanded="false"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

									<?php } ?>

									<div class="col-md-6 text-right visible-xs pull-right">

										<ul class="sity">

											<?php if($theme_data['show_all_phone'] == '1'){ ?>

												<li><a href="#fot-contct-us">Contact Us</a></li>

											<?php } else { ?>

												<?php if($phoneCounter == 1 && !empty($theme_data['location1_phone'])){ ?>

													<li><a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone"><?php echo $theme_data['location1_phone']; ?></a></li>

												<?php } ?>

											<?php } ?>

										</ul>

									</div>

									<div class="col-sm-4 socials hidden-xs">

										<label class="stext"><?php echo $theme_data['header_left_main']; ?></label>

										<?php tirepirates_get_social_block(); ?>

									</div>

									<div class="navbar-brand hidden-xs col-sm-4">

										<a href="<?php echo home_url(); ?>">

											<?php if ( has_custom_logo() ) { ?>

												<center><img src="<?php echo esc_url( $logo[0] ); ?>" class="img-responsive" alt="<?php echo get_bloginfo( 'name' ); ?> Logo"></center>

											<?php }else{ ?>

												<h1><?php echo get_bloginfo( 'name' ); ?></h1>

											<?php } ?>

										</a>

									</div>

									<div class="col-sm-4 contact text-right hidden-xs">

										<?php if(!empty($theme_data['header_right'])){ ?>

											<span>

												<?php echo $theme_data['header_right'];?>

											</span>

										<?php

										}?>

										<ul>

											<li>

												<?php if($theme_data['location1_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location1_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location1_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location1_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location2_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location2_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location2_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location2_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location2_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location3_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location3_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location3_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location3_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location3_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location4_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location4_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location4_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location4_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location4_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location5_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location5_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location5_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location5_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location5_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location6_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location6_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location6_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location6_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location6_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

										</ul>

									</div>

								</div>

							</div>

						</div> 

					<?php

				}

				else if(($width >= 251 && $width <= 550) && ($height >= 80 && $height <= 300)){

					/* MEDIUM WIDE LOGO */

					?>

						<div class="navbar topnav <?php echo $stickyClass; ?> <?php echo $extraClass; ?> stic mdlogo" role="banner"> 

							<div class="container">

								<div class="row">

									<?php if($phoneCounter == 1 || $theme_data['show_all_phone'] == '1'){ ?>

										<a href="#" class="menu-toggle full menu-toggle-top" aria-label="<?php echo get_bloginfo( 'name' ); ?> main menu" aria-expanded="false"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

									<?php } ?>

									<div class="col-md-6 text-right visible-xs pull-right">

										<ul class="sity">

											<?php if($theme_data['show_all_phone'] == '1'){ ?>

												<li><a href="#fot-contct-us">Contact Us</a></li>

											<?php } else { ?>

												<?php if($phoneCounter == 1 && !empty($theme_data['location1_phone'])){ ?>

													<li><a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone"><?php echo $theme_data['location1_phone']; ?></a></li>

												<?php } ?>

											<?php } ?>

										</ul>

									</div>

									<div class="col-sm-3 socials hidden-xs">

										<label class="stext"><?php echo $theme_data['header_left_main']; ?></label>

										<?php tirepirates_get_social_block(); ?>

									</div>

									<div class="navbar-brand hidden-xs col-sm-6">

										<a class="mediumlogo" href="<?php echo home_url(); ?>">

											<?php if ( has_custom_logo() ) { ?>

												<center><img src="<?php echo esc_url( $logo[0] ); ?>" class="img-responsive"  alt="<?php echo get_bloginfo( 'name' ); ?> Logo"></center>

											<?php }else{ ?>

												<h1><?php echo get_bloginfo( 'name' ); ?></h1>

											<?php } ?>

										</a>

									</div>

									<div class="col-sm-3 contact text-right hidden-xs">

										<?php if(!empty($theme_data['header_right'])){ ?>

											<span>

												<?php echo $theme_data['header_right'];?>

											</span>

										<?php

										}?>

										<ul>

											<li>

												<?php if($theme_data['location1_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location1_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location1_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location1_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location2_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location2_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location2_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location2_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location2_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location3_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location3_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location3_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location3_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location3_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location4_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location4_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location4_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location4_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location4_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location5_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location5_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location5_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location5_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location5_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location6_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location6_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location6_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location6_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location6_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

										</ul>

									</div>

								</div>

							</div>

						</div>

					

					<?php

				}

				else if(($width >= 551 && $width <= 1030) && ($height >= 80 && $height <= 300)){

					/* LARGE LOGO */

					?>

						<div class="navbar topnav <?php echo $stickyClass; ?> <?php echo $extraClass; ?> stic fulllogo" role="banner"> 

							<div class="container">

								<div class="row">

									<?php if($phoneCounter == 1 || $theme_data['show_all_phone'] == '1'){ ?>

										<a href="#" class="menu-toggle full menu-toggle-top" aria-label="<?php echo get_bloginfo( 'name' ); ?> main menu" aria-expanded="false"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

									<?php } ?>

									<div class="col-md-6 text-right visible-xs pull-right">

										<ul class="sity">

											<?php if($theme_data['show_all_phone'] == '1'){ ?>

												<li><a href="#fot-contct-us">Contact Us</a></li>

											<?php } else { ?>

												<?php if($phoneCounter == 1 && !empty($theme_data['location1_phone'])){ ?>

													<li><a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone"><?php echo $theme_data['location1_phone']; ?></a></li>

												<?php } ?>

											<?php } ?>

										</ul>

									</div>

									<div class="navbar-brand hidden-xs col-sm-12">

										<a href="<?php echo home_url(); ?>">

											<?php if ( has_custom_logo() ) { ?>

												<center><img src="<?php echo esc_url( $logo[0] ); ?>" class="img-responsive"  alt="<?php echo get_bloginfo( 'name' ); ?> Logo"></center>

											<?php }else{ ?>

												<h1><?php echo get_bloginfo( 'name' ); ?></h1>

											<?php } ?>

										</a>

									</div>

									<div class="col-sm-6 socials hidden-xs">

										<label class="stext"><?php echo $theme_data['header_left_main']; ?></label>

										<?php tirepirates_get_social_block(); ?>

									</div>

									<div class="col-sm-6 contact text-right hidden-xs">

										<?php if(!empty($theme_data['header_right'])){ ?>

											<span>

												<?php echo $theme_data['header_right'];?>

											</span>

										<?php

										}?>

										<ul>

											<li>

												<?php if($theme_data['location1_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location1_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location1_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location1_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location2_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location2_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location2_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location2_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location2_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location3_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location3_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location3_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location3_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location3_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location4_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location4_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location4_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location4_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location4_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location5_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location5_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location5_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location5_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location5_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location6_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location6_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location6_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location6_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location6_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

										</ul>

									</div>

								</div>

							</div>

						</div> 

					<?php

				}

				else{

					/* DEFAULT LOGO */

					?>

						<div class="navbar topnav <?php echo $stickyClass; ?> <?php echo $extraClass; ?> stic" role="banner"> 

							<div class="container">

								<div class="row">

									<?php if($phoneCounter == 1 || $theme_data['show_all_phone'] == '1'){ ?>

										<a href="#" class="menu-toggle full menu-toggle-top" aria-label="<?php echo get_bloginfo( 'name' ); ?> main menu" aria-expanded="false"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

									<?php } ?>

									<div class="col-md-6 text-right visible-xs pull-right">

										<ul class="sity">

											<?php if($theme_data['show_all_phone'] == '1'){ ?>

												<li><a href="#fot-contct-us">Contact Us</a></li>

											<?php } else { ?>

												<?php if($phoneCounter == 1 && !empty($theme_data['location1_phone'])){ ?>

													<li><a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone"><?php echo $theme_data['location1_phone']; ?></a></li>

												<?php } ?>

											<?php } ?>

										</ul>

									</div>

									<div class="col-sm-4 socials hidden-xs">

										<label class="stext"><?php echo $theme_data['header_left_main']; ?></label>

										<?php tirepirates_get_social_block(); ?>

									</div>

									<div class="navbar-brand hidden-xs col-sm-4">

										<a href="<?php echo home_url(); ?>">

											<?php if ( has_custom_logo() ) { ?>

												<center><img src="<?php echo esc_url( $logo[0] ); ?>" class="img-responsive" alt="<?php echo get_bloginfo( 'name' ); ?> Logo"></center>

											<?php }else{ ?>

												<h1><?php echo get_bloginfo( 'name' ); ?></h1>

											<?php } ?>

										</a>

									</div>

									<div class="col-sm-4 contact text-right hidden-xs">

										<?php if(!empty($theme_data['header_right'])){ ?>

											<span>

												<?php echo $theme_data['header_right'];?>

											</span>

										<?php

										}?>

										<ul>

											<li>

												<?php if($theme_data['location1_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location1_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location1_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location1_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location2_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location2_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location2_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location2_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location2_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location3_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location3_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location3_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location3_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location3_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location4_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location4_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location4_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location4_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location4_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location5_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location5_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location5_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location5_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location5_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

											<li>

												<?php if($theme_data['location6_show_header'] == 1){  ?>

													<span><?php echo $theme_data['location6_title']; ?></span>

												<?php } ?>

												<?php if(!empty($theme_data['location6_phone'])){ ?>

													<a href="tel:<?php echo $theme_data['location6_phone']; ?>" aria-label="telephone">

														<b><?php echo $theme_data['location6_phone']; ?></b>

													</a>

												<?php } ?>

											</li>

										</ul>

									</div>

								</div>

							</div>

						</div> 

					<?php

				}

			?>

			<?php 

				$bottomExtraClass = '';

				if($phoneCounter >= 2 && $theme_data['show_all_phone'] != '1'){

					$bottomExtraClass = 'botmnav-extra';

				}

			?>

			<nav class="navbar navbar-default botmnav <?php echo $stickyClass; ?><?php echo $bottomExtraClass; ?> stic page-nav" role="navigation" aria-label="<?php echo get_bloginfo( 'name' ); ?>  Menu">

				<div class="container">

					<div class="navbar-header">

						<?php if($phoneCounter >= 2 && $theme_data['show_all_phone'] != '1'){ ?>

							<a href="#" class="menu-toggle full menu-toggle-top" aria-label="<?php echo get_bloginfo( 'name' ); ?> main menu" aria-expanded="false"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

						<?php } ?>

						<a href="<?php echo home_url(); ?>" class="navbar-brand visible-xs"  alt="<?php echo get_bloginfo( 'name' ); ?> Logo"><?php tirepirates_get_custom_logo();?></a>

					</div>

					<div class="collapse navbar-collapse stellarnav light" id="myNavbar">

						<?php

                            // Menu Location

                            wp_nav_menu( array(

                            	'menu'              => 'header menu',

                            	'theme_location'    => 'header-menu',

                            	'depth'             => 7,

                            	'container'         => 'ul',

                            	'menu_class'        => 'nav navbar-nav c-menu-a',

                            	)

                             );

                        ?>

					</div>

				</div>

				<?php if($phoneCounter >= 2 && $theme_data['show_all_phone'] != '1'){ ?>

					<div class="phone-bottom visible-xs">

	                    <ul>

	                    	<?php if(!empty($theme_data['location1_phone'])){ ?>

		                        <li class="<?php echo $classP;?>">

									<?php if($theme_data['location1_show_header'] == 1){  ?>

										<span><?php echo $theme_data['location1_title']; ?></span>

									<?php } ?>

									<?php if(!empty($theme_data['location1_phone'])){ ?>

										<a class="top-phone" href="tel:<?php echo $theme_data['location1_phone']; ?>" aria-label="telephone">

											<b><?php echo $theme_data['location1_phone']; ?></b>

										</a>

									<?php } ?>

								</li>       

							<?php } ?> 

							<?php if(!empty($theme_data['location2_phone'])){ ?>

								<li class="<?php echo $classP1;?>">

									<?php if($theme_data['location2_show_header'] == 1){  ?>

										<span><?php echo $theme_data['location2_title']; ?></span>

									<?php } ?>

									<?php if(!empty($theme_data['location2_phone'])){ ?>

										<a class="top-phone" href="tel:<?php echo $theme_data['location2_phone']; ?>" aria-label="telephone">

											<b><?php echo $theme_data['location2_phone']; ?></b>

										</a>

									<?php } ?>

								</li>       

							<?php } ?> 

							<?php if(!empty($theme_data['location3_phone'])){ ?>

								<li class="<?php echo $classP2;?>">

									<?php if($theme_data['location3_show_header'] == 1){  ?>

										<span><?php echo $theme_data['location3_title']; ?></span>

									<?php } ?>

									<?php if(!empty($theme_data['location3_phone'])){ ?>

										<a class="top-phone"  href="tel:<?php echo $theme_data['location3_phone']; ?>" aria-label="telephone">

											<b><?php echo $theme_data['location3_phone']; ?></b>

										</a>

									<?php } ?>

								</li>       

							<?php } ?> 

							<?php if(!empty($theme_data['location4_phone'])){ ?>

								<li class="<?php echo $classP3;?>">

									<?php if($theme_data['location4_show_header'] == 1){  ?>

										<span><?php echo $theme_data['location4_title']; ?></span>

									<?php } ?>

									<?php if(!empty($theme_data['location4_phone'])){ ?>

										<a class="top-phone" href="tel:<?php echo $theme_data['location4_phone']; ?>" aria-label="telephone">

											<b><?php echo $theme_data['location4_phone']; ?></b>

										</a>

									<?php } ?>

								</li>       

							<?php } ?> 

							<?php if(!empty($theme_data['location5_phone'])){ ?>

								<li class="<?php echo $classP5;?>">

									<?php if($theme_data['location5_show_header'] == 1){  ?>

										<span><?php echo $theme_data['location5_title']; ?></span>

									<?php } ?>

									<?php if(!empty($theme_data['location5_phone'])){ ?>

										<a class="top-phone" href="tel:<?php echo $theme_data['location5_phone']; ?>" aria-label="telephone">

											<b><?php echo $theme_data['location5_phone']; ?></b>

										</a>

									<?php } ?>

								</li>       

							<?php } ?> 

							<?php if(!empty($theme_data['location6_phone'])){ ?>

								<li class="<?php echo $classP6;?>">

									<?php if($theme_data['location6_show_header'] == 1){  ?>

										<span><?php echo $theme_data['location6_title']; ?></span>

									<?php } ?>

									<?php if(!empty($theme_data['location6_phone'])){ ?>

										<a class="top-phone" href="tel:<?php echo $theme_data['location6_phone']; ?>" aria-label="telephone">

											<b><?php echo $theme_data['location6_phone']; ?></b>

										</a>

									<?php } ?>

								</li>         

							<?php } ?>        

	                    </ul>

	                </div>

                <?php } ?>

			</nav> 

			<!-- botamnav\. -->

		</header> 

		<!-- header\. -->