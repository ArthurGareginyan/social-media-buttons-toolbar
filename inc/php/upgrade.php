<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Upgrade plugin data in the database to version 4.19
 */
function spacexchimp_p005_upgrade_4_19() {

    // Upgrade number
    $upgrade_number_new = '0001';
    $prefix_old = 'smbtoolbar';
    $prefix_new = 'spacexchimp_p005';

    ///////////////////////////////////////////////////////////////////
    //                          SEEVICE INFO                         //
    ///////////////////////////////////////////////////////////////////

    // Read plugin service info from the database
    $service_info_old = get_option( $prefix_old . '_service_info' );
    $service_info_current = get_option( $prefix_new . '_service_info' );
    $upgrade_number_current = !empty( $service_info_current['upgrade'] ) ? $service_info_current['upgrade'] : '0000';

    // Setting array with new data
    $service_info_new = is_array( $service_info_old ) ? $service_info_old : array();
    $service_info_new['upgrade'] = $upgrade_number_new;

    // Exit if the upgrade is not needed or already done
    if ( $upgrade_number_current >= $upgrade_number_new ) return;

    // Update service info in the database
    delete_option( $prefix_old . '_service_info' );
    update_option( $prefix_new . '_service_info', $service_info_new );

    ///////////////////////////////////////////////////////////////////
    //                            SETTINGS                           //
    ///////////////////////////////////////////////////////////////////

    // Read plugin settings from the database
    $settings_current = get_option( $prefix_old . '_settings' );

    // Setting array with new data
    $settings_new = is_array( $settings_current ) ? $settings_current : array();

    // Exit if the upgrade is not needed or already done
    if ( empty( $settings_current ) ) return;

    // Update plugin setting in the database
    delete_option( $prefix_old . '_settings' );
    update_option( $prefix_new . '_settings', $settings_new );

}
spacexchimp_p005_upgrade_4_19();

/**
 * Upgrade plugin data in the database to version 4.36
 */
function spacexchimp_p005_upgrade_4_36() {

    // Upgrade number
    $upgrade_number_new = '0002';
    $prefix = 'spacexchimp_p005';

    ///////////////////////////////////////////////////////////////////
    //                          SEEVICE INFO                         //
    ///////////////////////////////////////////////////////////////////

    // Read plugin service info from the database
    $service_info = get_option( $prefix . '_service_info' );
    $service_info = is_array( $service_info ) ? $service_info : array();
    $upgrade_number_current = !empty( $service_info['upgrade'] ) ? $service_info['upgrade'] : '0000';

    // Exit if the upgrade is not needed or already done
    if ( $upgrade_number_current >= $upgrade_number_new ) return;

    // Setting array with new data
    $service_info['upgrade'] = $upgrade_number_new;

    // Update service info in the database
    update_option( $prefix . '_service_info', $service_info );

    ///////////////////////////////////////////////////////////////////
    //                            SETTINGS                           //
    ///////////////////////////////////////////////////////////////////

    // Read plugin settings from the database
    $settings = get_option( $prefix . '_settings' );
    $settings = is_array( $settings ) ? $settings : array();

    // Exit if the upgrade is not needed or already done
    if ( empty( $settings ) ) return;
    if ( !array_key_exists( 'media', $settings ) ) return;

    // Setting array with new data
    $links = array();
    $selected = array();
    $media = $settings['media'];
    $media = is_array( $media ) ? $media : array();
    foreach ( $media as $key => $value ) {
        if ( ! empty( $value['content'] ) ) {
            $links[$key] = $value['content'];
            $selected[$key] = 'on';
        }
    }
    $settings['buttons-link'] = $links;
    $settings['buttons-selected'] = $selected;
    unset( $settings['media'] );

    // Update plugin setting in the database
    update_option( $prefix . '_settings', $settings );

}
spacexchimp_p005_upgrade_4_36();
