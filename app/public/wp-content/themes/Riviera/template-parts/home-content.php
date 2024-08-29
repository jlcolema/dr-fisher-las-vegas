<?php 
$results = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "rg_form where is_active = 1 limit 1", OBJECT);
$formAvailable = '';
if(!empty($results)){
    $formAvailable = '1';
}
$theme_data = tirepirates_set_theme_var();
$pageId = get_the_ID();
$classNPage = 'col-lg-8 col-md-7';
$classCform ="col-lg-4 col-md-5 padding-blog-0"; 

$templateName = basename( get_page_template());

if($templateName == 'tpl-homepage.php'){
    if($theme_data['home_form_slider'] == '0' && $theme_data['home_blog_side'] == 'slider' && $theme_data['sidebar_top_desc'] == '' && $theme_data['sidebar_bottom_desc'] == '') {
        $classNPage = 'col-lg-12 col-md-12';
        $classCform = 'empty';
    }
    else{
        if((!empty($formAvailable) && $theme_data['home_form_slider'] == '') || ($theme_data['home_blog_side'] == 'right' && $theme_data['home_blog_title'] != '') || $theme_data['sidebar_top_desc'] != '' || $theme_data['sidebar_bottom_desc'] != ''){
            $classNPage = 'col-lg-8 col-md-7';
            $classCform = "col-lg-4 col-md-5 padding-blog-0"; 
        }
        else{
            $classNPage = 'col-lg-12 col-md-12';
            $classCform = 'empty';
        }
    }
}
else if($templateName == 'tpl-contactus.php'){
    if(($theme_data['home_blog_side'] == 'right' && $theme_data['home_blog_title'] != '') || $theme_data['sidebar_top_desc'] != '' || $theme_data['sidebar_bottom_desc'] != ''){
        $classNPage = 'col-lg-8 col-md-7';
        $classCform = "col-lg-4 col-md-5 padding-blog-0"; 
    }
    else{
        $classNPage = 'col-lg-12 col-md-12';
        $classCform = 'empty';
    }
}
else{
    if(!empty($formAvailable) || ($theme_data['home_blog_side'] == 'right' && $theme_data['home_blog_title'] != '') || $theme_data['sidebar_top_desc'] != '' || $theme_data['sidebar_bottom_desc'] != ''){
        $classNPage = 'col-lg-8 col-md-7';
        $classCform = "col-lg-4 col-md-5 padding-blog-0"; 
    }
    else{
        $classNPage = 'col-lg-12 col-md-12';
        $classCform = 'empty';
    }
}
?>
<div class="content-part section-main">
    <div class="container-fluid">
        <div class="row">
           <?php if ( have_posts() ) : ?>
                <div class="<?php echo $classNPage;?>">
                    <div class="content-part-left tcol">
                        <?php  
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;  

                            //contact detail
                            get_template_part('template-parts/home','contactdetail');

                            //if(basename( get_page_template()) == 'tpl-contactus.php'){
                                //echo '<div class="c-form">';
                                //get_template_part('template-parts/home','contactform');
                                //echo '</div>';
                            //}
                        ?>  
                    </div>
                </div>
            <?php endif;

            if($templateName == 'tpl-contactus.php'){
                if($classCform != 'empty'){
                    if($theme_data['sidebar_top_desc']!='' || $theme_data['sidebar_bottom_desc']!='' || $theme_data['home_blog_side'] != 'slider'){?>
                        <div class="<?php echo $classCform;?>">
                            <aside>
                                <div class="content-part-right" style="background-color: #e9e5e5">
                                    <?php
                                        get_template_part('template-parts/home','sidebar-top');
                                        if($theme_data['home_blog_side'] != 'slider'){
                                            get_template_part('template-parts/home','rightblog');
                                        }
                                        get_template_part('template-parts/home','sidebar-bottom');
                                    ?>
                                </div>
                            </aside>
                        </div>
                    <?php 
                    }
                }
            }
            else{
                if($classCform != 'empty'){
                ?>
                <div class="<?php echo $classCform;?>">
                    <div class="content-part-right" style="background-color: #e9e5e5">
                        <aside>
                            <?php
                                get_template_part('template-parts/home','sidebar-top');
                                    if($theme_data['home_form_slider'] != 1 || basename( get_page_template()) != 'tpl-homepage.php'){
                                        get_template_part('template-parts/home','contactform');
                                    }
                                    if($theme_data['home_blog_side'] != 'slider'){
                                        get_template_part('template-parts/home','rightblog');
                                    }  
                                get_template_part('template-parts/home','sidebar-bottom');
                            ?>
                        </aside>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php 
    if($templateName!='tpl-contactus.php'){ 
        $extra_content = get_post_meta( $pageId, 'extra_content', true);
    ?>
    <?php if($extra_content): ?>
            <?php echo $extra_content; ?>
    <?php endif; ?>
<?php  }?>