<?php
/* Template Name: Template: Contact US */
get_header();
$pageId = get_the_ID();
?>
<?php $theme_data = tirepirates_set_theme_var();?>
<div class="main-content" id="main-content" role="main">
    <!-- Content -->
    <?php get_template_part('template-parts/home','content');?>
        
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