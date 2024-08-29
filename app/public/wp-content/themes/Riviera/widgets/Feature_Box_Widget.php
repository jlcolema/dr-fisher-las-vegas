<?php
/**
 * Plugin Name:   Feature Box Widget Plugin
 * Plugin URI:    http://nationalpositions.com
 * Description:   Adds an Feature Box widget that displays the Feature Boxes in a widget area.
 * Version:       1.0
 * Author:        Haresh Kachhadiya
 * Author URI:    http://www.nationalpositions.com
 */

/**
 * Load scripts.
 */
function wpshed_image_upload_scripts() {
    global $pagenow, $wp_customize;
    if ( 'widgets.php' === $pagenow || isset( $wp_customize ) ) {
        wp_enqueue_media();
        wp_enqueue_script( 'wpshed-image-upload', get_template_directory_uri() . '/js/img_upload.js', array( 'jquery' ) );
        wp_enqueue_style( 'wpshed-image-upload',  get_template_directory_uri()  . '/css/img_upload.css' );
    }
}
add_action( 'admin_enqueue_scripts', 'wpshed_image_upload_scripts' );

class Feature_Box_Widget extends WP_Widget {
  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'feature_box', 'description' => 'This is an Feature Box Widget' );
    parent::__construct( 'feature_box', 'Feature Box', $widget_options );
        //add_action('admin_enqueue_scripts', array($this, 'mfc_assets'));
  }

  // Create the widget output.
  public function widget( $args, $instance ) {
    #echo "<PRE>";print_r($instance);exit;
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    $desc = apply_filters( 'widget_title', $instance[ 'desc' ] );
    $buttonTitle = apply_filters( 'widget_title', $instance[ 'buttonTitle' ] );
    $buttonLink = apply_filters( 'widget_title', $instance[ 'buttonLink' ] );
    $image = apply_filters( 'widget_title', $instance[ 'image' ] );
    $alt = apply_filters( 'widget_title', $instance[ 'alt' ] );
    echo $args['before_widget'];?>
      <div class="vfs-wrp">
        <div class="vfs-div relative">
            <div class="blog-bg color">
              <div class="blog-bg" 
               <?php
                if(!empty($image)){
                  $background_style_and_alt = 'style="background-image: url( ' . $image . ');" alt="' . $alt . '"';
                  echo $background_style_and_alt;
                } ?>>
              </div>
            </div>
            <a href="<?php echo $buttonLink; ?>" aria-label="<?php echo $title;?>">
            <div class="info">
              <h2 class="c-featured-title"><?php echo $title;?></h2>
              <p class="c-featured-content"><?php echo $desc;?></p>
              <?php 
              if(!empty($buttonTitle)){
              ?>
              <a href="<?php echo $buttonLink;?>" class="c-featured-button vfs-link"><?php echo $buttonTitle;?><i class="fa fa-angle-right"></i></a>
              <?php } ?>
            </div>
          </a>
        </div>
      </div>
    <?php echo $args['after_widget'];

  }

  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <?php  $image = ! empty( $instance['image'] ) ? $instance['image'] : ''; ?>
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
    <?php $alt = ! empty( $instance['alt'] ) ? $instance['alt'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'alt' ); ?>">Alt text for images:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'alt' ); ?>" name="<?php echo $this->get_field_name( 'alt' ); ?>" value="<?php echo esc_attr( $alt ); ?>" />
    </p>
    <?php $desc = ! empty( $instance['desc'] ) ? $instance['desc'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'desc' ); ?>">Desc:</label><br>
      <textarea id="<?php echo $this->get_field_id( 'desc' ); ?>" style="width: 100%;" name="<?php echo $this->get_field_name( 'desc' ); ?>"><?php echo esc_attr( $desc ); ?></textarea>
    </p>
    <?php $buttonTitle = ! empty( $instance['buttonTitle'] ) ? $instance['buttonTitle'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'buttonTitle' ); ?>">Button Title:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'buttonTitle' ); ?>" name="<?php echo $this->get_field_name( 'buttonTitle' ); ?>" value="<?php echo esc_attr( $buttonTitle ); ?>" />
    </p>
    <?php $buttonLink = ! empty( $instance['buttonLink'] ) ? $instance['buttonLink'] : '#'; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'buttonLink' ); ?>">Desc:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'buttonLink' ); ?>" name="<?php echo $this->get_field_name( 'buttonLink' ); ?>" value="<?php echo esc_attr( $buttonLink ); ?>" />
    </p>
    <?php
  }

  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    $instance[ 'desc' ] = strip_tags( $new_instance[ 'desc' ] );
    $instance[ 'buttonTitle' ] = strip_tags( $new_instance[ 'buttonTitle' ] );
    $instance[ 'buttonLink' ] = strip_tags( $new_instance[ 'buttonLink' ] );
    $instance[ 'image' ] = strip_tags( $new_instance[ 'image' ] );
    $instance[ 'alt' ] = strip_tags( $new_instance[ 'alt' ] );
    return $instance;
  }
}

// Register the widget.
function Feature_Box_register_widget() { 
  register_widget( 'Feature_Box_Widget' );
}
add_action( 'widgets_init', 'Feature_Box_register_widget' );
?>