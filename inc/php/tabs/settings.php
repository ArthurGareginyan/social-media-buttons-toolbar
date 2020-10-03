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
                    <?php settings_fields( $plugin['settings'] . '_settings_group' ); ?>

                    <!-- SUBMIT -->
                    <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg button-save-top">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        <span><?php _e( 'Save changes', $plugin['text'] ); ?></span>
                    </button>
                    <!-- END SUBMIT -->

                    <div class="postbox" id="options-group-buttons">
                        <h3 class="title"><?php _e( 'Buttons', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can select the buttons that you want to have in your social media follow buttons bar.', $plugin['text'] ); ?></p>
                            <table class="form-table">
                                <?php
                                    $buttons_media = spacexchimp_p005_get_media_pairs_media();
                                    spacexchimp_p005_control_checkbox( 'buttons-selected',
                                                                       $buttons_media,
                                                                       __( 'Social media buttons', $plugin['text'] ),
                                                                       __( 'Mark the desired buttons to add it to your social media follow buttons bar.', $plugin['text'] )
                                                                     );
                                    spacexchimp_p005_control_separator();
                                    $buttons_additional = spacexchimp_p005_get_media_pairs_additional();
                                    spacexchimp_p005_control_checkbox( 'buttons-selected',
                                                                       $buttons_additional,
                                                                       __( 'Additional buttons', $plugin['text'] ),
                                                                       __( 'Mark the desired buttons to add it to your social media follow buttons bar.', $plugin['text'] )
                                                                     );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="options-group-button-links">
                        <h3 class="title"><?php _e( 'Buttons URL', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Fill in the fields below to add links that will lead directly to your profile pages in social media that you selected in the section above.', $plugin['text'] ); ?></p>
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

                    <div class="postbox" id="options-group-display">
                        <h3 class="title"><?php _e( 'Display options', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can customize the display of your social media follow buttons bar.', $plugin['text'] ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p005_control_number( 'icon-size',
                                                                     __( 'Button size', $plugin['text'] ),
                                                                     __( 'You can choose the size of the buttons (in pixels). Default is 64 pixels.', $plugin['text'] ),
                                                                     '64'
                                                                   );
                                    spacexchimp_p005_control_separator(
                                                                        __( 'Positioning', $plugin['text'] )
                                                                      );
                                    spacexchimp_p005_control_number( 'margin-right',
                                                                     __( 'Button margin', $plugin['text'] ),
                                                                     __( 'You can choose the size of the space (in pixels) between each button. Default is 10 pixels.', $plugin['text'] ),
                                                                     '10'
                                                                   );
                                    spacexchimp_p005_control_choice( 'alignment',
                                                                     array(
                                                                            'left'   => __( 'Left', $plugin['text'] ),
                                                                            'center' => __( 'Center', $plugin['text'] ),
                                                                            'right'  => __( 'Right', $plugin['text'] )
                                                                          ),
                                                                     __( 'Buttons bar alignment', $plugin['text'] ),
                                                                     __( 'You can choose the alignment of the entire buttons bar.', $plugin['text'] ),
                                                                     'center'
                                                                   );
                                    spacexchimp_p005_control_separator(
                                                                        __( 'Links open method', $plugin['text'] )
                                                                      );
                                    spacexchimp_p005_control_switch( 'new_tab',
                                                                     __( 'Open in new tab', $plugin['text'] ),
                                                                     __( 'Open links in a new tab/window.', $plugin['text'] )
                                                                   );
                                    spacexchimp_p005_control_separator(
                                                                        __( 'Additional', $plugin['text'] )
                                                                      );
                                    spacexchimp_p005_control_field( 'caption',
                                                                    __( 'Caption', $plugin['text'] ),
                                                                    __( 'Enter the caption to your social media follow buttons bar. It will be displayed above the buttons bar.', $plugin['text'] ),
                                                                    'Follow me in social media:'
                                                                  );
                                    spacexchimp_p005_control_switch( 'tooltips',
                                                                     __( 'Tooltips', $plugin['text'] ),
                                                                     __( 'Enable tooltips with the name of social media that will be displayed next to each button.', $plugin['text'] )
                                                                   );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="options-group-autoload">
                        <h3 class="title"><?php _e( 'Autoload', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can configure the autoload.', $plugin['text'] ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p005_control_switch( 'show_posts',
                                                                      __( 'Show on Posts', $plugin['text'] ),
                                                                      __( 'Automatically display the buttons bar below content on Posts.', $plugin['text'] )
                                                                   );
                                    spacexchimp_p005_control_switch( 'show_pages',
                                                                      __( 'Show on Pages', $plugin['text'] ),
                                                                      __( 'Automatically display the buttons bar below content on Pages.', $plugin['text'] )
                                                                   );
                                ?>
                            </table>
                        </div>
                    </div>

                    <!-- HIDDEN -->
                    <?php
                        spacexchimp_p005_control_hidden( 'hidden_scrollto',
                                                         '0'
                                                       );
                    ?>
                    <!-- END HIDDEN -->

                    <!-- SUBMIT -->
                    <input type="submit" name="submit" id="submit" class="btn btn-default btn-lg button-save-main" value="<?php _e( 'Save changes', $plugin['text'] ); ?>">
                    <!-- END SUBMIT -->

                    <!-- PREVIEW -->
                    <div class="postbox" id="preview">
                        <h3 class="title"><?php _e( 'Live preview', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Click the "Save changes" button to update this preview.', $plugin['text'] ); ?></p><br>
                            <?php echo spacexchimp_p005_shortcode(); ?>
                        </div>
                    </div>
                    <!-- END PREVIEW -->

                    <!-- SUPPORT -->
                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $plugin['text'] ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                <span class="btn-label">
                                    <img src="<?php echo $plugin['url'] . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                </span>
                                <?php _e( 'Donate with PayPal', $plugin['text'] ); ?>
                            </a>
                            <p><?php _e( 'Thanks for your support!', $plugin['text'] ); ?></p>
                        </div>
                    </div>
                    <!-- END SUPPORT -->

                </form>

            </div>
        </div>
    </div>
<?php
