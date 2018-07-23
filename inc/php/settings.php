<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( SPACEXCHIMP_P005_SETTINGS . '_settings_group' ); ?>

                    <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg button-save-top">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        <span><?php _e( 'Save changes', $text ); ?></span>
                    </button>

                    <div class="postbox" id="buttons">
                        <h3 class="title"><?php _e( 'Buttons', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can select the buttons that you want to have in your social media follow buttons bar.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    $buttons_media = spacexchimp_p005_get_media_pairs_media();
                                    spacexchimp_p005_control_checkbox( 'buttons-selected',
                                                                       $buttons_media,
                                                                       __( 'Social media buttons', $text ),
                                                                       __( 'Mark the desired buttons to add it to your social media follow buttons bar.', $text )
                                                                     );

                                    $buttons_additional = spacexchimp_p005_get_media_pairs_additional();
                                    spacexchimp_p005_control_checkbox( 'buttons-selected',
                                                                       $buttons_additional,
                                                                       __( 'Additional buttons', $text ),
                                                                       __( 'Mark the desired buttons to add it to your social media follow buttons bar.', $text )
                                                                     );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="button-links">
                        <h3 class="title"><?php _e( 'Button links', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Fill in the fields below to add links that will lead directly to your profile pages in social media that you selected in section above.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    $items_all = spacexchimp_p005_get_items_all();
                                    foreach ( $items_all as $item ) {
                                        foreach ( $item as $item_key => $item_value ) {
                                            if ( $item_key == 'slug' ) $slug = $item_value;
                                            if ( $item_key == 'label' ) $label = $item_value;
                                            if ( $item_key == 'placeholder' ) $placeholder = $item_value;
                                            if ( $item_key == 'help' ) $help = $item_value;
                                            if ( $item_key == 'link' ) $link = $item_value;
                                        }
                                        spacexchimp_p005_control_link( $slug,
                                                                       $label,
                                                                       $placeholder,
                                                                       $help,
                                                                       $link
                                                                     );
                                    }
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="displayo-ptions">
                        <h3 class="title"><?php _e( 'Display options', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can configure the display options.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p005_control_switch( 'show_posts',
                                                                     __( 'Show on Posts', $text ),
                                                                     __( 'Automatically display toolbar below content on Posts.', $text )
                                                                   );
                                    spacexchimp_p005_control_switch( 'show_pages',
                                                                     __( 'Show on Pages', $text ),
                                                                     __( 'Automatically display toolbar below content on Pages.', $text )
                                                                   );
                                    spacexchimp_p005_control_switch( 'new_tab',
                                                                     __( 'Open in new tab', $text ),
                                                                     __( 'Open link in a new tab/window.', $text )
                                                                   );
                                    spacexchimp_p005_control_switch( 'tooltips',
                                                                     __( 'Tooltips', $text ),
                                                                     __( 'Enable a tooltips with name of the social media above every button.', $text )
                                                                   );
                                    spacexchimp_p005_control_number( 'icon-size',
                                                                     __( 'Icon size', $text ),
                                                                     __( 'Enter the size of icons (in pixels) in your social media follow buttons bar.', $text ),
                                                                     '64'
                                                                   );
                                    spacexchimp_p005_control_number( 'margin-right',
                                                                     __( 'Margin', $text ),
                                                                     __( 'Enter the size of space (in pixels) between icons in your social media follow buttons bar.', $text ),
                                                                     '10'
                                                                   );
                                    spacexchimp_p005_control_choice( 'alignment',
                                                                     array(
                                                                            'left'   => __( 'Left', $text ),
                                                                            'center' => __( 'Center', $text ),
                                                                            'right'  => __( 'Right', $text )
                                                                          ),
                                                                     __( 'Alignment', $text ),
                                                                     __( 'You can choose the alignment of the buttons bar.', $text ),
                                                                     'center'
                                                                   );
                                    spacexchimp_p005_control_field( 'caption',
                                                                    __( 'Caption', $text ),
                                                                    __( 'Enter the caption to your social media follow buttons bar. It will be displays before the toolbar.', $text ),
                                                                    'Follow me in social media:'
                                                                  );
                                ?>
                            </table>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-default btn-lg button-save-main" value="<?php _e( 'Save changes', $text ); ?>">

                    <div class="postbox" id="preview">
                        <h3 class="title"><?php _e( 'Live Preview', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Click the "Save changes" button to update this preview.', $text ); ?></p><br>
                            <?php echo spacexchimp_p005_shortcode(); ?>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                                        <span class="btn-label">
                                                            <img src="<?php echo SPACEXCHIMP_P005_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                                        </span>
                                                        <?php _e( 'Donate with PayPal', $text ); ?>
                                                </a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
