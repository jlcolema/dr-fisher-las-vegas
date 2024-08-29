<?php

function tirepirates_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style('bootstrap');

//    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );

    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style('fontawesome');

//    wp_register_style('fontawesome-shim', 'https://use.fontawesome.com/releases/v5.6.3/css/v4-shims.css' );
//    wp_enqueue_style('fontawesome-shim');

    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
    wp_enqueue_style('carousel');

    wp_register_style('default', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
    wp_enqueue_style('default');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style('animate');

    wp_register_style('font-lato', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i' );
    wp_enqueue_style('font-lato');

    wp_register_style('font-Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i' );
    wp_enqueue_style('font-Montserrat');

    wp_register_style('stellarnav', get_template_directory_uri() . '/css/stellarnav.css');
    wp_enqueue_style('stellarnav');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style');
    //remove font awesome version 4 from Easy Testimonial plugin
    wp_dequeue_style('easy_testimonials_pro_style_fa');
    wp_deregister_style('easy_testimonials_pro_style_fa');
}

function tirepirates_enqueue_scripts() {
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js' ,'','',true);
    wp_enqueue_script('jquery');

    wp_register_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js' ,'','',true);
    wp_enqueue_script('jquery-ui');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' ,'','',true);
    wp_enqueue_script('bootstrap');

    wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js' ,'','',true);
    wp_enqueue_script('owl-carousel');

    wp_register_script('skip-link-focus', get_template_directory_uri() . '/js/skip-link-focus.js' ,'','',true);
    wp_enqueue_script('skip-link-focus');

    wp_register_script('stellarnav', get_template_directory_uri() . '/js/stellarnavfocus.min.js' ,'','',true);
    wp_enqueue_script('stellarnav');

    /*wp_register_script('chatwidget', 'http://widget.rlcdn.net/widget/rl_chatwidget.js' ,'','',true);
    wp_enqueue_script('chatwidget');*/

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('custom');

}

function tirepirates_wp_setup() {
    add_theme_support( 'widgets' );
    add_theme_support( 'title-tag' );
    add_theme_support('menus');
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails' );
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_widget( 'Feature_Box_Widget' );
  register_widget( 'client_logo_widget' );
}


if(function_exists('register_sidebar'))
{
    register_sidebar ( array (
            'name' => 'Featured Boxes',
            'id' => 'widget-1',
            'description' => 'Featured Boxes',
            'before_widget' => ' <div class=" col-pad-left col-two vfs-block '.slbd_count_widgets( 'widget-1' ).'">',
            'after_widget' => '</div>',
            //'before_title' => '<h3>',
            //'after_title' => '</h3>' ,
    ) );

    register_sidebar ( array (
            'name' => 'Client Logo',
            'id' => 'widget-2',
            'description' => 'Client Logo',
            //'before_widget' => '<div class="img-certi" align="center">',
            //'after_widget' => '</div>',
            //'before_title' => '<h3>',
            //'after_title' => '</h3>' ,
    ) );

}

function slbd_count_widgets( $sidebar_id ) {
      // If loading from front page, consult $_wp_sidebars_widgets rather than options
      // to see if wp_convert_widget_settings() has made manipulations in memory.
      global $_wp_sidebars_widgets;
      if ( empty( $_wp_sidebars_widgets ) ) :
          $_wp_sidebars_widgets = get_option( 'sidebars_widgets', array() );
      endif;

      $sidebars_widgets_count = $_wp_sidebars_widgets;

      if ( isset( $sidebars_widgets_count[ $sidebar_id ] ) ) :
          $widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );
          $widget_classes = 'widget-count-' . count( $sidebars_widgets_count[ $sidebar_id ] );
          if ( $widget_count % 4 == 0 || $widget_count > 6 ) :
              // Four widgets er row if there are exactly four or more than six
              $widget_classes .= ' col-sm-3';
          elseif ( $widget_count >= 3 ) :
              // Three widgets per row if there's three or more widgets
              $widget_classes .= ' col-sm-4';
          elseif ( 2 == $widget_count ) :
              // Otherwise show two widgets per row
              $widget_classes .= ' col-sm-6';
          endif;
          return $widget_classes;
      endif;
}

