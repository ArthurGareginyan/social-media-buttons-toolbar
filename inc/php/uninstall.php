<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.6
 */
function smbtoolbar_uninstall() {
    delete_option( SMEDIABT_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, SMEDIABT_PREFIX . '_uninstall' );
