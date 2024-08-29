<?php
/**
 * Created by PhpStorm.
 * User: dan.flies
 * Date: 10/19/18
 * Time: 10:56 AM
 */
/**
 * Registers a text field setting for Wordpress 4.7 and higher.
 **/

function rl_general_section() {
    add_settings_section(
        'rl_general_settings', // Section ID
        'LOCALiQ Settings', // Section Title
        'rl_general_sections_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'rl_primary_domain', // Option ID
        'Primary Domain', // Label
        'rl_primary_domain_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'rl_general_settings', // Name of our section
        array( // The $args
            'rl_primary_domain' // Should match Option ID
        )
    );

    register_setting('general', 'rl_primary_domain', 'esc_attr');
}

function my_section_options_callback() { // Section Callback
    echo '<p>A little message on editing info</p>';
}

function rl_primary_domain_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="' . $args[0] . '" name="' . $args[0] . '" value="' . $option . '" />';
}

add_action('admin_init', 'rl_general_section');