<?php
/* Template Name: Template: Home Page */
?>
<?php 
    get_header(); 
    wp_reset_postdata(); 
    $theme_data = tirepirates_set_theme_var();
?>
    <div class="main-content" id="main-content" role="main">
        
        <?php
        $results = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "rg_form where is_active = 1 limit 1", OBJECT);
        $sliderClass = 'slider1'; 
        if($theme_data['home_form_slider'] == 1 && !empty($results)){
            $sliderClass = 'slider';
            ?>
                <style type="text/css">
                    @media (min-width:1280px){

                        .rev_slider_wrapper, .rev_slider {
                            height:100% !important;
                            max-height:100% !important;
                        }

                        .slider, .slider > div{
                            height:100% !important;
                        }
                        .form-slide {
                            height:100%;
                        }
                    }
                </style>
            <?php 
        }
        ?>
        <div class="sl-from-wrapp">
            <section class="<?php echo $sliderClass; ?>">    
            <?php
                if(is_plugin_active('smart-slider-3/smart-slider-3.php')){
                	$sliderResults = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "nextend2_smartslider3_sliders order by ID desc limit 1",OBJECT);
            		$sliderId = $sliderResults->id;
            		
                    echo do_shortcode('[smartslider3 slider='.$sliderId.']');
                }
                else{
                    
                      putRevSlider("home", "home");
                }
                ?>
            </section>  
            <?php
                
                if(!empty($results)):
                    if($theme_data['home_form_slider'] == 1):?>
                    <section class="form-slide">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-12"> 
                                    <div class="slide-form" role="form">
                                        <?php 
                                        if(is_plugin_active('salesforce-wordpress-to-lead/salesforce.php')){
                                                echo do_shortcode("[salesforce form =\"1\"]"); 
                                        }
                                        else{
                                        echo do_shortcode("[gravityform id=\"".$results->id."\" title=\"true\" description=\"true\"]"); 
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif;?>
            <?php endif;?>
        </div>

        <!-- Feature Box -->
        <?php get_template_part('template-parts/home','featurebox');?>
        
        <!-- Content -->
        <?php get_template_part('template-parts/home','content');?>

        <!-- valuable statement -->
        <?php get_template_part('template-parts/home','whychoose');?>

        <!-- blog -->
        <?php get_template_part('template-parts/home','blog');?>

        <!-- certificats -->
        <?php get_template_part('template-parts/home','certificates');?>
    </div>
        
<?php get_footer(); ?>