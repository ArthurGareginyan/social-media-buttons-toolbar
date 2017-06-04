<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Upgrade plugin data in the database to version 4.10
 *
 * @since 4.10
 */
function smbtoolbar_upgrade_4_10_settings() {

    // Read plugin settings from the database
    $settings = get_option( SMEDIABT_SETTINGS . '_settings' );
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
    update_option( SMEDIABT_SETTINGS . '_settings', $settings );

}
smbtoolbar_upgrade_4_10_settings();
