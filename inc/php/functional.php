<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the buttons and make shortcode
 */
function spacexchimp_p005_tollbar() {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $selected = !empty( $options['buttons-selected'] ) ? $options['buttons-selected'] : array();
    $links = !empty( $options['buttons-link'] ) ? $options['buttons-link'] : array();

    // Get the array with all buttons
    $items = spacexchimp_p005_get_items_all();

    // Generate open window code
    $new_tab = !empty( $options['new_tab'] ) ? 'target="blank"' : '';

    // Generate Tolltips
    $tooltips = !empty( $options['tooltips'] ) ? 'data-toggle="tooltip"' : '';

    // Generate caption
    $caption = !empty( $options['caption'] ) ? esc_textarea( $options['caption'] ) : '';

    // Generate buttons
    $toolbar_arr[] = $caption;
    $toolbar_arr[] = '<ul class="sxc-follow-buttons">';
    foreach ( $items as $item ) {
        $slug = !empty( $item['slug'] ) ? $item['slug'] : '';
        $label = !empty( $item['label'] ) ? $item['label'] : '';
        $link = !empty( $links[$slug] ) ? $links[$slug] : '';
        if ( !empty( $selected[$slug] ) ) {
            $icon = SPACEXCHIMP_P005_URL . "inc/img/social-media-icons/$slug.png";
            $toolbar_arr[] = '<li>
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
    $toolbar_arr[] = '</ul>';

    // Add script for buttons
    if ( !empty( $options['tooltips'] ) ) {
        $js = "<script type='text/javascript'>
                    jQuery(document).ready(function($) {

                        // Enable Bootstrap Tooltips
                        $('[data-toggle=\"tooltip\"]').tooltip();

                    });
               </script>";
    } else {
        $js = '';
    }

    if ( count( $toolbar_arr ) > 0 ) {
        array_push( $toolbar_arr, $js );
    }

    return $toolbar_arr;
}

/**
 * Create the shortcode "[smbtoolbar]"
 */
function spacexchimp_p005_shortcode() {
    return implode(PHP_EOL, spacexchimp_p005_tollbar());
}
add_shortcode( 'smbtoolbar', 'spacexchimp_p005_shortcode' );

/**
 * Allow shortcodes in the text widget
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Add buttons to the beginning of each post or/and page.
 */
function spacexchimp_p005_addContent( $content ) {
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );

    if ( is_single() ) {
        if ( !empty( $options['show_posts'] ) && $options['show_posts'] == "on" ) {
            $content = $content . spacexchimp_p005_shortcode();
        }
    }

    if ( is_page() ) {
        if ( !empty( $options['show_pages'] ) && $options['show_pages'] == "on" ) {
            $content = $content . spacexchimp_p005_shortcode();
        }
    }

    return $content;
}
add_action( 'the_content', 'spacexchimp_p005_addContent' );

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

    return $array;
}

/**
 * Callback for getting a list of media buttons
 * @return array of pairs "nmae" => "Name"
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
    if ( !empty($array) ) ksort($array);

    return $array;
}

/**
 * Callback for getting a list of additional media buttons
 * @return array of pairs "nmae" => "Name"
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

    return $array;
}
