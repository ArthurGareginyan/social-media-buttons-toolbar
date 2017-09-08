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
    $media = !empty( $options['media'] ) ? $options['media'] : array();

    // Open link in new tab
    $new_tab = !empty( $options['new_tab'] ) ? 'target="blank"' : '';

    // Enable Tolltips
    $tooltips = !empty( $options['tooltips'] ) ? 'data-toggle="tooltip"' : '';

    // Add a caption above of buttons
    $caption = !empty( $options['caption'] ) ? esc_textarea( $options['caption'] ) : '';

    // Generate buttons
    $toolbar_arr[] = '<ul class="smbt-social-icons">';
    if ( !empty( $media ) ) {
        foreach ( $media as $name ) {
            $slug = !empty( $name['slug'] ) ? $name['slug'] : '';
            $label = !empty( $name['label'] ) ? $name['label'] : '';
            $content = !empty( $name['content'] ) ? $name['content'] : '';
            if ( !empty( $content ) ) {
                $icon = SPACEXCHIMP_P005_URL . "inc/img/social-media-icons/$slug.png";
                $toolbar_arr[] = '<li>
                                        <a
                                            href="' . $content . '"
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
        array_unshift( $toolbar_arr, $caption );
        array_push( $toolbar_arr, $js );
    }

    // Return the content of array
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

    // Returns the content.
    return $content;
}
add_action( 'the_content', 'spacexchimp_p005_addContent' );
