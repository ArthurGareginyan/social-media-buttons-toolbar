<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

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
