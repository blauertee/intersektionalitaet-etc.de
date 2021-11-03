<?php
function add_maintenence_mode($wp_customizer) {
    // add a setting for the site logo
    $wp_customize->add_setting('work_in_progress');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'work_in_progress',
        array(
        'label' -> 'Show Work in Progress Page',
        'section' -> 'title_tagline',
        'settings' -> 'work_in_progress',
        'type' -> 'checkbox',
        ) ) );
    }
add_action('customize_register', 'add_maintenence_mode');

?>
