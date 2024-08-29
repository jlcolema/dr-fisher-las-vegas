<?php

function tirepirates_theme_customizer( $wp_customize ) {







$wp_customize->add_panel( 'header_footer_settings', array(

 //'priority'       => 10,

  'capability'     => 'edit_theme_options',

  'theme_supports' => '',

  'title'          => __('Header & footer settings', 'tirepirates'),

 // 'description'    => __('Several settings pertaining my theme', 'mytheme'),

) );



$wp_customize->add_section('tirepirates_top_bar_section', array(

	'title'      => __('Social settings', 'tirepirates_top_bar_section'),

	'capability' => 'edit_theme_options',

	'panel'	=> 'header_footer_settings',

));



/* social links start*/

$wp_customize->add_setting('tirepirates_social_link_facebook',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_facebook', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Facebook URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_facebook_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_facebook_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_facebook_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_facebook_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_twitter',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_twitter', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Twitter URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_twitter_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_twitter_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_twitter_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_twitter_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_social_link_instagram',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_instagram', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Instagram URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_instagram_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_instagram_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_instagram_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_instagram_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_linkedin',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_linkedin', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Linkedin URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_linkedin_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_linkedin_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_linkedin_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_linkedin_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_pinterest',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_pinterest', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Pinterest URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_pinterest_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_pinterest_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_pinterest_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_pinterest_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_yelp',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_yelp', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Yelp URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_yelp_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_yelp_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_yelp_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_yelp_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_rss',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_rss', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('RSS Feed URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_rss_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_rss_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_rss_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_rss_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_youtube',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_youtube', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Youtube URL', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_youtube_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_youtube_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_youtube_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_youtube_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_gplus',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_gplus', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('G+ URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_gplus_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_gplus_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_gplus_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_gplus_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_angellist',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_angellist', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Angies List URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_angellist_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_angellist_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_angellist_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_angellist_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_bbb',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_bbb', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('BBB URL', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_bbb_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_bbb_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_bbb_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_bbb_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_social_link_custom1',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_custom1', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Custom Social URL1', 'tirepirates'),

	));



$wp_customize->add_setting( 'social_custom_img1' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'social_custom_img1', array(

		'label'    => __( 'Upload Custom Social Icon', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section',

		'settings' => 'social_custom_img1',

		'priority' => 200,

) ) );



$wp_customize->add_setting('tirepirates_custom1_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_custom1_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_custom1_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_custom1_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_social_link_custom2',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_custom2', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Custom Social URL2', 'tirepirates'),

	));



$wp_customize->add_setting( 'social_custom_img2' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'social_custom_img2', array(

		'label'    => __( 'Upload Custom Social Icon', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section',

		'settings' => 'social_custom_img2',

		'priority' => 200,

) ) );



$wp_customize->add_setting('tirepirates_blog_full_show',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_blog_full_show', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Disable Full Blog', 'tirepirates'),

	));

$wp_customize->add_setting('tirepirates_custom2_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_custom2_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_custom2_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_custom2_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_social_link_custom3',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_social_link_custom3', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Custom Social URL3', 'tirepirates'),

	));



$wp_customize->add_setting( 'social_custom_img3' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'social_custom_img3', array(

		'label'    => __( 'Upload Custom Social Icon', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section',

		'settings' => 'social_custom_img3',

		'priority' => 200,

) ) );



$wp_customize->add_setting('tirepirates_custom3_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_custom3_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Header', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_custom3_show_in_footer',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_custom3_show_in_footer', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section',

		'label'    => __('Show in Footer', 'tirepirates'),

	));











/* social links end */



/* Location start */



/* phone entry end */

$wp_customize->add_section('tirepirates_top_bar_location_section', array(

	'title'      => __('Header settings', 'tirepirates_top_bar_location_section'),

	'capability' => 'edit_theme_options',

	'panel'	=> 'header_footer_settings',

));



$wp_customize->add_setting('tirepirates_header_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_header_right', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Header Right Main Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_header_left_main',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_header_left_main', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Header Left Main Title', 'tirepirates'),

	));



//

$wp_customize->add_setting('tirepirates_location1_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 1 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location1_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Show Title in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location1_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 1 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 2 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Show Title in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 2 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 3 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Show Title in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 3 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 4 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Show Title in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 4 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 5 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Show Title in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 5 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 6 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_show_in_header',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_show_in_header', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Show Title in Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Location 6 Phone', 'tirepirates'),

	));



/* phone entry end */



/*Font famliy link*/

