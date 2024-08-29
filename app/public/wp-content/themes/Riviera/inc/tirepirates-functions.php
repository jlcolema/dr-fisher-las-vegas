<?php

function tirepirates_set_theme_var() {
	$theme_data = array(
		'social_link_facebook'        => get_theme_mod('tirepirates_social_link_facebook'),
		'social_link_twitter'         => get_theme_mod('tirepirates_social_link_twitter'),
		'social_link_instagram'       => get_theme_mod('tirepirates_social_link_instagram'),
		'social_link_linkedin'        => get_theme_mod('tirepirates_social_link_linkedin'),
		'social_link_pinterest'       => get_theme_mod('tirepirates_social_link_pinterest'),
		'social_link_yelp'      	  => get_theme_mod('tirepirates_social_link_yelp'),
		'social_link_rss'       	  => get_theme_mod('tirepirates_social_link_rss'),
		'social_link_youtube' 		  => get_theme_mod('tirepirates_social_link_youtube'),
		'social_link_gplus'       	  => get_theme_mod('tirepirates_social_link_gplus'),
		'social_link_angellist'       => get_theme_mod('tirepirates_social_link_angellist'),
		'social_link_bbb'       	  => get_theme_mod('tirepirates_social_link_bbb'),
		'social_link_homeadvisor'     => get_theme_mod('tirepirates_social_link_homeadvisor'),
		'facebook_show_header'        => get_theme_mod('tirepirates_facebook_show_in_header'),
		'facebook_show_footer'        => get_theme_mod('tirepirates_facebook_show_in_footer'),
		'twitter_show_header'         => get_theme_mod('tirepirates_twitter_show_in_header'),
		'twitter_show_footer'         => get_theme_mod('tirepirates_twitter_show_in_footer'),
		'instagram_show_header'       => get_theme_mod('tirepirates_instagram_show_in_header'),
		'instagram_show_footer'       => get_theme_mod('tirepirates_instagram_show_in_footer'),
		'linkedin_show_header'        => get_theme_mod('tirepirates_linkedin_show_in_header'),
		'linkedin_show_footer'        => get_theme_mod('tirepirates_linkedin_show_in_footer'),
		'pinterest_show_header'       => get_theme_mod('tirepirates_pinterest_show_in_header'),
		'pinterest_show_footer'       => get_theme_mod('tirepirates_pinterest_show_in_footer'),
		'yelp_show_header'        	  => get_theme_mod('tirepirates_yelp_show_in_header'),
		'yelp_show_footer'            => get_theme_mod('tirepirates_yelp_show_in_footer'),
		'rss_show_header'        	  => get_theme_mod('tirepirates_rss_show_in_header'),
		'rss_show_footer'        	  => get_theme_mod('tirepirates_rss_show_in_footer'),
		'blog_full_show'		  	  => get_theme_mod('tirepirates_blog_full_show'),
		'youtube_show_header'         => get_theme_mod('tirepirates_youtube_show_in_header'),
		'youtube_show_footer'         => get_theme_mod('tirepirates_youtube_show_in_footer'),
		'gplus_show_header'           => get_theme_mod('tirepirates_gplus_show_in_header'),
		'gplus_show_footer'           => get_theme_mod('tirepirates_gplus_show_in_footer'),
		'angellist_show_header'       => get_theme_mod('tirepirates_angellist_show_in_header'),
		'angellist_show_footer'       => get_theme_mod('tirepirates_angellist_show_in_footer'),
		'bbb_show_header'        	  => get_theme_mod('tirepirates_bbb_show_in_header'),
		'bbb_show_footer'        	  => get_theme_mod('tirepirates_bbb_show_in_footer'),
		'homeadvisor_show_header'     => get_theme_mod('tirepirates_homeadvisor_show_in_header'),
		'homeadvisor_show_footer'     => get_theme_mod('tirepirates_homeadvisorb_show_in_footer'),
		'social_link_custom1'		  => get_theme_mod('tirepirates_social_link_custom1'),
		'social_custom_img1'		  => get_theme_mod('social_custom_img1'),
		'link_custom1_show_header'    => get_theme_mod('tirepirates_custom1_show_in_header'),
		'link_custom1_show_footer'    => get_theme_mod('tirepirates_custom1_show_in_footer'),
		'social_link_custom2'		  => get_theme_mod('tirepirates_social_link_custom2'),
		'social_custom_img2'		  => get_theme_mod('social_custom_img2'),
		'link_custom2_show_header'    => get_theme_mod('tirepirates_custom2_show_in_header'),
		'link_custom2_show_footer'    => get_theme_mod('tirepirates_custom2_show_in_footer'),
		'social_link_custom3'		  => get_theme_mod('tirepirates_social_link_custom2'),
		'social_custom_img3'		  => get_theme_mod('social_custom_img3'),
		'link_custom3_show_header'    => get_theme_mod('tirepirates_custom3_show_in_header'),
		'link_custom3_show_footer'    => get_theme_mod('tirepirates_custom3_show_in_footer'),
		'custom_logo_id'			  => get_theme_mod('custom_logo'),
		'copyright'		  			  => get_theme_mod('tirepirates_copyright'),
		'LocalIQ_img'			      => get_theme_mod('tirepirates_LocalIQ_img'),
		'Local_IQ_img_hide_footer'    => get_theme_mod('tirepirates_Local_IQ_img_hide_footer'),
		'footer_logo'				  => get_theme_mod('footer_logo'),
		/*'home_sevices_title'		  => get_theme_mod('tirepirates_home_sevices_title'),
		'home_sevices_sub_title'	  => get_theme_mod('tirepirates_home_sevices_sub_title'),
		'home_sevices_desc'			  => get_theme_mod('tirepirates_home_sevices_desc'),*/
		/*'home_valueable_title'	  => get_theme_mod('tirepirates_home_valueable_title'),
		'home_valueable_sub_title'	  => get_theme_mod('tirepirates_home_valueable_sub_title'),
		'home_valueable_desc'		  => get_theme_mod('tirepirates_home_valueable_desc'),*/
		'sidebar_top_desc'		      => get_theme_mod('tirepirates_sidebar_top_desc'),
		'sidebar_bottom_desc'		  => get_theme_mod('tirepirates_sidebar_bottom_desc'),
		'home_reviews_title'		  => get_theme_mod('tirepirates_home_reviews_title'),
		'home_reviews_desc'			  => get_theme_mod('tirepirates_home_reviews_desc'),
		'home_reviews_bg'			  => get_theme_mod('reviews_bg'),
		'home_contact_bg'			  => get_theme_mod('contact_bg'),
		'home_service_bg'			  => get_theme_mod('service_bg'),
		'home_whychoose_bg'			  => get_theme_mod('whychoose_bg'),
		'home_blog_bg'			      => get_theme_mod('blog_bg'),
		'home_header_bg'			  => get_theme_mod('header_bg'),
		'home_content_bg'			  => get_theme_mod('content_bg'),
		'home_footer_bg'			  => get_theme_mod('footer_bg'),
		'show_all_phone'		  	  => get_theme_mod('tirepirates_phone_show'),
		'header_sticky'		  	  	  => get_theme_mod('tirepirates_header_sticky'),
		'home_form_slider'		  	  => get_theme_mod('tirepirates_home_show_form'),
		'home_blog_title'		  	  => get_theme_mod('tirepirates_home_blog_title'),
		'home_blog_desc'			  => get_theme_mod('tirepirates_home_blog_desc'),
		'home_blog_side'			  => get_theme_mod('tirepirates_home_blogside'),
		'font_link'                   => get_theme_mod('tirepirates_font_link'),
		'header_js_code'              => get_theme_mod('tirepirates_header_js_code'),
		'footer_js_code'              => get_theme_mod('tirepirates_footer_js_code'),
		'header_right'				  => get_theme_mod('tirepirates_header_right'),
		'header_left_main'			  => get_theme_mod('tirepirates_header_left_main'),
		'location1_title'             => get_theme_mod('tirepirates_location1_title'),
		'location1_phone'             => get_theme_mod('tirepirates_location1_phone'),
		'location2_title'             => get_theme_mod('tirepirates_location2_title'),
		'location2_phone'             => get_theme_mod('tirepirates_location2_phone'),
		'location3_title'      		  => get_theme_mod('tirepirates_location3_title'),
		'location3_phone'      		  => get_theme_mod('tirepirates_location3_phone'),
		'location4_title'      		  => get_theme_mod('tirepirates_location4_title'),
		'location4_phone'      		  => get_theme_mod('tirepirates_location4_phone'),
		'location5_title'      		  => get_theme_mod('tirepirates_location5_title'),
		'location5_phone'      		  => get_theme_mod('tirepirates_location5_phone'),
		'location6_title'      		  => get_theme_mod('tirepirates_location6_title'),
		'location6_phone'      		  => get_theme_mod('tirepirates_location6_phone'),
		/*'reservation_title'      	  => get_theme_mod('tirepirates_home_reservation_title'),
		'reservation_link'      	  => get_theme_mod('tirepirates_home_reservation_link'),*/
		'location1_footer_title'      => get_theme_mod('tirepirates_location1_footer_title'),
		'location1_address_title'      => get_theme_mod('tirepirates_location1_address_title'),
		'location2_address_title'      => get_theme_mod('tirepirates_location2_address_title'),
		'location1_footer_phone'      => get_theme_mod('tirepirates_location1_footer_phone'),
		'location1_address'           => get_theme_mod('tirepirates_addressbox1'),
		'location1_extracontent'      => get_theme_mod('tirepirates_location1_extracontent'),
		'location2_footer_title'      => get_theme_mod('tirepirates_location2_footer_title'),
		'location2_footer_phone'      => get_theme_mod('tirepirates_location2_footer_phone'),
		'location2_address'           => get_theme_mod('tirepirates_addressbox2'),
		'location2_extracontent'      => get_theme_mod('tirepirates_location2_extracontent'),
		'location3_footer_title'      => get_theme_mod('tirepirates_location3_footer_title'),
		'location3_footer_phone'      => get_theme_mod('tirepirates_location3_footer_phone'),
		'location4_footer_title'      => get_theme_mod('tirepirates_location4_footer_title'),
		'location4_footer_phone'      => get_theme_mod('tirepirates_location4_footer_phone'),
		'location5_footer_title'      => get_theme_mod('tirepirates_location5_footer_title'),
		'location5_footer_phone'      => get_theme_mod('tirepirates_location5_footer_phone'),
		'location6_footer_title'      => get_theme_mod('tirepirates_location6_footer_title'),
		'location6_footer_phone'      => get_theme_mod('tirepirates_location6_footer_phone'),
		'footer_client_img1'          => get_theme_mod('footer_client_img1'),
		'footer_client_img2'          => get_theme_mod('footer_client_img2'),
		/*'footer_client_img3'          => get_theme_mod('footer_client_img3'),
		'footer_client_img4'          => get_theme_mod('footer_client_img4'),*/
		'financing_text'              => get_theme_mod('tirepirates_financing_text'),
		'find_online_text'            => get_theme_mod('tirepirates_find_online_text'),
		'location1_show_right'        => get_theme_mod('tirepirates_location1_show_in_footer_right'),
		'location2_show_right'        => get_theme_mod('tirepirates_location2_show_in_footer_right'),
		'location3_show_right'        => get_theme_mod('tirepirates_location3_show_in_footer_right'),
		'location4_show_right'        => get_theme_mod('tirepirates_location4_show_in_footer_right'),
		'location5_show_right'        => get_theme_mod('tirepirates_location5_show_in_footer_right'),
		'location6_show_right'        => get_theme_mod('tirepirates_location6_show_in_footer_right'),
		'location1_phone_show_right'  => get_theme_mod('tirepirates_location1_phone_show_in_footer_right'),
		'location2_phone_show_right'  => get_theme_mod('tirepirates_location2_phone_show_in_footer_right'),
		'location3_phone_show_right'  => get_theme_mod('tirepirates_location3_phone_show_in_footer_right'),
		'location4_phone_show_right'  => get_theme_mod('tirepirates_location4_phone_show_in_footer_right'),
		'location5_phone_show_right'  => get_theme_mod('tirepirates_location5_phone_show_in_footer_right'),
		'location6_phone_show_right'  => get_theme_mod('tirepirates_location6_phone_show_in_footer_right'),
		'location1_show_header'       => get_theme_mod('tirepirates_location1_show_in_header'),
		'location2_show_header'       => get_theme_mod('tirepirates_location2_show_in_header'),
		'location3_show_header'       => get_theme_mod('tirepirates_location3_show_in_header'),
		'location4_show_header'       => get_theme_mod('tirepirates_location4_show_in_header'),
		'location5_show_header'       => get_theme_mod('tirepirates_location5_show_in_header'),
		'location6_show_header'       => get_theme_mod('tirepirates_location6_show_in_header'),
		'call_now_title'              => get_theme_mod('tirepirates_call_now_title'),
	);
	return $theme_data;
}

