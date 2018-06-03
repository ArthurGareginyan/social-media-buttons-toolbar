<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generator of the help text under controls
 */
function spacexchimp_p005_control_help( $help=null ) {

    // Return if help text not defined
    if ( empty( $help ) ) {
        return;
    }

    // Generate a part of table
    $out = "<tr>
                <td></td>
                <td class='help-text'>
                    $help
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;
}

/**
 * Generator of the fields for saving settings data to database
 */
function spacexchimp_p005_control_field( $name, $label, $help=null, $placeholder=null ) {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $value = !empty( $options[$name] ) ? esc_textarea( $options[$name] ) : '';

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <input
                        type='text'
                        name='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                        id='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                        value='$value'
                        placeholder='$placeholder'
                        class='control-field $name'
                    >
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p005_control_help( $help );
}

/**
 * Generator of the switches for saving plugin settings to database
 */
function spacexchimp_p005_control_switch( $name, $label, $help=null ) {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $checked = !empty( $options[$name] ) ? "checked='checked'" : '';

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <input
                        type='checkbox'
                        name='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                        id='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                        $checked
                        class='control-switch $name'
                    >
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p005_control_help( $help );
}

/**
 * Generator of the number fields with minus and plus buttons for saving plugin settings to database
 */
function spacexchimp_p005_control_number( $name, $label, $help=null, $default=null ) {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $value = !empty( $options[$name] ) ? esc_attr( $options[$name] ) : $default;

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                        <div class='input-group control-number $name'>
                            <span class='input-group-btn'>
                                <button type='button' class='btn btn-danger' data-type='minus' data-field='example'>
                                    <i class='fa fa-minus' aria-hidden='true'></i>
                                </button>
                            </span>
                            <input
                                type='number'
                                name='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                                id='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                                value='$value'
                                maxlength='4'
                                class='form-control text-center'
                            >
                            <span class='input-group-btn'>
                                <button type='button' class='btn btn-success' data-type='plus' data-field='example'>
                                    <i class='fa fa-plus' aria-hidden='true'></i>
                                </button>
                            </span>
                        </div>
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p005_control_help( $help );
}

/**
 * Generator of the media-link options for saving plugin settings to database
 */
function spacexchimp_p005_control_link( $name, $label, $placeholder, $help, $link=null ) {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $value = !empty( $options['buttons-link'][$name] ) ? esc_textarea( $options['buttons-link'][$name] ) : '';
    $display = !empty( $options['buttons-selected'][$name] ) ? '' : 'none';

    // Generate a part of table
    $link_out = !empty( $link ) ? "<a href='$link' target='_blank'>$label</a>" : "$label";
    $out = "<tr class='media-$name-url' style='display: $display;'>
                <th scope='row'>
                    $link_out
                </th>
                <td>
                    <input
                        type='text'
                        name='" . SPACEXCHIMP_P005_SETTINGS . "_settings[buttons-link][$name]'
                        size='50'
                        value='$value'
                        placeholder='$placeholder'
                    >
                </td>
            </tr>
            <tr class='media-$name-url' style='display: $display;'>
                <td></td>
                <td class='help-text'>
                    $help
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;
}

/**
 * Generator of the switches for saving plugin settings to database
 */
function spacexchimp_p005_control_choice( $name, $items, $label, $help, $default ) {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $option = !empty( $options[$name] ) ? $options[$name] : '';
    $list_item = '';

    foreach ( $items as $item_key => $item_value ) {
        if ( empty( $option ) AND $item_key == $default ) {
            $selected = "checked='checked'";
        } elseif ( $option == $item_key ) {
            $selected = "checked='checked'";
        } else {
            $selected = "";
        }
        $list_item .= "<li>
                           <input
                                  type='radio'
                                  name='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name]'
                                  value='$item_key'
                                  $selected
                           >
                            $item_value
                       <li>";
    }

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <ul class='control-list $name'>
                        $list_item
                    </ul>
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p005_control_help( $help );
}

/**
 * Generator of the checkboxes for saving plugin settings to database
 */
function spacexchimp_p005_control_checkbox( $name, $items, $label, $help ) {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P005_SETTINGS . '_settings' );
    $list_item = '';

    // Loop of elements LI
    foreach ( $items as $item_key => $item_value ) {
        $checked = !empty( $options[$name][$item_key] ) ? 'checked' : '';
        $list_item .= "<li id='media-$item_key' class='control-checkbox'>
                           <input
                                  type='checkbox'
                                  id='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name][$item_key]'
                                  name='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name][$item_key]'
                                  $checked
                           >
                           <label for='" . SPACEXCHIMP_P005_SETTINGS . "_settings[$name][$item_key]'>
                               $item_value
                           </label>
                       </li>";
    }

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <ul class='control-list'>
                        $list_item
                    </ul>
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p005_control_help( $help );
}