add_action( 'wp_enqueue_scripts', 'tirepirates_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'tirepirates_enqueue_scripts' );
add_action( 'after_setup_theme', 'tirepirates_wp_setup' );
add_action( 'init', 'register_my_menu' );
add_action( 'wp_footer', 'userWayFooterScript' );

require get_template_directory() . '/widgets/Feature_Box_Widget.php';
require get_template_directory() . '/widgets/client_logo_widget.php';
require get_template_directory() . '/inc/tirepirates-functions.php';
require get_template_directory() . '/inc/tirepirates-customizer.php';

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

// Register Custom Post Types
add_action('init', 'register_custom_posts_init');

function register_custom_posts_init() {
    // Register Staff
    $staff_labels = array(
        'name'               => 'Staff',
        'singular_name'      => 'Staff',
        'menu_name'          => 'Staff',
        'add_new_item'       => 'Add New Staff Member',
        'edit_item'          => 'Edit Staff Member'
    );
    $staff_args = array(
        'labels'             => $staff_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-groups',
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' )
    );
    register_post_type('staff_members', $staff_args);

    // Register Why Choose Us
    $whyChoose_labels = array(
        'name'               => 'Why Choose',
        'singular_name'      => 'Why Choose',
        'menu_name'          => 'Why Choose',
        'add_new_item'       => 'Add New Why Choose',
        'edit_item'          => 'Edit Why Choose'
    );
    $whyChoose_args = array(
        'labels'             => $whyChoose_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-groups',
        'has_archive'        => true,
        'supports'           => array( 'title', 'revisions' )
    );
    register_post_type('why_Choose', $whyChoose_args);

    // Register Testimonials
    $testimonials_labels = array(
        'name'               => 'Feature Testimonials',
        'singular_name'      => 'Feature Testimonials',
        'menu_name'          => 'Feature Testimonials',
        'add_new_item'       => 'Add New Feature Testimonials',
        'edit_item'          => 'Edit Feature Testimonials'
    );
    $testimonials_args = array(
        'labels'             => $testimonials_labels,
        'public'             => true,
        'title'               => 'a',
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-testimonial',
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'revisions' )
    );
    register_post_type('ftestimonial', $testimonials_args);
}

// define the comment_form_default_fields callback
function filter_comment_form_default_fields( $fields ) {
    // make filter magic happen here...
    return $fields;
};

// add the filter
add_filter( 'comment_form_default_fields', 'filter_comment_form_default_fields', 10, 1 );

require('inc/rl-primary-domains.php');

//Gravity Forms WCAG 2.0
add_filter( 'gform_tabindex', '__return_false' );
//creates more rebust error message for screen readers
add_filter( 'gform_validation_message', 'change_validation_message', 10, 2 );

function change_validation_message( $message, $form ) {
    $referrer = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : $_SERVER["REQUEST_URI"];
    $error = '';
    $message = ''; // clear $messages so default GF error message is not displayed (There was a problem with your submission. Errors have been highlighted below.)
    foreach ( $form['fields'] as $field ) {
        $failed_field = $field->failed_validation;
        $failed[] = $failed_field;
        $failed_message = strip_tags( $field->validation_message );
        if ( $failed_field ) {
            $error .= '<li><a href="' . $referrer . '#field_' . $form['id'] . '_' . $field['id'] .'">' . $field['label'] . ' - ' . ( ( "" == $field['errorMessage'] ) ? $failed_message:$field['errorMessage'] ) . '</a></li>';
        }
    }

    $length  = count( array_keys( $failed, true ) );
    $prompt  = sprintf( _n( 'There was %s error found in the information you submitted', 'There were %s errors found in the information you submitted', $length ), $length );

    $message .= "<div id='error' aria-live='assertive' role='alert'>";
    $message .= "<div class='validation_error' ";
    $message .= ">";
    $message .= $prompt;
    $message .= "</div>";
    $message .= "<ol class='validation_list'>";
    $message .= $error;
    $message .= "</ol>";
    $message .= "</div>";
    return $message;
} // END change_validation_message

//Remove Schema data for reviews in Easy Testimonials
function schema_content () {
    return "";
}

add_filter ( "easy_testimonials_json_ld", schema_content, 2 );

// add Userway integration
function userWayFooterScript(){
    $user_way_code = get_site_option('user_way_code');

    if( !empty($user_way_code) ){
        ?>
        <script type='text/javascript'>var _userway_config = {account: '<?php echo $user_way_code ?>'};</script>
        <script type='text/javascript' src='https://cdn.userway.org/widget.js'></script>
        <?php
    }
}

include('saml-config.php');
