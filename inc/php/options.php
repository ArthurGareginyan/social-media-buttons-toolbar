<?php

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
 */
function spacexchimp_p005_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p005_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;

    // Set default value if option is empty
    $list = array(
        'alignment' => 'center',
        'buttons-link' => array(),
        'buttons-selected' => array(),
        'caption' => '',
        'hidden_scrollto' => '0',
        'icon-size' => '64',
        'margin-right' => '10',
        'new_tab' => '',
        'show_pages' => '',
        'show_posts' => '',
        'tooltips' => '',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    $array['caption'] = esc_textarea( $options['caption'] );
    $array['icon-size'] = esc_textarea( $options['icon-size'] );
    $array['margin-right'] = esc_textarea( $options['margin-right'] );

    // Modify data
    $array['new_tab'] = ( $array['new_tab'] == 'on' || $array['new_tab'] == '1' || $array['new_tab'] == 'true' ) ? true : false;
    $array['show_pages'] = ( $array['show_pages'] == 'on' || $array['show_pages'] == '1' || $array['show_pages'] == 'true' ) ? true : false;
    $array['show_posts'] = ( $array['show_posts'] == 'on' || $array['show_posts'] == '1' || $array['show_posts'] == 'true' ) ? true : false;
    $array['tooltips'] = ( $array['tooltips'] == 'on' || $array['tooltips'] == '1' || $array['tooltips'] == 'true' ) ? true : false;

    // Return the processed data
    return $array;
}
