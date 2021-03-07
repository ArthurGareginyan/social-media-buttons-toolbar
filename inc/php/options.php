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
        'hidden_scrollto' => '0',
        'alignment' => 'center',
        'icon-size' => '64',
        'margin-right' => '10',
        'buttons-selected' => array(),
        'buttons-link' => array(),
        'tooltips' => '',
        'caption' => '',
        'new_tab' => '',
        'show_posts' => '',
        'show_pages' => '',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    $array['icon-size'] = esc_textarea( $options['icon-size'] );
    $array['margin-right'] = esc_textarea( $options['margin-right'] );
    $array['caption'] = esc_textarea( $options['caption'] );

    // Modify data
    $array['show_posts'] = ( $array['show_posts'] == 'on' ) ? true : false ;
    $array['show_pages'] = ( $array['show_pages'] == 'on' ) ? true : false ;
    $array['new_tab'] = ( $array['new_tab'] == 'on' ) ? true : false ;
    $array['tooltips'] = ( $array['tooltips'] == 'on' ) ? true : false ;

    // Return the processed data
    return $array;
}
