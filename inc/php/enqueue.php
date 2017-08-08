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
 * @since 4.15
 */
function smbtoolbar_load_scripts_base( $options ) {

    // Put value of constants to variables for easier access
    $slug = SMEDIABT_SLUG;
    $prefix = SMEDIABT_PREFIX;
    $url = SMEDIABT_URL;

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Style sheet
    wp_enqueue_style( $prefix . '-frontend-css', $url . 'inc/css/frontend.css' );

    // Dynamic CSS. Create CSS and injected it into the stylesheet
    $icon_size = !empty( $options['icon-size'] ) ? esc_textarea( $options['icon-size'] ) : '64';
    $margin = !empty( $options['margin-right'] ) ? esc_textarea( $options['margin-right'] ) : '10';
    $alignment = !empty( $options['alignment'] ) ? $options['alignment'] : 'center';
    $custom_css = "
                    .smbt-social-icons {
                        text-align: " . $alignment . " !important;
                    }
                    .smbt-social-icons li img {
                        width: " . $icon_size . "px !important;
                        height: " . $icon_size . "px !important;
                        margin: " . ( $margin / 2 ) . "px !important;
                    }
                  ";
    wp_add_inline_style( $prefix . '-frontend-css', $custom_css );

}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.15
 */
function smbtoolbar_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = SMEDIABT_SLUG;
    $prefix = SMEDIABT_PREFIX;
    $url = SMEDIABT_URL;
    $settings = SMEDIABT_SETTINGS;

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page != $hook ) {
        return;
    }

    // Read options from database
    $options = get_option( $settings . '_settings' );

    // Bootstrap library
    wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js' );

    // Other libraries
    wp_enqueue_script( $prefix . '-bootstrap-checkbox-js', $url . 'inc/lib/bootstrap-checkbox.js' );

    // Style sheet
    wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), false, true );

    // Call the function that contain a basis of scripts
    smbtoolbar_load_scripts_base( $options );

}
add_action( 'admin_enqueue_scripts', SMEDIABT_PREFIX . '_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end of website
 *
 * @since 4.11
 */
function smbtoolbar_load_scripts_frontend() {

    // Put value of constants to variables for easier access
    $slug = SMEDIABT_SLUG;
    $prefix = SMEDIABT_PREFIX;
    $url = SMEDIABT_URL;
    $settings = SMEDIABT_SETTINGS;

    // Read options from database
    $options = get_option( $settings . '_settings' );

    // Call the function that contain a basis of scripts
    smbtoolbar_load_scripts_base( $options );

    // Other libraries
    wp_enqueue_style( $prefix . '-bootstrap-tooltip-css', $url . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css' );
    wp_enqueue_script( $prefix . '-bootstrap-tooltip-js', $url . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js' );

}
add_action( 'wp_enqueue_scripts', SMEDIABT_PREFIX . '_load_scripts_frontend' );
