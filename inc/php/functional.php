<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the buttons bar
 * @return array
 */
function spacexchimp_p005_generator() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p005_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p005_options();

    // Declare variables
    $selected = $options['buttons-selected'];
    $links = $options['buttons-link'];

    // Get the array with all buttons
    $items = spacexchimp_p005_get_items_all();

    // Generate open window code
    if ( $options['new_tab'] === true ) {
        $new_tab = 'target="_blank"';
    } else {
        $new_tab = ''; // Empty value
    }

    // Generate tolltips
    if ( $options['tooltips'] === true ) {
        $tooltips = 'data-toggle="tooltip"';
    } else {
        $tooltips = ''; // Empty value
    }

    // Generate buttons
    $array[] = $options['caption'];
    $array[] = '<ul class="sxc-follow-buttons">';
    foreach ( $items as $item ) {
        $slug = !empty( $item['slug'] ) ? $item['slug'] : '';
        $label = !empty( $item['label'] ) ? $item['label'] : '';
        $link = !empty( $links[$slug] ) ? $links[$slug] : '';
        if ( ! empty( $selected[$slug] ) ) {
            $icon = $plugin['url'] . "inc/img/social-media-icons/$slug.png";
            $array[] = '<li class="sxc-follow-button">
                                    <a
                                        href="' . $link . '"
                                        ' . $tooltips . '
                                        title="' . $label . '"
                                        ' . $new_tab . '
                                    >
                                        <img
                                            src="' . $icon . '"
                                            alt="' . $label . '"
                                        />
                                    </a>
                              </li>';
        }
    }
    $array[] = '</ul>';

    // Generate script
    if ( $options['tooltips'] === true ) {
        $js = "<script type='text/javascript'>
                    jQuery(document).ready(function($) {

                        // Enable Bootstrap Tooltips
                        $('[data-toggle=\"tooltip\"]').tooltip();

                    });
               </script>";
    } else {
        $js = '';
    }

    if ( count( $array ) > 0 ) {
        array_push( $array, $js );
    }

    // Return the processed data
    return $array;
}

/**
 * Create the shortcode "[smbtoolbar]"
 * @return string
 */
function spacexchimp_p005_shortcode() {

    // Return the processed data
    return implode(
                    PHP_EOL,
                    spacexchimp_p005_generator()
                  );
}
add_shortcode( 'smbtoolbar', 'spacexchimp_p005_shortcode' );

/**
 * Allow shortcodes in the text widget
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Autoload option
 * @return string
 */
function spacexchimp_p005_autoload( $content ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p005_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p005_options();

    if ( is_single() ) {
        if ( $options['show_posts'] === true ) {
            $content = $content . spacexchimp_p005_shortcode();
        }
    }

    if ( is_page() ) {
        if ( $options['show_pages'] === true ) {
            $content = $content . spacexchimp_p005_shortcode();
        }
    }

    // Return the processed data
    return $content;
}

/**
 * Inject the buttons bar into the website's frontend (content section)
 */
add_action( 'the_content', 'spacexchimp_p005_autoload' );

/**
 * Callback for getting a list of all buttons
 * @return array with the merged data of both arrays; '_get_items_media()' and '_get_items_additional()'
 */
function spacexchimp_p005_get_items_all() {

    // Get all media options and declare variable
    $array_1 = spacexchimp_p005_get_items_media();
    $array_2 = spacexchimp_p005_get_items_additional();

    // Merge two arrays
    $array = array_merge( $array_1, $array_2 );

    // Return the processed data
    return $array;
}

/**
 * Callback for getting a list of media buttons
 * @return array of pairs "name" => "Name"
 */
function spacexchimp_p005_get_media_pairs_media() {

    // Read all media options and declare variable
    $items = spacexchimp_p005_get_items_media();

    // Create an array with buttons name pairs 'name' => 'Name'
    $array = array();
    foreach ( $items as $item ) {
        foreach ( $item as $item_key => $item_value ) {
            if ( $item_key == 'slug' ) $slug = $item_value;
            if ( $item_key == 'label' ) $label = $item_value;
        }
        $array[$slug] = $label;
    }

    // Rename some items
    $array['youtube-gaming'] = ' YouTube G';

    // Sort the media array in ascending order, according to the key name
    if ( ! empty( $array ) ) ksort( $array );

    // Return the processed data
    return $array;
}

/**
 * Callback for getting a list of additional media buttons
 * @return array of pairs "name" => "Name"
 */
function spacexchimp_p005_get_media_pairs_additional() {

    // Read all media options and declare variable
    $items = spacexchimp_p005_get_items_additional();

    // Create an array with buttons name pairs 'name' => 'Name'
    $array = array();
    foreach ( $items as $item ) {
        foreach ( $item as $item_key => $item_value ) {
            if ( $item_key == 'slug' ) $slug = $item_value;
            if ( $item_key == 'label' ) $label = $item_value;
        }
        $array[$slug] = $label;
    }

    // Rename some items
    $array['website'] = 'Website';

    // Return the processed data
    return $array;
}