$wp_customize->add_setting('tirepirates_font_link',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			//'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_font_link', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Font links', 'tirepirates'),

	));



/*header script code*/

$wp_customize->add_setting('tirepirates_header_js_code',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			//'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_header_js_code', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_location_section',

		'label'    => __('Header Javascript code', 'tirepirates'),

	));



/* Location start */



/*Footer Section start*/

$wp_customize->add_section('tirepirates_top_bar_section2', array(

		'title'      => __('Footer settings', 'tirepirates_top_bar_section2'),

		'capability' => 'edit_theme_options',

		'panel'	=> 'header_footer_settings',

	));



/*copyright text start*/

$wp_customize->add_setting('tirepirates_financing_text',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_financing_text', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Financing Text', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_find_online_text',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_find_online_text', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Find us Online Text', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_copyright',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_copyright', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Copyright Text', 'tirepirates'),

	));

$wp_customize->add_setting( 'tirepirates_LocalIQ_img' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tirepirates_LocalIQ_img', array(
		'label'    => __( 'Upload alternate LocalIQ Image', 'tirepirates' ),
		'section'  => 'tirepirates_top_bar_section2',
		'settings' => 'tirepirates_LocalIQ_img',
		'priority' => 200,
) ) );

$wp_customize->add_setting('tirepirates_Local_IQ_img_hide_footer',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			//'sanitize_callback' => 'tirepirates_sanitize_url',
		)
	);

$wp_customize->add_control('tirepirates_Local_IQ_img_hide_footer', array(
		'type'     => 'checkbox',
		'priority' => 200,
		'section'  => 'tirepirates_top_bar_section2',
		'label'    => __('Hide in footer', 'tirepirates'),
	));


/*$wp_customize->add_setting('tirepirates_call_now_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_call_now_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Call Now Text', 'tirepirates'),

	));*/





$wp_customize->add_setting('tirepirates_location1_footer_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_footer_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 1 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location1_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Title on Right side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location1_footer_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_footer_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 1 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location1_phone_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_phone_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Phone On Right Side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_addressbox1',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_setting('tirepirates_location1_address_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_address_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Address 1 Title', 'tirepirates'),

	));





$wp_customize->add_control('tirepirates_addressbox1', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 1 Address', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location1_extracontent',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location1_extracontent', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 1 extra content', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_footer_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_footer_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 2 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Title on Right side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_footer_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_footer_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 2 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_phone_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_phone_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Phone On Right Side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_addressbox2',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_setting('tirepirates_location2_address_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_address_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Address 2 Title', 'tirepirates'),

	));



$wp_customize->add_control('tirepirates_addressbox2', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 2 Address', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location2_extracontent',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location2_extracontent', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 2 extra content', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_footer_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_footer_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 3 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Title on Right side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_footer_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_footer_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 3 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location3_phone_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location3_phone_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Phone On Right Side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_footer_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_footer_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 4 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Title on Right side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_footer_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_footer_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 4 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location4_phone_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location4_phone_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Phone On Right Side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_footer_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_footer_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 5 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Title on Right side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_footer_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_footer_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 5 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location5_phone_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location5_phone_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Phone On Right Side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_footer_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_footer_title', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 6 Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Title on Right side', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_footer_phone',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_footer_phone', array(

		'type'     => 'url',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Location 6 Phone', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_location6_phone_show_in_footer_right',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_location6_phone_show_in_footer_right', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Show Phone On Right Side', 'tirepirates'),

	));



$wp_customize->add_setting( 'footer_client_img1' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_client_img1', array(

		'label'    => __( 'Upload Footer Client Image 1', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section2',

		'settings' => 'footer_client_img1',

) ) );



$wp_customize->add_setting( 'footer_client_img2' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_client_img2', array(

		'label'    => __( 'Upload Footer Client Image 2', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section2',

		'settings' => 'footer_client_img2',

) ) );



/*$wp_customize->add_setting( 'footer_client_img3' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_client_img3', array(

		'label'    => __( 'Upload Footer Client Image 3', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section2',

		'settings' => 'footer_client_img3',

) ) );



$wp_customize->add_setting( 'footer_client_img4' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_client_img4', array(

		'label'    => __( 'Upload Footer Client Image 4', 'tirepirates' ),

		'section'  => 'tirepirates_top_bar_section2',

		'settings' => 'footer_client_img4',

) ) );*/



/*copyright text end*/



