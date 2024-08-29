<?php
/**
 * Plugin Name:   Client Logo Widget Plugin
 * Plugin URI:    http://nationalpositions.com
 * Description:   Adds Client Logo widget that displays the Client Logos.
 * Version:       1.0
 * Author:        Haresh Kachhadiya
 * Author URI:    http://www.nationalpositions.com
 */


/**
 * Image Upload Widget
 */
class Client_logo_Widget extends WP_Widget {

    // Holds widget settings defaults, populated in constructor.
    protected $defaults;

    // Constructor. Set the default widget options and create widget.
    function __construct() {

        $this->defaults = array(
            'title' => '',
            'image' => '',
            'link'  => '',
        );

        $widget_ops = array(
            'classname'   => 'wpshed-media-widget',
            'description' => __( 'Client Logo Widget', 'wpshed' ),
        );

        $control_ops = array(
            'id_base' => 'wpshed-media-widget',
            'width'   => 200,
            'height'  => 250,
        );

        parent::__construct( 'wpshed-media-widget', __( 'Client Logo', 'wpshed' ), $widget_ops, $control_ops );

    }

    // The widget content.
    function widget( $args, $instance ) {

        //* Merge with defaults
        $instance = wp_parse_args( (array) $instance, $this->defaults );

        /*echo $args['before_widget'];
        echo ( ! empty( $instance['link'] ) ) ? '<a href="' . $instance['link'] . '">' : '';
        echo ( ! empty( $instance['image'] ) ) ? '<img src="' . $instance['image'] . '" alt="" />' : '';
        echo ( ! empty( $instance['link'] ) ) ? '</a>' : '';
        */
	//echo $args['before_widget'];
        ?>
            <!--<div class="col-md-3 col-sm-3 cs3">
                <div class="img-certi" align="center">-->
                  <img src="<?php echo $instance['image']; ?>" class="img-responsive">
                <!--</div>
            </div>-->
        <?php //echo $args['after_widget'];
    }

    // Update a particular instance.
    function update( $new_instance, $old_instance ) {

        $new_instance['image']  = strip_tags( $new_instance['image'] );
        $new_instance['link']   = strip_tags( $new_instance['link'] );

        return $new_instance;

    }

    // The settings update form.
    function form( $instance ) {

        // Merge with defaults
        $instance = wp_parse_args( (array) $instance, $this->defaults );

        ?>
       <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image', 'wpshed' ); ?>:</label>
            <div class="wpshed-media-container">
                <div class="wpshed-media-inner">
                    <?php $img_style = ( $instance[ 'image' ] != '' ) ? '' : 'style="display:none;"'; ?>
                    <img id="<?php echo $this->get_field_id( 'image' ); ?>-preview" src="<?php echo esc_attr( $instance['image'] ); ?>" <?php echo $img_style; ?> />
                    <?php $no_img_style = ( $instance[ 'image' ] != '' ) ? 'style="display:none;"' : ''; ?>
                    <span class="wpshed-no-image" id="<?php echo $this->get_field_id( 'image' ); ?>-noimg" <?php echo $no_img_style; ?>><?php _e( 'No image selected', 'wpshed' ); ?></span>
                </div>
            
            <input type="text" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo esc_attr( $instance['image'] ); ?>" class="wpshed-media-url" />

            <input type="button" value="<?php echo _e( 'Remove', 'wpshed' ); ?>" class="button wpshed-media-remove" id="<?php echo $this->get_field_id( 'image' ); ?>-remove" <?php echo $img_style; ?> />

            <?php $button_text = ( $instance[ 'image' ] != '' ) ? __( 'Change Image', 'wpshed' ) : __( 'Select Image', 'wpshed' ); ?>
            <input type="button" value="<?php echo $button_text; ?>" class="button wpshed-media-upload" id="<?php echo $this->get_field_id( 'image' ); ?>-button" />
            <br class="clear">
            </div>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'URL', 'wpshed' ); ?>:</label>
            <input type="text" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo esc_attr( $instance['link'] ); ?>" class="widefat" />
        </p>

        <?php

    }

}


/**
 * Register Widget
 */
function register_client_logo_widget() { 
  
    register_widget( 'Client_logo_Widget' ); 

} 
add_action( 'widgets_init','register_client_logo_widget' );
