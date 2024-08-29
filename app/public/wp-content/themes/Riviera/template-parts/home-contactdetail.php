<?php 
    if(basename( get_page_template() ) == 'tpl-contactus.php'){
        ?>
            <div class="contactus">
                <?php 
                    $address_list_count = get_post_meta( get_the_ID(), 'address_list', true); 
                    for($i = 0; $i<= $address_list_count - 1; $i++){
                        ?>
                            <div class="container map-main">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 address-main citycount">
                                        <?php echo get_post_meta( get_the_ID(), 'address_list_'.$i.'_enter_address', true); ?>
                                    </div>
                                    <div class="col-lg-9 col-md-8 map-cnt">
                                        <?php echo do_shortcode(get_post_meta( get_the_ID(), 'address_list_'.$i.'_enter_location', true)); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        <?php
    }
?>