/*$wp_customize->add_setting( 'footer_logo' ); // Add setting for logo uploader

         

    // Add control for logo uploader (actual uploader)

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(

        'label'    => __( 'Upload Footer Logo', 'tirepirates' ),

        'section'  => 'tirepirates_top_bar_section2',

        'settings' => 'footer_logo',

        'priority'	=> 1000

    ) ) );*/

/*Footer script code*/

$wp_customize->add_setting('tirepirates_footer_js_code',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			//'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_footer_js_code', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'tirepirates_top_bar_section2',

		'label'    => __('Footer Javascript code', 'tirepirates'),

	));





/* home extra start*/



$wp_customize->add_setting('tirepirates_home_reviews_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_reviews_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Reviews Title', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_home_reviews_desc',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_reviews_desc', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Reviews Description', 'tirepirates'),

	));



$wp_customize->add_setting( 'reviews_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'review_bg', array(

		'label'    => __( 'Upload Reviews Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'reviews_bg',

) ) );





$wp_customize->add_setting( 'contact_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'contact_bg', array(

		'label'    => __( 'Upload Contact Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'contact_bg',

) ) );



$wp_customize->add_setting( 'service_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'service_bg', array(

		'label'    => __( 'Upload Services Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'service_bg',

) ) );



$wp_customize->add_setting( 'whychoose_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'whychoose_bg', array(

		'label'    => __( 'Upload Why Choose Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'whychoose_bg',

) ) );



$wp_customize->add_setting( 'blog_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'blog_bg', array(

		'label'    => __( 'Upload Blog Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'blog_bg',

) ) );



$wp_customize->add_setting( 'header_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_bg', array(

		'label'    => __( 'Upload Header Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'header_bg',

) ) );



$wp_customize->add_setting( 'content_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'content_bg', array(

		'label'    => __( 'Upload Content Middle Part Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'content_bg',

) ) );



$wp_customize->add_setting( 'footer_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_bg', array(

		'label'    => __( 'Upload Footer Background', 'tirepirates' ),

		'section'  => 'static_front_page',

		'settings' => 'footer_bg',

) ) );



$wp_customize->add_setting('tirepirates_header_sticky',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_header_sticky', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Disable Sticky Header', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_phone_show',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_phone_show', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Click to show phone in footer', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_show_form',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			//'sanitize_callback' => 'tirepirates_sanitize_url',

		)

	);



$wp_customize->add_control('tirepirates_home_show_form', array(

		'type'     => 'checkbox',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Show Form In Slider', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_blogside',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

			'default'           => 'right',

		)

	);



$wp_customize->add_control( 'tirepirates_home_blogside', array(

  'type' => 'radio',

  'priority' => 200,

  'section' => 'static_front_page', // Add a default or your own section

  'label' => __( 'Blog Position' ,'tirepirates'),

  'choices' => array(

    'right' => __( 'Right' ),

    'slider' => __( 'Slider' ),

  ),

) );





$wp_customize->add_setting('tirepirates_home_blog_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_blog_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Blog Title', 'tirepirates'),

	));





$wp_customize->add_setting('tirepirates_home_blog_desc',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_blog_desc', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Blog Description', 'tirepirates'),

	));









/*$wp_customize->add_setting('tirepirates_home_sevices_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_sevices_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Services Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_sevices_sub_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_sevices_sub_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Services Sub Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_sevices_desc',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_sevices_desc', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Services Description', 'tirepirates'),

	));*/

$wp_customize->add_setting('tirepirates_sidebar_top_desc',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_sidebar_top_desc', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Sidebar Top Description', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_sidebar_bottom_desc',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_sidebar_bottom_desc', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Sidebar Bottom Description', 'tirepirates'),

	));





/*$wp_customize->add_setting('tirepirates_home_reservation_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_reservation_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Reservation Button Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_reservation_link',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_reservation_link', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Reservation Button Link', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_valueable_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_valueable_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Valueable Statement Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_valueable_sub_title',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_valueable_sub_title', array(

		'type'     => 'text',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Valueable Statement Sub Title', 'tirepirates'),

	));



$wp_customize->add_setting('tirepirates_home_valueable_desc',

		array(

			'type'              => 'theme_mod',

			'capability'        => 'edit_theme_options',

			'transport'         => 'refresh',

		)

	);



$wp_customize->add_control('tirepirates_home_valueable_desc', array(

		'type'     => 'textarea',

		'priority' => 200,

		'section'  => 'static_front_page',

		'label'    => __('Valueable Statement Description', 'tirepirates'),

	));*/

}

/* home extra end*/







function tirepirates_sanitize_url( $url ) {

	return esc_url_raw( $url );

}

add_action( 'customize_register', 'tirepirates_theme_customizer');





?>