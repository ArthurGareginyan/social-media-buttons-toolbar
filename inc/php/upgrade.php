<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Upgrade plugin data in the database to version 4.10
 */
function spacexchimp_p005_upgrade_4_10() {

    // Read plugin settings from the database
    $settings = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $array = !empty( $settings['media'] ) ? $settings['media'] : array();
    $old_key = 'beam';
    $new_key = 'mixer';

    // Exit if the upgrade is not needed or alreade done
    if ( ! array_key_exists( $old_key, $array ) ) {
        return;
    }

    // Replace the key name from "beam" to "mixer"
    $keys = array_keys( $array );
    $keys[ array_search( $old_key, $keys ) ] = $new_key;
    $settings['media'] = array_combine( $keys, $array );

    // Replace the value of the key "label" and "slug"
    $settings['media']['mixer']['label'] = 'Mixer';
    $settings['media']['mixer']['slug'] = 'mixer';

    // Update plugin setting in the database
    update_option( SPACEXCHIMP_P005_SETTINGS . '_settings', $settings );

}
spacexchimp_p005_upgrade_4_10();

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

    // Exit if the upgrade is not needed or alreade done
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

    // Exit if the upgrade is not needed or alreade done
    if ( empty( $settings_current ) ) return;

    // Update plugin setting in the database
    delete_option( $prefix_old . '_settings' );
    update_option( $prefix_new . '_settings', $settings_new );

}
spacexchimp_p005_upgrade_4_19();
