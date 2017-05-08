<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function smbtoolbar_uninstall() {
    delete_option( 'smbtoolbar_settings' );
}
register_uninstall_hook( __FILE__, 'smbtoolbar_uninstall' );
