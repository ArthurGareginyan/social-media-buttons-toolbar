<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Base for the _load_scripts hook
 *
 * @since 4.6
 */
function smbtoolbar_load_scripts_base( $options ) {

    // Load JQuery library
    wp_enqueue_script( 'jquery' );

    // Style sheet
    wp_enqueue_style( SMEDIABT_PREFIX . '-frontend-css', SMEDIABT_URL . 'inc/css/frontend.css' );

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

    // Dynamic CSS. Create CSS and injected it into the stylesheet
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
    wp_add_inline_style( SMEDIABT_PREFIX . '-frontend-css', $custom_css );

}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.6
 */
function smbtoolbar_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . SMEDIABT_SLUG;
    if ( $settings_page != $hook ) {
        return;
    }

    // Read options from BD
    $options = get_option( SMEDIABT_SETTINGS . '_settings' );

    // Style sheet
    wp_enqueue_style( SMEDIABT_PREFIX . '-admin-css', SMEDIABT_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( SMEDIABT_PREFIX . '-admin-js', SMEDIABT_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( SMEDIABT_PREFIX . '-bootstrap-css', SMEDIABT_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( SMEDIABT_PREFIX . '-bootstrap-theme-css', SMEDIABT_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( SMEDIABT_PREFIX . '-bootstrap-js', SMEDIABT_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // Other libraries
    wp_enqueue_script( SMEDIABT_PREFIX . '-bootstrap-checkbox-js', SMEDIABT_URL . 'inc/lib/bootstrap-checkbox.js' );

    // Call the function that contain a basis of scripts
    smbtoolbar_load_scripts_base( $options );

}
add_action( 'admin_enqueue_scripts', SMEDIABT_PREFIX . '_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end of website
 *
 * @since 4.6
 */
function smbtoolbar_load_scripts_frontend() {

    // Read options from BD
    $options = get_option( SMEDIABT_SETTINGS . '_settings' );

    // Call the function that contain a basis of scripts
    smbtoolbar_load_scripts_base( $options );

    // Other libraries
    wp_enqueue_style( SMEDIABT_PREFIX . '-bootstrap-tooltip-css', SMEDIABT_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css' );
    wp_enqueue_script( SMEDIABT_PREFIX . '-bootstrap-tooltip-js', SMEDIABT_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js' );

}
add_action( 'wp_enqueue_scripts', SMEDIABT_PREFIX . '_load_scripts_frontend' );
