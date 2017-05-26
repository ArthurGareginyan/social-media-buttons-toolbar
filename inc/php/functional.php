<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render fields for saving social media data to BD
 *
 * @since 4.6
 */
function smbtoolbar_media( $name, $label, $placeholder, $help=null, $link=null ) {

    // Read options from BD
    $options = get_option( SMEDIABT_SETTINGS . '_settings' );

    if ( !empty( $options["media"][$name]["content"] ) ) {
        $value = esc_textarea( $options["media"][$name]["content"] );
    } else {
        $value = "";
    }

    // Generate the table
    if ( !empty( $link ) ) {
        $link_out = "<a href='$link' target='_blank'>$label</a>";
    } else {
        $link_out = "$label";
    }

    $label = "<input type='hidden' name='" . SMEDIABT_SETTINGS . "_settings[media][$name][label]' value='$label'>";
    $slug = "<input type='hidden' name='" . SMEDIABT_SETTINGS . "_settings[media][$name][slug]' value='$name'>";
    $field_out = "<input type='text' name='" . SMEDIABT_SETTINGS . "_settings[media][$name][content]' size='50' value='$value' placeholder='$placeholder'>";

    // Put table to the variables $out and $help_out
    $out = "<tr>
                <th scope='row'>
                    $link_out
                </th>
                <td>
                    $label
                    $slug
                    $field_out
                </td>
            </tr>";
    if ( !empty( $help ) ) {
        $help_out = "<tr>
                        <td></td>
                        <td class='help-text'>
                            $help
                        </td>
                     </tr>";
    } else {
        $help_out = "";
    }

    // Print the generated table
    echo $out . $help_out;
}

/**
 * Render checkboxes and fields for saving settings data to database
 *
 * @since 4.6
 */
function smbtoolbar_setting( $name, $label, $help=null, $field=null, $placeholder=null, $size=null ) {

    // Read options from BD
    $options = get_option( SMEDIABT_SETTINGS . '_settings' );

    if ( !empty( $options[$name] ) ) {
        $value = esc_textarea( $options[$name] );
    } else {
        $value = "";
    }

    // Generate the table
    if ( !empty( $options[$name] ) ) {
        $checked = "checked='checked'";
    } else {
        $checked = "";
    }

    if ( $field == "check" ) {
        $input = "<input type='checkbox' name='" . SMEDIABT_SETTINGS . "_settings[$name]' id='" . SMEDIABT_SETTINGS . "_settings[$name]' $checked >";
    } elseif ( $field == "field" ) {
        $input = "<input type='text' name='" . SMEDIABT_SETTINGS . "_settings[$name]' id='" . SMEDIABT_SETTINGS . "_settings[$name]' size='$size' value='$value' placeholder='$placeholder' >";
    }

    // Put table to the variables $out and $help_out
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    $input
                </td>
            </tr>";
    if ( !empty( $help ) ) {
        $help_out = "<tr>
                        <td></td>
                        <td class='help-text'>
                            $help
                        </td>
                     </tr>";
    } else {
        $help_out = "";
    }

    // Print the generated table
    echo $out . $help_out;
}

/**
 * Generate the buttons and make shortcode
 *
 * @since 4.6
 */
function smbtoolbar_tollbar() {

    // Read options from BD
    $options = get_option( SMEDIABT_SETTINGS . '_settings' );
    $media = $options['media'];

    // Open link in new tab
    if ( !empty( $options['new_tab'] ) ) {
        $new_tab = 'target="blank"';
    } else {
        $new_tab = '';
    }

    // Enable Tolltips
    if ( !empty( $options['tooltips'] ) ) {
        $tooltips = 'data-toggle="tooltip"';
    } else {
        $tooltips = '';
    }

    // Add a caption above of buttons
    $caption = esc_textarea( $options['caption'] );
    if ( empty( $caption ) ) {
        $caption = "";
    }

    // Generate buttons
    $metatags_arr[] = '<ul class="smbt-social-icons">';
    if ( !empty( $media ) ) {
        foreach ( $media as $name ) {
            foreach ( $name as $key => $value ) {
                if ( $key == "slug" ) {
                    $slag = $value;
                }
                if ( $key == "label" ) {
                    $label = $value;
                }
                if ( $key == "content" ) {
                    if ( !empty( $value ) ) {
                        $icon = SMEDIABT_URL . "inc/img/social-media-icons/$slag.png";
                        $metatags_arr[] = '<li>
                                                <a
                                                    href="' . $value . '"
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
        }
    }
    $metatags_arr[] = '</ul>';

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

    if ( count( $metatags_arr ) > 0 ) {
        array_unshift( $metatags_arr, $caption );
        array_push( $metatags_arr, $js );
    }

    // Return the content of array
    return $metatags_arr;
    
}

/**
 * Create the shortcode "[smbtoolbar]"
 *
 * @since 4.6
 */
function smbtoolbar_shortcode() {
    return implode(PHP_EOL, smbtoolbar_tollbar());
}
add_shortcode( 'smbtoolbar', SMEDIABT_PREFIX . '_shortcode' );

/**
 * Allow shortcodes in the text widget
 *
 * @since 0.2
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Add buttons to the beginning of each post or/and page.
 *
 * @since 4.6
 */
function smbtoolbar_addContent( $content ) {
    $options = get_option( SMEDIABT_SETTINGS . '_settings' );

    if ( is_single() ) {
        if ( !empty( $options['show_posts'] ) && $options['show_posts'] == "on" ) {
            $content = $content . smbtoolbar_shortcode();
        }
    }

    if ( is_page() ) {
        if ( !empty( $options['show_pages'] ) && $options['show_pages'] == "on" ) {
            $content = $content . smbtoolbar_shortcode();
        }
    }

    // Returns the content.
    return $content;
}
add_action( 'the_content', SMEDIABT_PREFIX . '_addContent' );
