<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 4.0
 */
function smbtoolbar_render_submenu_page() {

    // Layout of Settings Page
    ?>
    <div class="wrap">
        <h2>
            <?php _e( 'Social Media Follow Buttons Bar', SMEDIABT_TEXT ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', SMEDIABT_TEXT ); ?>
            <span/>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Settings', SMEDIABT_TEXT ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', SMEDIABT_TEXT ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', SMEDIABT_TEXT ); ?></a></li>
                <li><a href="#tab-author" data-toggle="tab"><?php _e( 'Author', SMEDIABT_TEXT ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', SMEDIABT_TEXT ); ?></a></li>
                <li><a href="#tab-family" data-toggle="tab"><?php _e( 'Family', SMEDIABT_TEXT ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->


            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">

                <?php require_once( SMEDIABT_PATH . 'inc/php/settings_tab.php' ); ?>

            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage', SMEDIABT_TEXT ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'You have several methods for display the social media follow buttons bar (further just "bar") on your website. But first, fill in the required fields, then click "Save Changes".', SMEDIABT_TEXT ); ?></p>
                        <p><?php _e( '<b>A)</b> For display the bar below content on every Posts or/and Pages, just check the checkbox "Show on Posts" or/and "Show on Pages" in the section "Display options", then click "Save Changes". It\'s that simple!', SMEDIABT_TEXT ); ?></p>
                        <p><?php _e( '<b>B)</b> For add the bar inside a post from WP Post/Page Editor use the following shortcode:', SMEDIABT_TEXT ); ?></p>
                        <p><?php highlight_string('[smbtoolbar]'); ?></p>
                        <p><?php _e( '<b>C)</b> For add the bar to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', SMEDIABT_TEXT ); ?></p>
                        <p><?php highlight_string('[smbtoolbar]'); ?></p>
                        <p><?php _e( '<b>D)</b> For add the bar directly to a theme files, just add one of the following code (both variants do the same) to needed place (where you want to display the bar) in your theme files:', SMEDIABT_TEXT ); ?></p>
                        <p><?php highlight_string('<?php echo do_shortcode("[smbtoolbar]"); ?>'); ?></p>
                        <p><?php highlight_string('<?php echo smbtoolbar_shortcode(); ?>'); ?></p>
                        <p><?php _e( 'It\'s that simple! If you want more options then tell me and I will be happy to add it.', SMEDIABT_TEXT ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequent Questions', SMEDIABT_TEXT ); ?></h3>
                    <div class="inside">
                        <p>
                            <b><span class="red"></span><?php _e( 'Will this plugin work on my WordPress.COM website?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.', SMEDIABT_TEXT ); ?>
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'Can I use this plugin on my language?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span><?php _e( 'Yes. But If your language is not available then you can make one. This plugin is ready for translation. The<code>.pot</code>file is included and placed in <code>languages</code> folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (<code>*.po, *.mo</code>) to me at the <a href="mailto:arthurgareginyan@gmail.com?subject=Social Media Follow Buttons Bar">arthurgareginyan@gmail.com</a> and I will include the translation within the next plugin update.', SMEDIABT_TEXT ); ?>
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'How does it work?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span><?php _e( 'First, go to page <code>Settings</code> &#8680; <code>Social Media Follow Buttons</code>.', SMEDIABT_TEXT ); ?><br>
                            <?php _e( 'On the plugins page you find the fields where you can enter your<code>User ID\'s</code>,<code>URL</code>to your social network profile.', SMEDIABT_TEXT ); ?>
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'Does this plugin require modification to the theme?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span><?php _e( 'Absolutely not. This plugin is added/configured entirely from the website\'s Admin section.', SMEDIABT_TEXT ); ?>
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'Does this require any knowledge of HTML or CSS?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span><?php _e( 'Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using a simple WordPress settings page.', SMEDIABT_TEXT ); ?>
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'It\'s not working. What could be wrong?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is that the plugin has a conflict with another plugin you\'re using. It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, I\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', SMEDIABT_TEXT ); ?>
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'Where to report bug if found?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span>Please visit the <a href="https://github.com/ArthurGareginyan/social-media-buttons-toolbar" target="_blank">Dedicated Plugin Page on GitHub</a> and report.
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span>Please send me an email to <a href="mailto:arthurgareginyan@gmail.com?subject=Social Media Follow Buttons Bar">arthurgareginyan@gmail.com</a>.
                        </p>
                        <p>
                            <b><span class="red"></span><?php _e( 'I love this plugin! Can I help somehow?', SMEDIABT_TEXT ); ?></b><br>
                            <span class="blue"></span> Yes, any financial contributions are welcome! Just visit <a href="http://www.arthurgareginyan.com/donate.html" target="_blank">my website</a> and click on the donate link, and thank you!
                        </p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-author">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Author', SMEDIABT_TEXT ); ?></h3>
                    <div class="inside include-tab-author"></div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support', SMEDIABT_TEXT ); ?></h3>
                    <div class="inside include-tab-support"></div>
                </div>
            </div>
            <!-- END-TAB 5 -->

            <!-- TAB 6 -->
            <div class="tab-page fade" id="tab-family">
                <div class="include-tab-family"></div>
            </div>
            <!-- END-TAB 6 -->

            <div class="additional-css"></div>

        </div>

    </div>
    <?php
}