function tirepirates_get_social_block(){
    $theme_data = tirepirates_set_theme_var();

    ?>
        <ul>
			<?php if($theme_data['social_link_facebook'] && $theme_data['facebook_show_header'] == 1){?>
			<li><a target="_blank" aria-label="Link to Facebook" href="<?php echo $theme_data['social_link_facebook'];?>" class="header-social c-social-fb"><i aria-hidden class="fa fa-facebook"></i></a></li>
			<?php } ?>

			<?php if($theme_data['social_link_twitter'] && $theme_data['twitter_show_header'] == 1){?>
			<li><a target="_blank" aria-label="Link to Twitter" href="<?php echo $theme_data['social_link_twitter'];?>" class="header-social c-social-tw"><i aria-hidden class="fa fa-twitter"></i></a></li>
			<?php } ?>

			<?php if($theme_data['social_link_instagram'] && $theme_data['instagram_show_header'] == 1){?>
			<li><a target="_blank" aria-label="Link to Instagram" href="<?php echo $theme_data['social_link_instagram'];?>" class="header-social c-social-ins"><i aria-hidden class="fa fa-instagram"></i></a></li>
			<?php } ?>

    		<?php if($theme_data['social_link_linkedin'] && $theme_data['linkedin_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to LinkedIn" href="<?php echo $theme_data['social_link_linkedin'];?>" class="header-social c-social-ln"><i aria-hidden class="fa fa-linkedin"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_pinterest'] && $theme_data['pinterest_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Pinterest" href="<?php echo $theme_data['social_link_pinterest'];?>" class="header-social c-social-pin"><i aria-hidden class="fa fa-pinterest"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_yelp'] && $theme_data['yelp_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Yelp" href="<?php echo $theme_data['social_link_yelp'];?>" class="header-social c-social-yelp"><i aria-hidden class="fa fa-yelp"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_rss'] && $theme_data['rss_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to RSS Feed" href="<?php echo $theme_data['social_link_rss'];?>" class="header-social c-social-rss"><i aria-hidden class="fa fa-rss"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_youtube'] && $theme_data['youtube_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Youtube" href="<?php echo $theme_data['social_link_youtube'];?>" class="header-social c-social-yt"><i aria-hidden class="fa fa-youtube-play"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_gplus'] && $theme_data['gplus_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Google Plus" href="<?php echo $theme_data['social_link_gplus'];?>" class="header-social c-social-gp"><i aria-hidden class="fa fa-google-plus"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_angellist'] && $theme_data['angellist_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Angies List" href="<?php echo $theme_data['social_link_angellist'];?>" class="header-social c-social-angellist"><i aria-hidden class="fa fa-angellist"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_bbb'] && $theme_data['bbb_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to BBB" href="<?php echo $theme_data['social_link_bbb'];?>" class="header-social c-social-bbb">B</a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_homeadvisor'] && $theme_data['homeadvisor_show_header'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Home Advisor" href="<?php echo $theme_data['social_link_homeadvisor'];?>" class="header-social c-social-homeadvisor"><i aria-hidden class="fa fa-home"></i></a></li>
    		<?php } ?>


    		<?php if($theme_data['social_link_custom1'] && $theme_data['link_custom1_show_header'] == 1){

    			

    			?>
    		<li><a target="_blank" aria-label="Link to outside social website." href="<?php echo $theme_data['social_link_custom1'];?>" class="header-social c-social-custom1"><img src="<?php echo $theme_data['social_custom_img1']; ?>"></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_custom2'] && $theme_data['link_custom2_show_header'] == 1){
    			
    			?>
    		<li><a target="_blank" aria-label="Link to outside social website." href="<?php echo $theme_data['social_link_custom2'];?>" class="header-social c-social-custom1"><img src="<?php echo $theme_data['social_custom_img2']; ?>"></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_custom3'] && $theme_data['link_custom3_show_header'] == 1){
    			
    			?>
    		<li><a target="_blank" aria-label="Link to outside social website." href="<?php echo $theme_data['social_link_custom3'];?>" class="header-social c-social-custom1"><img src="<?php echo $theme_data['social_custom_img3']; ?>"></a></li>
    		<?php } ?>
		</ul>
    <?php
}

function tirepirates_get_social_block_footer(){
    $theme_data = tirepirates_set_theme_var();
    ?>
        <ul>
			<?php if($theme_data['social_link_facebook'] && $theme_data['facebook_show_footer'] == 1){?>
			<li><a target="_blank" aria-label="Link to Facebook" href="<?php echo $theme_data['social_link_facebook'];?>" class="header-social c-social-fb"><i aria-hidden class="fa fa-facebook"></i></a></li>
			<?php } ?>

			<?php if($theme_data['social_link_twitter'] && $theme_data['twitter_show_footer'] == 1){?>
			<li><a target="_blank" aria-label="Link to Twitter" href="<?php echo $theme_data['social_link_twitter'];?>" class="header-social c-social-tw"><i aria-hidden class="fa fa-twitter"></i></a></li>
			<?php } ?>

			<?php if($theme_data['social_link_instagram'] && $theme_data['instagram_show_footer'] == 1){?>
			<li><a target="_blank" aria-label="Link to Instagram" href="<?php echo $theme_data['social_link_instagram'];?>" class="header-social c-social-ins"><i aria-hidden class="fa fa-instagram"></i></a></li>
			<?php } ?>

    		<?php if($theme_data['social_link_linkedin'] && $theme_data['linkedin_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to LinkedIn" href="<?php echo $theme_data['social_link_linkedin'];?>" class="header-social c-social-ln"><i aria-hidden class="fa fa-linkedin"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_pinterest'] && $theme_data['pinterest_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Pinterest" href="<?php echo $theme_data['social_link_pinterest'];?>" class="header-social c-social-pin"><i aria-hidden class="fa fa-pinterest"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_yelp'] && $theme_data['yelp_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Yelp" href="<?php echo $theme_data['social_link_yelp'];?>" class="header-social c-social-yelp"><i aria-hidden class="fa fa-yelp"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_rss'] && $theme_data['rss_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to RSS" href="<?php echo $theme_data['social_link_rss'];?>" class="header-social c-social-rss"><i aria-hidden class="fa fa-rss"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_youtube'] && $theme_data['youtube_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Youtube" href="<?php echo $theme_data['social_link_youtube'];?>" class="header-social c-social-yt"><i aria-hidden class="fa fa-youtube-play"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_gplus'] && $theme_data['gplus_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Google Plus" href="<?php echo $theme_data['social_link_gplus'];?>" class="header-social c-social-gp"><i aria-hidden class="fa fa-google-plus"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_angellist'] && $theme_data['angellist_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Angies List" href="<?php echo $theme_data['social_link_angellist'];?>" class="header-social c-social-angellist"><i aria-hidden class="fa fa-angellist"></i></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_bbb'] && $theme_data['bbb_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to BBB" href="<?php echo $theme_data['social_link_bbb'];?>" class="header-social c-social-bbb">B</a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_homeadvisor'] && $theme_data['homeadvisor_show_footer'] == 1){?>
    		<li><a target="_blank" aria-label="Link to Home Advisor" href="<?php echo $theme_data['social_link_homeadvisor'];?>" class="header-social c-social-homeadvisor"><i aria-hidden class="fa fa-home"></i></a></li>
    		<?php } ?>

    		 <?php if($theme_data['social_link_custom1'] && $theme_data['link_custom1_show_footer'] == 1){
    			
    			?>
    		<li><a target="_blank" aria-label="Link to outside social website." href="<?php echo $theme_data['social_link_custom1'];?>" class="header-social c-social-custom1"><img src="<?php echo $theme_data['social_custom_img1']; ?>"></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_custom2'] && $theme_data['link_custom2_show_footer'] == 1){
    			
    			?>
    		<li><a target="_blank" aria-label="Link to outside social website." href="<?php echo $theme_data['social_link_custom2'];?>" class="header-social c-social-custom1"><img src="<?php echo $theme_data['social_custom_img2']; ?>"></a></li>
    		<?php } ?>

    		<?php if($theme_data['social_link_custom3'] && $theme_data['link_custom3_show_footer'] == 1){
    			
    			?>
    		<li><a target="_blank" aria-label="Link to outside social website." href="<?php echo $theme_data['social_link_custom3'];?>" class="header-social c-social-custom1"><img src="<?php echo $theme_data['social_custom_img3']; ?>"></a></li>
    		<?php } ?>
		</ul>
    <?php
}

function tirepirates_get_phone_block(){
 	$theme_data = tirepirates_set_theme_var();
 	if(!empty($theme_data['header_right'])){
		echo "<ul class='nav navbar-nav col-sm-4 text-right llh-cdetail'>".stripcslashes($theme_data['header_right']).'</ul>';
	}
}

function tirepirates_get_phone_block_footer(){
 	$theme_data = tirepirates_set_theme_var();
 	if(!empty($theme_data['header_right'])){
		echo "<ul class='nav navbar-nav text-right'>".stripcslashes($theme_data['header_right']).'</ul>';
	}
}

function tirepirates_get_custom_logo(){
	$theme_data = tirepirates_set_theme_var();
	$logo = wp_get_attachment_image_src( $theme_data['custom_logo_id'] , 'full' );
	if ( has_custom_logo() ) {
        echo '<img src="'. esc_url( $logo[0] ) .'" class="img-responsive" alt="'. get_bloginfo ('name') .' Logo">';
	} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
	}
}

function tirepirates_get_footer_logo(){
	$theme_data = tirepirates_set_theme_var();
	$logo = wp_get_attachment_image_src( $theme_data['custom_logo_id'] , 'full' );
	list($width, $height, $type, $attr) = getimagesize($logo[0]);
	if ( has_custom_logo() )
		echo '<a href="'.home_url().'"><img class="logo img-responsive" src="'. esc_url( $logo[0] ) .'" alt="'. get_bloginfo ('name') .' Logo" style="max-width:'.$width.'px;max-height:'.$height.'px;"></a>';
	else
		echo '<a href="#pagellh"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
}
?>