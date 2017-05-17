<?php
/**
 * Plugin Name: Social Media Follow Buttons Bar
 * Plugin URI: https://github.com/ArthurGareginyan/social-media-buttons-toolbar
 * Description: Easily add the smart bar with social media follow buttons (not share, only link to your profiles) to any place of your WordPress website.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.4
 * License: GPL3
 * Text Domain: social-media-buttons-toolbar
 * Domain Path: /languages/
 *
 * Copyright 2015-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "Social Media Follow Buttons Bar".
 *
 * "Social Media Follow Buttons Bar" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "Social Media Follow Buttons Bar" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "Social Media Follow Buttons Bar".  If not, see <http://www.gnu.org/licenses/>.
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
defined('ABSPATH') or die("Restricted access!");

/**
 * Define global constants
 *
 * @since 4.1
 */
defined('SMEDIABT_DIR') or define('SMEDIABT_DIR', dirname(plugin_basename(__FILE__)));
defined('SMEDIABT_BASE') or define('SMEDIABT_BASE', plugin_basename(__FILE__));
defined('SMEDIABT_URL') or define('SMEDIABT_URL', plugin_dir_url(__FILE__));
defined('SMEDIABT_PATH') or define('SMEDIABT_PATH', plugin_dir_path(__FILE__));
defined('SMEDIABT_TEXT') or define('SMEDIABT_TEXT', 'social-media-buttons-toolbar');
defined('SMEDIABT_VERSION') or define('SMEDIABT_VERSION', '4.4');

/**
 * Load the plugin modules
 *
 * @since 4.2
 */
require_once( SMEDIABT_PATH . 'inc/php/core.php' );
require_once( SMEDIABT_PATH . 'inc/php/enqueue.php' );
require_once( SMEDIABT_PATH . 'inc/php/version.php' );
require_once( SMEDIABT_PATH . 'inc/php/functional.php' );
require_once( SMEDIABT_PATH . 'inc/php/page.php' );
require_once( SMEDIABT_PATH . 'inc/php/messages.php' );
require_once( SMEDIABT_PATH . 'inc/php/uninstall.php' );
