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
 * @since 3.8.1
 */
function smbtoolbar_render_submenu_page() {

	// Declare variables
    $options = get_option( 'smbtoolbar_settings' );

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Social Media Buttons Toolbar', SMEDIABT_TEXT ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', SMEDIABT_TEXT ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', SMEDIABT_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add the social media buttons toolbar to any place of your website.', SMEDIABT_TEXT ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', SMEDIABT_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', SMEDIABT_TEXT ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=Social Media Buttons Toolbar">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', SMEDIABT_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', SMEDIABT_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', SMEDIABT_TEXT ); ?></p>
                        </div>
                    </div>

                    <a href="//www.iconfinder.com/?ref=ArthurGareginyan" target="_blank" rel="nofollow">
                        <img style="border:0px" src="<?php echo plugins_url('../img/banner.png', __FILE__); ?>" width="280" height="180" alt="">
                    </a>

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
                                <h3 class="title"><?php _e( 'Buttons', SMEDIABT_TEXT ); ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Just fill in the required fields to make a buttons. The social networking buttons will lead directly to your profile pages. If you don\'t want to use any of the following buttons, you can not fill them and then they do not appear.', SMEDIABT_TEXT ); ?></p>
                                    <table class="form-table">
                                        <?php smbtoolbar_media( 'facebook',
                                                                'Facebook',
                                                                'https://www.facebook.com/YourUsernameHere',
                                                                __( 'Enter the link to your Facebook profile page', SMEDIABT_TEXT ),
                                                                'hhttps://www.facebook.com'
                                        ); ?>
                                        <?php smbtoolbar_media(  'twitter',
                                                                'Twitter',
                                                                'https://twitter.com/YourUsernameHere',
                                                                __( 'Enter the link to your Twitter profile page', SMEDIABT_TEXT ),
                                                                'https://twitter.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'instagram',
                                                                'Instagram',
                                                                'http://instagram.com/YourUsernameHere',
                                                                __( 'Enter the link to your Instagram profile page', SMEDIABT_TEXT ),
                                                                'http://instagram.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'google-plus',
                                                                'Google+',
                                                                'https://plus.google.com/u/0/+YourUsernameHere',
                                                                __( 'Enter the link to your Google+ profile page', SMEDIABT_TEXT ),
                                                                'https://plus.google.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'youtube',
                                                                'YouTube',
                                                                'https://www.youtube.com/channel/YourChannelIdentifierHere',
                                                                __( 'Enter the link to your YouTube profile page', SMEDIABT_TEXT ),
                                                                'https://www.youtube.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'vimeo',
                                                                'Vimeo',
                                                                'https://vimeo.com/YourUsernameHere',
                                                                __( 'Enter the link to your Vimeo profile page', SMEDIABT_TEXT ),
                                                                'https://vimeo.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'blogger',
                                                                'Blogger',
                                                                'http://YourBlogNameHere.blogspot.com',
                                                                __( 'Enter the link to your Blogger profile page', SMEDIABT_TEXT ),
                                                                'https://www.blogger.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'livejournal',
                                                                'LiveJournal',
                                                                'http://YourUsernameHere.livejournal.com',
                                                                __( 'Enter the link to your LiveJournal profile page', SMEDIABT_TEXT ),
                                                                'http://www.livejournal.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'reddit',
                                                                'Reddit',
                                                                'https://www.reddit.com/user/YourUsernameHere',
                                                                __( 'Enter the link to your Reddit profile page', SMEDIABT_TEXT ),
                                                                'https://www.reddit.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'linkedin',
                                                                'LinkedIn',
                                                                'https://linkedin.com/in/YourUsernameHere',
                                                                __( 'Enter the link to your LinkedIn profile page', SMEDIABT_TEXT ),
                                                                'https://linkedin.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'pinterest',
                                                                'Pinterest',
                                                                'https://www.pinterest.com/YourUsernameHere',
                                                                __( 'Enter the link to your Pinterest profile page', SMEDIABT_TEXT ),
                                                                'https://www.pinterest.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'tumblr',
                                                                'Tumblr',
                                                                'https://www.tumblr.com/blog/YourBlogNameHere',
                                                                __( 'Enter the link to your Tumblr profile page', SMEDIABT_TEXT ),
                                                                'https://www.tumblr.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'snapchat',
                                                                'Snapchat',
                                                                'https://www.snapchat.com/add/YourUsernameHere',
                                                                __( 'Enter the link to your Snapchat profile page', SMEDIABT_TEXT ),
                                                                'https://www.snapchat.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'imdb',
                                                                'IMDb',
                                                                'http://www.imdb.com/name/YourUsernameHere',
                                                                __( 'Enter the link to your IMDb profile page', SMEDIABT_TEXT ),
                                                                'http://www.imdb.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'soundcloud',
                                                                'SoundCloud',
                                                                'https://soundcloud.com/YourUsernameHere',
                                                                __( 'Enter the link to your SoundCloud profile page', SMEDIABT_TEXT ),
                                                                'https://soundcloud.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'spotify',
                                                                'Spotify',
                                                                'http://open.spotify.com/user/YourUsernameHere',
                                                                __( 'Enter the link to your Spotify profile page', SMEDIABT_TEXT ),
                                                                'https://www.spotify.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'meetvibe',
                                                                'MeetVibe',
                                                                'https://meetvibe.com/YourUsernameHere',
                                                                __( 'Enter the link to your MeetVibe profile page', SMEDIABT_TEXT ),
                                                                'https://meetvibe.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'vkontakte',
                                                                'VKontakte',
                                                                'https://vk.com/id_YourIdentifierHere',
                                                                __( 'Enter the link to your VKontakte profile page', SMEDIABT_TEXT ),
                                                                'https://vk.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'odnoklassniki',
                                                                'Odnoklassniki',
                                                                'https://ok.ru/profile/YourIdentifierHere',
                                                                __( 'Enter the link to your Odnoklassniki profile page', SMEDIABT_TEXT ),
                                                                'https://ok.ru'
                                        ); ?>
                                        <?php smbtoolbar_media( 'telegram',
                                                                'Telegram',
                                                                'https://telegram.me/YourUsernameHere',
                                                                __( 'Enter the link to your Telegram profile page', SMEDIABT_TEXT ),
                                                                'https://telegram.org'
                                        ); ?>
                                        <?php smbtoolbar_media( 'github',
                                                                'GitHub',
                                                                'https://github.com/YourUsernameHere',
                                                                __( 'Enter the link to your GitHub profile page', SMEDIABT_TEXT ),
                                                                'https://github.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'wordpress',
                                                                'WordPress',
                                                                'https://profiles.wordpress.org/YourUsernameHere',
                                                                __( 'Enter the link to your WordPress profile page', SMEDIABT_TEXT ),
                                                                'https://wordpress.org'
                                        ); ?>
                                        <?php smbtoolbar_media( 'codepen',
                                                                'CodePen',
                                                                'http://codepen.io/YourUsernameHere',
                                                                __( 'Enter the link to your CodePen profile page', SMEDIABT_TEXT ),
                                                                'http://codepen.io'
                                        ); ?>
                                        <?php smbtoolbar_media( 'skype',
                                                                'Skype',
                                                                'skype:YourUsernameHere?call',
                                                                __( 'Enter your Skype name with prefix <b>skype:</b> and suffix <b>?call</b>, or <b>?add</b>, or <b>?chat</b>, or <b>?userinfo</b> for view profile', SMEDIABT_TEXT ),
                                                                'https://www.skype.com'
                                        ); ?>
                                        <?php smbtoolbar_media( 'website',
                                                                'Personal website',
                                                                'http://www.arthurgareginyan.com',
                                                                __( 'Enter the link to your personal website', SMEDIABT_TEXT ),
                                                                ''
                                        ); ?>
                                        <?php smbtoolbar_media( 'email',
                                                                'Email',
                                                                'mailto:YourUsernameHere@gmail.com',
                                                                __( 'Enter your email address with prefix <b>mailto:</b>', SMEDIABT_TEXT ),
                                                                ''
                                        ); ?>
                                        <?php smbtoolbar_media( 'rss-feed',
                                                                'RSS Feed',
                                                                'http://YourDomainNameHere.com/feed',
                                                                __( 'Enter the link to your RSS Feed', SMEDIABT_TEXT ),
                                                                ''
                                        ); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', SMEDIABT_TEXT ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="DisplayOptions">
                                <h3 class="title"><?php _e( 'Display options', SMEDIABT_TEXT ); ?></h3>
                                <div class="inside">
                                    <p class="description"></p>
                                    <table class="form-table">
                                        <?php smbtoolbar_setting('show_posts',
                                                                  __( 'Show on Posts', SMEDIABT_TEXT ),
                                                                  __( 'Display toolbar below content on Posts', SMEDIABT_TEXT ),
                                                                  'check'
                                        ); ?>
                                        <?php smbtoolbar_setting('show_pages',
                                                                  __( 'Show on Pages', SMEDIABT_TEXT ),
                                                                  __( 'Display toolbar below content on Pages', SMEDIABT_TEXT ),
                                                                  'check'
                                        ); ?>
                                        <?php smbtoolbar_setting('new_tab',
                                                                  __( 'Open link in new tab/window', SMEDIABT_TEXT ),
                                                                  '',
                                                                  'check'
                                        ); ?>
                                        <?php smbtoolbar_setting('icon-size',
                                                                  __( 'Icon size', SMEDIABT_TEXT ),
                                                                  __( 'Enter the size of icons (in px) in your social media buttons toolbar.', SMEDIABT_TEXT ),
                                                                  'field',
                                                                  '64',
                                                                  '2'
                                        ); ?>
                                        <?php smbtoolbar_setting('margin-right',
                                                                  __( 'Margin right', SMEDIABT_TEXT ),
                                                                  __( 'Enter the size of space (in px) between icons in your social media buttons toolbar.', SMEDIABT_TEXT ),
                                                                  'field',
                                                                  '10',
                                                                  '2'
                                        ); ?>

                                        <?php
                                            $options = get_option( 'smbtoolbar_settings' );
                                            if ( !empty( $options['alignment'] ) ) :
                                                $alignment = $options['alignment'];
                                            else :
                                                $alignment = '';
                                            endif;
                                        ?>
                                        <tr valign='top'>
                                            <th scope='row'>
                                                <?php _e( 'Alignment', SMEDIABT_TEXT ); ?>
                                            </th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="smbtoolbar_settings[alignment]" value="left" <?php checked('left', $alignment); ?> >
                                                        <?php _e( 'Left', SMEDIABT_TEXT ); ?>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="smbtoolbar_settings[alignment]" value="center" <?php checked('', $alignment); ?> <?php checked('center', $alignment); ?> >
                                                        <?php _e( 'Center', SMEDIABT_TEXT ); ?>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="smbtoolbar_settings[alignment]" value="right" <?php checked('right', $alignment); ?> >
                                                        <?php _e( 'Right', SMEDIABT_TEXT ); ?>
                                                    </li>
                                                    </ul>
                                            </td>
                                        </tr>

                                        <?php smbtoolbar_setting('caption',
                                                                  __( 'Caption', SMEDIABT_TEXT ),
                                                                  __( 'Enter the caption to your social media buttons toolbar. It will be displays before the toolbar.', SMEDIABT_TEXT ),
                                                                  'field',
                                                                  'Follow me in social media:',
                                                                  '50'
                                        ); ?>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', SMEDIABT_TEXT ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Preview">
                                <h3 class="title"><?php _e( 'Preview', SMEDIABT_TEXT ); ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Click "Save Changes" to update this preview.', SMEDIABT_TEXT ); ?></p></br>
                                    <?php echo smbtoolbar_shortcode(); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Using">
                                <h3 class="title"><?php _e( 'Using', SMEDIABT_TEXT ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You have several methods for display the social media buttons toolbar (further just "toolbar") on your website. But first, fill in the required fields, then click "Save Changes".', SMEDIABT_TEXT ); ?></p>
                                    <p><?php _e( '<b>A)</b> For display the toolbar below content on every Posts or/and Pages, just check the checkbox "Show on Posts" or/and "Show on Pages" in the section "Display options", then click "Save Changes". It\'s that simple!', SMEDIABT_TEXT ); ?></p>
                                    <p><?php _e( '<b>B)</b> For add the toolbar inside a post from WP Post/Page Editor use the following shortcode:', SMEDIABT_TEXT ); ?></p>
                                    <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                    <p><?php _e( '<b>C)</b> For add the toolbar to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', SMEDIABT_TEXT ); ?></p>
                                    <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                    <p><?php _e( '<b>D)</b> For add the toolbar directly to a theme files, just add one of the following code (both variants do the same) to needed place (where you want to display the toolbar) in your theme files:', SMEDIABT_TEXT ); ?></p>
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