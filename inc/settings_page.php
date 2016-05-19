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
 * @since 2.2
 */
function smbtoolbar_render_submenu_page() {

	// Declare variables
    $options = get_option( 'smbtoolbar_settings' );

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Social Media Buttons Toolbar', 'social-media-buttons-toolbar' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'social-media-buttons-toolbar' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'social-media-buttons-toolbar' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add the social media buttons toolbar to any place of your website.', 'social-media-buttons-toolbar' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'social-media-buttons-toolbar' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'social-media-buttons-toolbar' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'social-media-buttons-toolbar' ); ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/thanks.png', __FILE__); ?>">
                            <p><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'social-media-buttons-toolbar' ) ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('images/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'social-media-buttons-toolbar' ) ?></p>
                        </div>
                    </div>

                    <div id="freelance" class="postbox">
                        <h3 class="title"><?php _e( 'Freelance', 'social-media-buttons-toolbar' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/author.png', __FILE__); ?>">
                            <p><?php _e( 'Hello, my name is Arthur and I\'m a freelance web designer and developer.', 'social-media-buttons-toolbar' ) ?></p>
                            <p><?php _e( 'Share your thoughts with me. You may have a brilliant idea in your mind and I can make it happen, so let’s get started!', 'social-media-buttons-toolbar' ) ?></p>
                            <p><a href="http://www.arthurgareginyan.com/" target="_blank">www.arthurgareginyan.com</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="smbtoolbar-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'smbtoolbar_settings_group' ); ?>

                            <div class="postbox" id="Buttons">
                                <h3 class="title"><?php _e( 'Buttons', 'social-media-buttons-toolbar' ); ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Enter your User ID for each service you choose below to make the button link directly to your profile. If you don\'t want to use any of the following options, you can just forget about these.', 'social-media-buttons-toolbar' ); ?></p>
                                    <table class="form-table">
                                        <?php smbtoolbar_media( 'facebook',
                                                                'Facebook',
                                                                'https://www.facebook.com/arthur.gareginyan',
                                                                'Enter the link to your Facebook profile page',
                                                                'hhttps://www.facebook.com'
                                        );?>
                                        <?php smbtoolbar_media(  'twitter',
                                                                'Twitter',
                                                                'https://twitter.com/AGareginyan',
                                                                'Enter the link to your Twitter profile page',
                                                                'https://twitter.com'
                                        );?>
                                        <?php smbtoolbar_media( 'instagram',
                                                                'Instagram',
                                                                'http://instagram.com/arthur_gareginyan/',
                                                                'Enter the link to your Instagram profile page',
                                                                'http://instagram.com'
                                        );?>
                                        <?php smbtoolbar_media( 'google-plus',
                                                                'Google+',
                                                                'https://plus.google.com/u/0/+ArthurGareginyan/',
                                                                'Enter the link to your Google+ profile page',
                                                                'https://plus.google.com'
                                        );?>
                                        <?php smbtoolbar_media( 'youtube',
                                                                'YouTube',
                                                                'https://www.youtube.com/channel/UCvQenE1DumnZy1k5sTvgmSA',
                                                                'Enter the link to your YouTube profile page',
                                                                'https://www.youtube.com'
                                        );?>
                                        <?php smbtoolbar_media( 'blogger',
                                                                'Blogger',
                                                                'http://oneberserk.blogspot.com',
                                                                'Enter the link to your Blogger profile page',
                                                                'https://www.blogger.com'
                                        );?>
                                        <?php smbtoolbar_media( 'livejournal',
                                                                'LiveJournal',
                                                                'http://www.livejournal.com/',
                                                                'Enter the link to your LiveJournal profile page',
                                                                'http://www.livejournal.com'
                                        );?>
                                        <?php smbtoolbar_media( 'reddit',
                                                                'Reddit',
                                                                'https://www.reddit.com/',
                                                                'Enter the link to your Reddit profile page',
                                                                'https://www.reddit.com'
                                        );?>
                                        <?php smbtoolbar_media( 'linkedin',
                                                                'LinkedIn',
                                                                'https://linkedin.com/in/arthurgareginyan',
                                                                'Enter the link to your LinkedIn profile page',
                                                                'https://linkedin.com'
                                        );?>
                                        <?php smbtoolbar_media( 'pinterest',
                                                                'Pinterest',
                                                                'https://www.pinterest.com/',
                                                                'Enter the link to your Pinterest profile page',
                                                                'https://www.pinterest.com'
                                        );?>
                                        <?php smbtoolbar_media( 'tumblr',
                                                                'Tumblr',
                                                                'https://www.tumblr.com/',
                                                                'Enter the link to your Tumblr profile page',
                                                                'https://www.tumblr.com'
                                        );?>
                                        <?php smbtoolbar_media( 'meetvibe',
                                                                'MeetVibe',
                                                                'https://meetvibe.com/',
                                                                'Enter the link to your MeetVibe profile page',
                                                                'https://meetvibe.com'
                                        );?>
                                        <?php smbtoolbar_media( 'vkontakte',
                                                                'VKontakte',
                                                                'https://vk.com/',
                                                                'Enter the link to your VKontakte profile page',
                                                                'https://vk.com'
                                        );?>
                                        <?php smbtoolbar_media( 'odnoklassniki',
                                                                'Odnoklassniki',
                                                                'https://ok.ru/',
                                                                'Enter the link to your Odnoklassniki profile page',
                                                                'https://ok.ru'
                                        );?>
                                        <?php smbtoolbar_media( 'github',
                                                                'Github',
                                                                'https://github.com/ArthurGareginyan',
                                                                'Enter the link to your Github profile page',
                                                                'https://github.com'
                                        );?>
                                        <?php smbtoolbar_media( 'wordpress',
                                                                'WordPress',
                                                                'https://profiles.wordpress.org/arthur-gareginyan/',
                                                                'Enter the link to your WordPress profile page',
                                                                'https://wordpress.org'
                                        );?>
                                        <?php smbtoolbar_media( 'codepen',
                                                                'Codepen',
                                                                'http://codepen.io/berserkr/',
                                                                'Enter the link to your Codepen profile page',
                                                                'http://codepen.io'
                                        );?>
                                        <?php smbtoolbar_media( 'website',
                                                                'Personal website',
                                                                'http://www.arthurgareginyan.com',
                                                                'Enter the link to your personal website',
                                                                ''
                                        );?>
                                        <?php smbtoolbar_media( 'email',
                                                                'Email',
                                                                'mailto:arthurgareginyan@gmail.com',
                                                                'Enter your email address with prefix <b>mailto:</b>',
                                                                ''
                                        );?>
                                        <?php smbtoolbar_media( 'rss-feed',
                                                                'RSS Feed',
                                                                'http://arthurgareginyan.com/feed',
                                                                'Enter the link to your RSS Fedd',
                                                                ''
                                        );?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'social-media-buttons-toolbar' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="DisplayOptions">
                                <h3 class="title"><?php _e( 'Display options', 'social-media-buttons-toolbar' ) ?></h3>
                                <div class="inside">
                                    <p class="description"></p>
                                    <table class="form-table">
                                        <?php smbtoolbar_setting('show_posts',
                                                                  'Show on Posts',
                                                                  'Display toolbar below content on Posts',
                                                                  'check'
                                        );?>
                                        <?php smbtoolbar_setting('show_pages',
                                                                  'Show on Pages',
                                                                  'Display toolbar below content on Pages',
                                                                  'check'
                                        );?>
                                        <?php smbtoolbar_setting('new_tab',
                                                                  'Open link in new tab/window',
                                                                  '',
                                                                  'check'
                                        );?>
                                        <?php smbtoolbar_setting('icon-size',
                                                                  'Icon size',
                                                                  'Enter the size of icons (in px) in your social media buttons toolbar.',
                                                                  'field',
                                                                  '64',
                                                                  '2'
                                        );?>
                                        <?php smbtoolbar_setting('margin-right',
                                                                  'Margin right',
                                                                  'Enter the size of space (in px) between icons in your social media buttons toolbar.',
                                                                  'field',
                                                                  '10',
                                                                  '2'
                                        );?>
                                        <?php smbtoolbar_setting('caption',
                                                                  'Caption',
                                                                  'Enter the caption to your social media buttons toolbar. It will be displays before the toolbar.',
                                                                  'field',
                                                                  'Follow me on social media:',
                                                                  '50'
                                        );?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'social-media-buttons-toolbar' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Preview">
                                <h3 class="title"><?php _e( 'Preview', 'social-media-buttons-toolbar' ) ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Enter your User ID\'s, then click  "Save Changes" to update this preview.', 'social-media-buttons-toolbar' ) ?></p></br>
                                    <?php echo smbtoolbar_shortcode(); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Using">
                                <h3 class="title"><?php _e( 'Using', 'social-media-buttons-toolbar' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You have several methods for display the social media buttons toolbar (further just "toolbar") on your website. But first, enter a links for each buttons, then click "Save Changes".', 'social-media-buttons-toolbar' ) ?></p>
                                    <p><?php _e( '<b>A)</b> For display the toolbar below content on every Posts or/and Pages, just check the checkbox "Show on Posts" or/and "Show on Pages" in the section "Display options", then click "Save Changes". It\'s that simple!', 'social-media-buttons-toolbar' ) ?></p>
                                    <p><?php _e( '<b>B)</b> For add the toolbar inside a post from WP Post/Page Editor use the following shortcode:', 'social-media-buttons-toolbar' ) ?></p>
                                    <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                    <p><?php _e( '<b>C)</b> For add the toolbar to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', 'social-media-buttons-toolbar' ) ?></p>
                                    <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                    <p><?php _e( '<b>D)</b> For add the toolbar directly to a theme files, just add one of the following code (both variants do the same) to needed place (where you want to display the toolbar) in your theme files:', 'social-media-buttons-toolbar' ) ?></p>
                                    <p><?php highlight_string('<?php echo do_shortcode("[smbtoolbar]"); ?>'); ?></p>
                                    <p><?php highlight_string('<?php echo smbtoolbar_shortcode(); ?>'); ?></p>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}