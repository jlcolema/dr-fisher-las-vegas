<?php 
    $style = '';
    if($theme_data['home_whychoose_bg']){
        $style = "background-image: url('".esc_url( $theme_data['home_whychoose_bg'] )."');background-repeat: no-repeat;";
    }

    $args = array(
                  'post_type'   => 'why_choose',
                  'post_status' => 'publish',
                 );

    $why_choose = new WP_Query( $args );
    if($why_choose->have_posts()) :
        while($why_choose->have_posts()) : $why_choose->the_post(); 
            $postData = get_post_meta( get_the_ID() );
            #echo "<PRE>";print_r($postData);exit;
            $why_choose_bullet_color = $postData['why_choose_bullet_color'][0];
            $why_choose_bullet_border_color = $postData['why_choose_bullet_border_color'][0];
            ?>
            <style type="text/css">
                .w-uli > li::before {
                    color: <?php echo $why_choose_bullet_color; ?>;
                }
                .w-uli > li::after {
                    border-color: <?php echo $why_choose_bullet_border_color; ?>;
                }
            </style>
            <section class="wchoose even-bg ourvalues" style="background-color: <?php echo $postData['why_choose_bkgr_color'][0];?>;<?php echo $style; ?>">
                <div class="container">
                    <div class="row">
                         <h2 class="title-ylw c-ourvalues-title" style="color: <?php echo $postData['why_choose_headline_color'][0];?>">
                                    <?php echo $postData['headline_why_choose'][0];?>
                                </h2>
                                <!-- <p  class="text-center c-ourvalues-sub-title"></P> -->
                                <ul class="w-ul">
                                    <?php 
                                        for ($i=0; $i <= $postData['why_choose_benefits'][0]-1 ; $i++) { 
                                            echo '<li style="color: '.$postData['why_choose_text_color'][0].'">'.$postData['why_choose_benefits_'.$i.'_benefit_title'][0].'</li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                </section>
            <?php
        endwhile;
    endif;
?>