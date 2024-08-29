<?php if ( !is_active_sidebar( 'Client Logo' ) ) : ?>
    <section class="certificats odd-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cs3">
                    <div class="img-certi">
                    <?php
                    if (! function_exists ( 'dynamic_sidebar' ) || ! dynamic_sidebar ( 'Client Logo' )) :

                    endif;?>
                	</div>
                </div>    
            </div>
        </div>
    </section>
<?php endif; ?>