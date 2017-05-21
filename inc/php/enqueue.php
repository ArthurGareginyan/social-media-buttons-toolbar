<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Base for the _load_scripts hook & Dymamic CSS for the _load_scripts hook
 *
 * @since 4.2
 */
function smbtoolbar_load_scripts_base() {

    // Load JQuery library
    wp_enqueue_script( 'jquery' );

    // Style sheet
    wp_enqueue_style( 'smbtoolbar-frontend-css', SMEDIABT_URL . 'inc/css/frontend.css' );

    // Read options from BD, sanitiz data and declare variables
    $options = get_option( 'smbtoolbar_settings' );

    // Size of icons
    $icon_size = esc_textarea( $options['icon-size'] );
    if ( empty( $icon_size ) ) {
        $icon_size = "64";
    }

    // Space between icons
    $margin_right = esc_textarea( $options['margin-right'] );
    if ( empty( $margin_right ) ) {
        $margin_right = "10";
    }

    // Alignment of toolbar
    if ( !empty( $options['alignment'] ) ) {
        $alignment = $options['alignment'];
    } else {
        $alignment = 'center';
    }

    // Dynamic CSS
    $custom_css = "
                    .smbt-social-icons {
                        text-align: " . $alignment . " !important;
                    }
                    .smbt-social-icons li img {
                        width: " . $icon_size . "px !important;
                        height: " . $icon_size . "px !important;
                        margin: " . ( $margin_right / 2 ) . "px !important;
                    }
                  ";

    // Inject dynamic CSS
    wp_add_inline_style( 'smbtoolbar-frontend-css', $custom_css );

}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.2
 */
function smbtoolbar_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    if ( 'settings_page_social-media-buttons-toolbar' != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( 'smbtoolbar-admin-css', SMEDIABT_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( 'smbtoolbar-admin-js', SMEDIABT_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( 'smbtoolbar-bootstrap-css', SMEDIABT_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( 'smbtoolbar-bootstrap-theme-css', SMEDIABT_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( 'smbtoolbar-bootstrap-js', SMEDIABT_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // Other libraries
    wp_enqueue_script( 'smbtoolbar-bootstrap-checkbox-js', SMEDIABT_URL . 'inc/lib/bootstrap-checkbox.js' );

    // Call the function with a basis of scripts
    smbtoolbar_load_scripts_base();

}
add_action( 'admin_enqueue_scripts', 'smbtoolbar_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end
 *
 * @since 4.0
 */
function smbtoolbar_load_scripts_frontend() {

    // Call the function with a basis of scripts
    smbtoolbar_load_scripts_base();

    // Other libraries
    wp_enqueue_style( 'smbtoolbar-bootstrap-tooltip-css', SMEDIABT_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css' );
    wp_enqueue_script( 'smbtoolbar-bootstrap-tooltip-js', SMEDIABT_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js' );

}
add_action( 'wp_enqueue_scripts', 'smbtoolbar_load_scripts_frontend' );
