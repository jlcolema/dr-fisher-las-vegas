<?php 
$results = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "rg_form where is_active = 1 limit 1", OBJECT);
if(!empty($results)){
$theme_data = tirepirates_set_theme_var();
?>
<div class="request-form contactform cnform" <?php if($theme_data['home_contact_bg']){?> style="background-image: url('<?php echo esc_url( $theme_data['home_contact_bg'] );?>');background-repeat: no-repeat;" <?php }?> role="form">
    <?php 
	if(is_plugin_active('salesforce-wordpress-to-lead/salesforce.php')){
		echo do_shortcode("[salesforce form=\"1\"]"); 
    }
    else{
    	echo do_shortcode("[gravityform id=\"".$results->id."\" title=\"true\" description=\"true\"]"); 
	}
    ?>
</div>
<?php } ?>