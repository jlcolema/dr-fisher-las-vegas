<?php get_header(); ?>
<?php $theme_data = tirepirates_set_theme_var();?>
    <div class="main-content" id="main-content" role="main">
        <?php if ( have_posts() ) : ?>
            <div class="section-main c-whoweare">
                <?php  
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;  
                ?>  
            </div>
        <?php endif; ?>

        <!-- vfservices -->
        <?php if ( !is_active_sidebar( 'Featured Boxes' ) ) : ?>
            <section class="vfservices">
                <div class="container-fluid col-pad-none">
                    <div class="row text-center">
                        <?php
                            if (! function_exists ( 'dynamic_sidebar' ) || ! dynamic_sidebar ( 'Featured Boxes' )) :

                        endif;?>
                    </div>
                </div>
            </section>
        <?php  endif; ?>

        <!-- valuable statement -->
        <?php 
            $args = array(
                          'post_type'   => 'why_choose',
                          'post_status' => 'publish',
                         );
            $why_choose = new WP_Query( $args );
            if($why_choose->have_posts()) :
                while($why_choose->have_posts()) : $why_choose->the_post(); 
                    $postData = get_post_meta( get_the_ID() );
                    //echo "<PRE>";print_r($postData);exit;
                    $why_choose_bullet_color = $postData['why_choose_bullet_color'][0];
                    ?>
                    <style type="text/css">
                        .w-uli > li::before {
                            color: <?php echo $why_choose_bullet_color; ?>;
                        }
                    </style>
                        <section class="even-bg ourvalues" style="background-color: <?php echo $postData['why_choose_bkgr_color'][0];?>">
                            <div class="container">
                                <div class="row">
                                    <h2 class="title-ylw c-ourvalues-title" style="color: <?php echo $postData['why_choose_headline_color'][0];?>">
                                        <?php echo $postData['headline_why_choose'][0];?>
                                    </h2>
                                    <!-- <p  class="text-center c-ourvalues-sub-title"></P> -->
                                    <div class="col-sm-12"> 
                                        <ul class="w-uli">
                                            <?php 
                                                for ($i=0; $i <= $postData['why_choose_benefits'][0]-1 ; $i++) { 
                                                    echo '<li style="color: '.$postData['why_choose_text_color'][0].'">'.$postData['why_choose_benefits_'.$i.'_benefit_title'][0].'</li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php
                endwhile;
            endif;
        ?>

        <?php
        $value = get_field( "contact_form" );
        if( $value ) {
        ?>
            <!-- contactform -->
            <section class="contactform">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center cnform">
                            <?php echo $value; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

    </div>        
<?php get_footer(); ?>