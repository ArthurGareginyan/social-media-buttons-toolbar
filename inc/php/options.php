<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

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
        'alignment' => (string) 'center', // _control_choice
        'buttons-link' => array(), // _control_link
        'buttons-selected' => array(), // _control_checkbox
        'caption' => (string) '', // _control_field
        'hidden_scrollto' => (integer) '0', // _control_hidden
        'icon-size' => (integer) '64', // _control_number
        'margin-right' => (integer) '10', // _control_number
        'new_tab' => (boolean) '', // _control_switch
        'show_pages' => (boolean) '', // _control_switch
        'show_posts' => (boolean) '', // _control_switch
        'tooltips' => (boolean) '', // _control_switch
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    //$array['alignment'] = esc_textarea( $array['alignment'] );
    //$array['buttons-link'] = esc_textarea( $array['buttons-link'] );
    //$array['buttons-selected'] = esc_textarea( $array['buttons-selected'] );
    $array['caption'] = esc_textarea( $array['caption'] );
    //$array['hidden_scrollto'] = esc_textarea( $array['hidden_scrollto'] );
    $array['icon-size'] = esc_textarea( $array['icon-size'] );
    $array['margin-right'] = esc_textarea( $array['margin-right'] );
    //$array['new_tab'] = esc_textarea( $array['new_tab'] );
    //$array['show_pages'] = esc_textarea( $array['show_pages'] );
    //$array['show_posts'] = esc_textarea( $array['show_posts'] );
    //$array['tooltips'] = esc_textarea( $array['tooltips'] );

    // Modify data
    $array['new_tab'] = ( $array['new_tab'] == 'on' || $array['new_tab'] == '1' || $array['new_tab'] == 'true' ) ? true : false;
    $array['show_pages'] = ( $array['show_pages'] == 'on' || $array['show_pages'] == '1' || $array['show_pages'] == 'true' ) ? true : false;
    $array['show_posts'] = ( $array['show_posts'] == 'on' || $array['show_posts'] == '1' || $array['show_posts'] == 'true' ) ? true : false;
    $array['tooltips'] = ( $array['tooltips'] == 'on' || $array['tooltips'] == '1' || $array['tooltips'] == 'true' ) ? true : false;

    // Return the processed data
    return $array;
}
