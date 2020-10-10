<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Usage Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage Instructions', $plugin['text'] ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To display the social media follow buttons bar on the front end of your website, simply follow these steps:', $plugin['text'] ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Settings" tab on this page.', $plugin['text'] ); ?></li>
                            <li><?php _e( 'Select the desired buttons and fill in the required URL fields.', $plugin['text'] ); ?></li>
                            <li><?php _e( 'Select the desired settings.', $plugin['text'] ); ?></li>
                            <li><?php _e( 'Click the "Save changes" button.', $plugin['text'] ); ?></li>
                            <li>
                                <?php _e( 'Now you have several methods for display the social media follow buttons bar (further just "buttons").', $plugin['text'] ); ?>
                                <?php _e( 'Just choose the one that is more suitable for your case.', $plugin['text'] ); ?>
                                <br><br>
                                <p><?php _e( '<b>A)</b> To automatically display the buttons below a content on every Posts and/or Pages, simply use the appropriate option in the "Autoload" section, then click the "Save changes" button.', $plugin['text'] ); ?></p>
                                <p><?php _e( '<b>B)</b> To add the buttons inside a post from WordPress Post/Page Editor use the following shortcode:', $plugin['text'] ); ?></p>
                                <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                <p><?php _e( '<b>C)</b> To add the buttons to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', $plugin['text'] ); ?></p>
                                <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                <p><?php _e( '<b>D)</b> To add the buttons directly to the theme files, just add the following code to needed place (where you want to display the buttons) in your theme files:', $plugin['text'] ); ?></p>
                                <p><?php highlight_string('<?php echo do_shortcode("[smbtoolbar]"); ?>'); ?></p>
                            </li>
                            <li><?php _e( 'Enjoy your fancy social media follow buttons.', $plugin['text'] ); ?> <?php _e( 'It\'s that simple!', $plugin['text'] ); ?></li>
                        </ol>
                        <p class="note">
                            <?php
                                printf(
                                    __( 'If you want more options, then %s let us know %s and we will be happy to add them.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
