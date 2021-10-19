<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the buttons bar
 * @return string
 */
function spacexchimp_p005_generator() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p005_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p005_options();

    // Get the array with all buttons
    $items = spacexchimp_p005_get_items_all();

    // Declare variables
    $selected_all = $options['buttons-selected'];
    $links_all = $options['buttons-link'];
    $caption = $options['caption'];
    $target = ( $options['new_tab'] === true ) ? '_blank' : '_self';
    $tooltips = $options['tooltips'];
    $tooltips_html = ( $tooltips === true ) ? 'data-toggle="tooltip"' : '';

    // Return if data is empty
    if ( empty( $selected_all ) ) {
        return;
    }

    // Prepare a variable for storing the processed data
    $output = "";

    foreach ( $items as $item ) {

        // Prepare a variables for storing parts of the data
        $slug = $item['slug'];
        $label = $item['label'];
        $link = $links_all[$slug];
        $selected = $selected_all[$slug];
        $icon = $plugin['url'] . "inc/img/social-media-icons/$slug.png";

        // Skip if the snippet is disabled
        if ( empty( $selected ) ) {
            continue;
        }

        // Prepare a variable for storing the processing data
        $data_tmp = '<li class="sxc-follow-button">
                        <a
                            href="' . $link . '"
                            ' . $tooltips_html . '
                            title="' . $label . '"
                            target="' . $target . '"
                        >
                            <img
                                src="' . $icon . '"
                                alt="' . $label . '"
                            />
                        </a>
                    </li>';

        // Add the processed data to the output
        $output .= $data_tmp;
    }

    // Wrap the processed data
    $output = '<ul class="sxc-follow-buttons">' . $output . '</ul>';

    // Add caption to the processed data
    $output = $caption . $output;

    // Add script to the processed data
    if ( $tooltips === true ) {
        $js = "<script type='text/javascript'>
                    jQuery(document).ready(function($) {

                        // Enable Bootstrap Tooltips
                        $('[data-toggle=\"tooltip\"]').tooltip();

                    });
               </script>";
        $output = $output . $js;
    }

    // Return the processed data
    return $output;
}

/**
 * Create the shortcode "[smbtoolbar]"
 * @return string
 */
function spacexchimp_p005_shortcode() {

    // Prepare a variable for storing the processing data
    $array = spacexchimp_p005_generator();

    // Join array elements with a PHP_EOL (end of line) string
    $output = implode( PHP_EOL, $array );

    // Return the processed data
    return $output;
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

    // Declare variables
    $show_posts = $options['show_posts'];
    $show_pages = $options['show_pages'];

    if ( is_single() ) {
        if ( $show_posts === true ) {
            $content = $content . spacexchimp_p005_shortcode();
        }
    }

    if ( is_page() ) {
        if ( $show_pages === true ) {
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
