<?php
/* Template Name: Template: Staff Page */
get_header();
$pageId = get_the_ID();
$theme_data = tirepirates_set_theme_var();
$classNPage = 'col-lg-8 col-md-7';
$classCform ="col-lg-4 col-md-5 padding-blog-0"; 

$results = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "rg_form where is_active = 1 limit 1", OBJECT);
$formAvailable = '';
if(!empty($results)){
    $formAvailable = '1';
}


if($theme_data['home_blog_side'] == 'slider' && $theme_data['home_form_slider'] == 1 && $theme_data['sidebar_top_desc'] == '' && $theme_data['sidebar_bottom_desc'] == ''){
    $classNPage = 'col-lg-12 col-md-12';
    $classCform = 'empty';
}
else{
    if(basename( get_page_template()) != 'tpl-homepage.php'){
        $classCform ="col-lg-4 col-md-5 padding-blog-0"; 
    }
}

if(!empty($formAvailable) || ($theme_data['home_blog_side'] == 'right' && $theme_data['home_blog_title'] != '') || $theme_data['sidebar_top_desc'] != '' || $theme_data['sidebar_bottom_desc'] != ''){
    $classNPage = 'col-lg-8 col-md-7';
    $classCform = "col-lg-4 col-md-5 padding-blog-0"; 
}
else{
    $classNPage = 'col-lg-12 col-md-12';
    $classCform = 'empty';
}
?>
<div class="main-content" id="main-content" role="main">
    <div class="content-part bcmb">
        <div class="container-fluid">
            <div class="row">
                <div class="<?php echo $classNPage;?>">
                    <div class="content-part-left">
                        <?php  
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;  
                        ?>
                        <?php
                        //$postData = get_post_meta( get_the_ID(), 'staff_about', true);
                        $args = array(
                                      //'post__in'   => $postData,
                                      'post_type'   => 'staff_members',
                                      'post_status' => 'publish',
                                      'posts_per_page'=> 30
                                     );
                        $staff_members = new WP_Query( $args );
                        $number = 0;
                        if($staff_members->have_posts()) :
                            while($staff_members->have_posts()) : $staff_members->the_post(); 
                                $staff_designation = get_post_meta( get_the_ID() , 'staff_designation');
                                $thumbId = get_post_meta( get_the_ID() , '_thumbnail_id');

                                $attachment_element = wp_get_attachment_image_url( $thumbId[0], 'medium' );
                                $class_number = 'grey-bg';
                                if ($number % 2 == 0) {
                                  $class_number = 'white-bg';
                                }
                                $number++;
                                ?>
                                <div class="content-part-left-1 tcol-abutus">
                                    <div class="img-cont">
                                        <?php if(!empty($attachment_element)){?>
                                            <img src="<?php echo $attachment_element; ?>" alt="<?php the_title(); ?>">
                                        <?php }?>
                                    </div>
                                    <div class="tcontaint">
                                        <h2><?php the_title(); ?></h2>
                                        <span><?php echo $staff_designation[0]; ?></span>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if($classCform != 'empty'){ ?>
                    <div class="<?php echo $classCform;?>">
                        <div class="content-part-right" style="background-color: #e9e5e5">
                            <?php 
                                //Sidebar top contet
                                get_template_part('template-parts/home','sidebar-top');

                                //contact form
                                get_template_part('template-parts/home','contactform');
                            
                                //right side blog
                                get_template_part('template-parts/home','rightblog');

                                //Sidebar bottom contet
                                get_template_part('template-parts/home','sidebar-bottom');
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>

	<?php    
        $extra_content = get_post_meta( $pageId, 'extra_content', true);
        if($extra_content):
           echo $extra_content;
    	endif;
    ?>

    <!-- Feature Box -->
    <?php get_template_part('template-parts/home','featurebox');?>

    <!-- valuable statement -->
    <?php get_template_part('template-parts/home','blog');?>

    <!-- valuable statement -->
    <?php get_template_part('template-parts/home','whychoose');?>

    <!-- contactform -->
    <?php get_template_part('template-parts/home','certificates');?>
</div>
<?php get_footer(); ?>