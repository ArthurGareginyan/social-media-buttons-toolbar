<?php
/**
 * Plugin Name: Social Media Follow Buttons Bar
 * Plugin URI: https://github.com/ArthurGareginyan/social-media-buttons-toolbar
 * Description: Easily add the smart bar with social media follow buttons (not share, only link to your profiles) to any place of your WordPress website.
 * Author: Arthur Gareginyan
 * Author URI: https://www.arthurgareginyan.com
 * Version: 4.13
 * License: GPL3
 * Text Domain: social-media-buttons-toolbar
 * Domain Path: /languages/
 *
 * Copyright 2015-2017 Arthur Gareginyan ( website : https://www.arthurgareginyan.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 *
 * @since 4.7
 */
$plugin_data = get_file_data( __FILE__, array( 'name'=>'Plugin Name', 'version'=>'Version', 'text'=>'Text Domain' ) );
function smbtoolbar_define_constants( $constant_name, $value ) {
    $constant_name = 'SMEDIABT_' . $constant_name;
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
smbtoolbar_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
smbtoolbar_define_constants( 'BASE', plugin_basename( __FILE__ ) );
smbtoolbar_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
smbtoolbar_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
smbtoolbar_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
smbtoolbar_define_constants( 'NAME', $plugin_data['name'] );
smbtoolbar_define_constants( 'VERSION', $plugin_data['version'] );
smbtoolbar_define_constants( 'TEXT', $plugin_data['text'] );
smbtoolbar_define_constants( 'PREFIX', 'smbtoolbar' );
smbtoolbar_define_constants( 'SETTINGS', 'smbtoolbar' );

/**
 * Load the plugin modules
 *
 * @since 4.7
 */
require_once( SMEDIABT_PATH . 'inc/php/core.php' );
require_once( SMEDIABT_PATH . 'inc/php/upgrade.php' );
require_once( SMEDIABT_PATH . 'inc/php/versioning.php' );
require_once( SMEDIABT_PATH . 'inc/php/enqueue.php' );
require_once( SMEDIABT_PATH . 'inc/php/functional.php' );
require_once( SMEDIABT_PATH . 'inc/php/page.php' );
require_once( SMEDIABT_PATH . 'inc/php/messages.php' );
require_once( SMEDIABT_PATH . 'inc/php/uninstall.php' );
