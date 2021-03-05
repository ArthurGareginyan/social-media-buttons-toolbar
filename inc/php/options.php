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
    $array['hidden_scrollto'] = !empty( $options['hidden_scrollto'] ) ? $options['hidden_scrollto'] : '0';
    $array['alignment'] = !empty( $options['alignment'] ) ? $options['alignment'] : 'center';
    $array['icon-size'] = !empty( $options['icon-size'] ) ? $options['icon-size'] : '64';
    $array['margin-right'] = !empty( $options['margin-right'] ) ? $options['margin-right'] : '10';
    $array['buttons-selected'] = !empty( $options['buttons-selected'] ) ? $options['buttons-selected'] : array();
    $array['buttons-link'] = !empty( $options['buttons-link'] ) ? $options['buttons-link'] : array();
    $array['caption'] = !empty( $options['caption'] ) ? $options['caption'] : '';
    $array['show_posts'] = !empty( $options['show_posts'] ) ? $options['show_posts'] : '';
    $array['show_pages'] = !empty( $options['show_pages'] ) ? $options['show_pages'] : '';

    // Sanitize data
    $array['icon-size'] = esc_textarea( $options['icon-size'] );
    $array['margin-right'] = esc_textarea( $options['margin-right'] );
    $array['caption'] = esc_textarea( $options['caption'] );

    // Return the processed data
    return $array;
}
