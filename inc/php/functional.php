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
        $slug = $item['slug'];
        $label = $item['label'];
        $link = $options['buttons-link'][$slug];
        if ( ! empty( $options['buttons-selected'][$slug] ) ) {
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
