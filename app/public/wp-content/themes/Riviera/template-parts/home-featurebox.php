<?php 
    if ( !is_active_sidebar( 'Featured Boxes' ) ) : ?>
       <section class="vfservices">
            <div class="container-fluid col-pad-none">
                <div class="row text-center">
                    <?php
                        if (! function_exists ( 'dynamic_sidebar' ) || ! dynamic_sidebar ( 'Featured Boxes' )) :

                    endif;?>
                </div>
            </div>
        </section>
    <?php  
    endif; 
?>