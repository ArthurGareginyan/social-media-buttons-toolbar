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

    // Retrieve the plugin options data from the database
    $array = get_option( $plugin['settings'] . '_settings' );

    // Fill in the "$array" variable if the plugin options data in the database is not exist
    if ( ! is_array( $array ) ) {
        $array = array();
    }

    // Retrieve a list of media buttons from callback
    $items = spacexchimp_p005_get_items_all_slug();

    // Prepare the plugin options data for use
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

        // Set default value if option is empty
        $array[$name] = ! empty( $array[$name] ) ? $array[$name] : $default;

        // Cast and validate by type of option
        if ( is_string( $default ) === true ) {
            $array[$name] = (string) $array[$name];
        } elseif ( is_int( $default ) === true ) {
            $array[$name] = (integer) $array[$name];
        } elseif ( is_bool( $default ) === true ) {
            $array[$name] = filter_var( $array[$name], FILTER_VALIDATE_BOOLEAN );
        }
    }
    $array_sub_a = $array['buttons-selected'];
    $array_sub_b = $array['buttons-link'];
    foreach ( $items as $media ) {

        // Set default value if option is empty
        $array_sub_a[$media] = ! empty( $array_sub_a[$media] ) ? $array_sub_a[$media] : '';
        $array_sub_b[$media] = ! empty( $array_sub_b[$media] ) ? $array_sub_b[$media] : '';

        // Cast and validate by type of option
        $array_sub_a[$media] = filter_var( $array_sub_a[$media], FILTER_VALIDATE_BOOLEAN );
        $array_sub_b[$media] = (string) $array_sub_b[$media];

        // Sanitize data
        if ( $media == 'telephone' OR $media == 'email' OR $media == 'skype' ) {
            $array_sub_b[$media] = esc_attr( $array_sub_b[$media] );
        } else {
            $array_sub_b[$media] = esc_url($array_sub_b[$media]  );
        }
    }
    $array['buttons-selected'] = $array_sub_a;
    $array['buttons-link'] = $array_sub_b;

    // Sanitize data
    $array['alignment'] = sanitize_text_field( $array['alignment'] );
    $array['caption'] = sanitize_text_field( $array['caption'] );

    // Modify data


    // Return the processed data
    return $array;
}

/**
 * Write the options to a text file for development/testing purposes
 */
function spacexchimp_p005_test() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p005_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p005_options();

    // Prepare a variable for storing the processed data
    $data = print_r( $options, true );

    // Name and destination of the backup files
    $date = date( 'm-d-Y_hia' );
    $file_location_date = $plugin['path'] . '/test/' . $date . '.txt';
    $file_location_last = $plugin['path'] . '/test/last.txt';

    // Make two backup files
    file_put_contents( $file_location_date, $data );
    file_put_contents( $file_location_last, $data );
}
//spacexchimp_p005_test();
