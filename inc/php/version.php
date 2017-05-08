<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Function for managing information about the version number of the plugin
 *
 * @since 4.0
 */
function smbtoolbar_plugin_version_number() {

    // Set variables:
    // - Read the plugin service information from the database and put it into an array
    // - Get the current plugin version number from the database
    // - Get the new plugin version number from the global constant
    $info = get_option( 'smbtoolbar_service_info' );
    $current_number = isset( $info['version'] ) && !empty( $info['version'] ) ? $info['version'] : '0';
    $new_number = SMEDIABT_VERSION;

    // Call the upgrade function if the version number in the database is smaller than the 1.0
    //if ( $current_number < '1.0' ) {
    //    smbtoolbar_upgrade_1_0();
    //}

    // If the version number in the database is same as the new version number:
    // - Reset the "old_version" marker in the database
    // - Exit from this function
    if ( $new_number == $current_number ) {

        if ( $info['old_version'] == '1' ) {

            $info['old_version'] = '0';
            update_option( 'smbtoolbar_service_info', $info );

        }

        return;
    }

    // If the version number in the database is smaller than the new version number:
    // - Save the new version number to the database
    // - Update the "old_version" marker in the database
    // - Exit from this function
    if ( $new_number > $current_number ) {

        $info['version'] = $new_number;
        $info['old_version'] = '0';
        update_option( 'smbtoolbar_service_info', $info );

        return;
    }

    // If the version number in the database is greater than the new version number:
    // - Save the "old_version" marker to the database
    // - Exit from this function
    if ( $new_number < $current_number ) {

        $info['old_version'] = '1';
        update_option( 'smbtoolbar_service_info', $info );

        return;
    }

}
smbtoolbar_plugin_version_number();
