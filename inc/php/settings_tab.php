<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Tab
 *
 * @since 4.1
 */
?>
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
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=Social Media Follow Buttons Bar">arthurgareginyan@gmail.com</a></p>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', SMEDIABT_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', SMEDIABT_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', SMEDIABT_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', SMEDIABT_TEXT ); ?></p>
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

                    <?php
                        // Get options from the BD
                        $options = get_option( 'smbtoolbar_settings' );
                    ?>

                    <div class="postbox" id="Buttons">
                        <h3 class="title"><?php _e( 'Buttons', SMEDIABT_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="description"><?php _e( 'Just fill in the required fields to make a buttons. The social networking buttons will lead directly to your profile pages. If you don\'t want to use any of the following buttons, you can not fill them and then they do not appear.', SMEDIABT_TEXT ); ?></p>
                            <table class="form-table">
                                <?php smbtoolbar_media( 'facebook',
                                                        'Facebook',
                                                        'https://www.facebook.com/YourUsernameHere',
                                                        __( 'Enter the link to your Facebook profile page', SMEDIABT_TEXT ),
                                                        '//www.facebook.com'
                                ); ?>
                                <?php smbtoolbar_media(  'twitter',
                                                        'Twitter',
                                                        'https://twitter.com/YourUsernameHere',
                                                        __( 'Enter the link to your Twitter profile page', SMEDIABT_TEXT ),
                                                        '//twitter.com'
                                ); ?>
                                <?php smbtoolbar_media( 'instagram',
                                                        'Instagram',
                                                        'http://instagram.com/YourUsernameHere',
                                                        __( 'Enter the link to your Instagram profile page', SMEDIABT_TEXT ),
                                                        '//instagram.com'
                                ); ?>
                                <?php smbtoolbar_media( 'google-plus',
                                                        'Google+',
                                                        'https://plus.google.com/u/0/+YourUsernameHere',
                                                        __( 'Enter the link to your Google+ profile page', SMEDIABT_TEXT ),
                                                        '//plus.google.com'
                                ); ?>
                                <?php smbtoolbar_media( 'youtube',
                                                        'YouTube',
                                                        'https://www.youtube.com/channel/YourChannelIdentifierHere',
                                                        __( 'Enter the link to your YouTube profile page', SMEDIABT_TEXT ),
                                                        '//www.youtube.com'
                                ); ?>
                                <?php smbtoolbar_media( 'vimeo',
                                                        'Vimeo',
                                                        'https://vimeo.com/YourUsernameHere',
                                                        __( 'Enter the link to your Vimeo profile page', SMEDIABT_TEXT ),
                                                        '//vimeo.com'
                                ); ?>
                                <?php smbtoolbar_media( 'blogger',
                                                        'Blogger',
                                                        'http://YourBlogNameHere.blogspot.com',
                                                        __( 'Enter the link to your Blogger profile page', SMEDIABT_TEXT ),
                                                        '//www.blogger.com'
                                ); ?>
                                <?php smbtoolbar_media( 'livejournal',
                                                        'LiveJournal',
                                                        'http://YourUsernameHere.livejournal.com',
                                                        __( 'Enter the link to your LiveJournal profile page', SMEDIABT_TEXT ),
                                                        '//www.livejournal.com'
                                ); ?>
                                <?php smbtoolbar_media( 'reddit',
                                                        'Reddit',
                                                        'https://www.reddit.com/user/YourUsernameHere',
                                                        __( 'Enter the link to your Reddit profile page', SMEDIABT_TEXT ),
                                                        '//www.reddit.com'
                                ); ?>
                                <?php smbtoolbar_media( 'linkedin',
                                                        'LinkedIn',
                                                        'https://linkedin.com/in/YourUsernameHere',
                                                        __( 'Enter the link to your LinkedIn profile page', SMEDIABT_TEXT ),
                                                        '//linkedin.com'
                                ); ?>
                                <?php smbtoolbar_media( 'pinterest',
                                                        'Pinterest',
                                                        'https://www.pinterest.com/YourUsernameHere',
                                                        __( 'Enter the link to your Pinterest profile page', SMEDIABT_TEXT ),
                                                        '//www.pinterest.com'
                                ); ?>
                                <?php smbtoolbar_media( 'tumblr',
                                                        'Tumblr',
                                                        'https://www.tumblr.com/blog/YourBlogNameHere',
                                                        __( 'Enter the link to your Tumblr profile page', SMEDIABT_TEXT ),
                                                        '//www.tumblr.com'
                                ); ?>
                                <?php smbtoolbar_media( 'snapchat',
                                                        'Snapchat',
                                                        'https://www.snapchat.com/add/YourUsernameHere',
                                                        __( 'Enter the link to your Snapchat profile page', SMEDIABT_TEXT ),
                                                        '//www.snapchat.com'
                                ); ?>
                                <?php smbtoolbar_media( 'twitch',
                                                        'Twitch',
                                                        'https://www.twitch.tv/YourUsernameHere',
                                                        __( 'Enter the link to your Twitch profile page', SMEDIABT_TEXT ),
                                                        '//www.twitch.tv'
                                ); ?>
                                <?php smbtoolbar_media( 'patreon',
                                                        'Patreon',
                                                        'https://www.patreon.com/YourUsernameHere',
                                                        __( 'Enter the link to your Patreon profile page', SMEDIABT_TEXT ),
                                                        '//www.patreon.com'
                                ); ?>
                                <?php smbtoolbar_media( 'imdb',
                                                        'IMDb',
                                                        'http://www.imdb.com/name/YourUsernameHere',
                                                        __( 'Enter the link to your IMDb profile page', SMEDIABT_TEXT ),
                                                        '//www.imdb.com'
                                ); ?>
                                <?php smbtoolbar_media( 'soundcloud',
                                                        'SoundCloud',
                                                        'https://soundcloud.com/YourUsernameHere',
                                                        __( 'Enter the link to your SoundCloud profile page', SMEDIABT_TEXT ),
                                                        '//soundcloud.com'
                                ); ?>
                                <?php smbtoolbar_media( 'spotify',
                                                        'Spotify',
                                                        'http://open.spotify.com/user/YourUsernameHere',
                                                        __( 'Enter the link to your Spotify profile page', SMEDIABT_TEXT ),
                                                        '//www.spotify.com'
                                ); ?>
                                <?php smbtoolbar_media( 'bandcamp',
                                                        'Bandcamp',
                                                        'https://bandcamp.com/YourUsernameHere',
                                                        __( 'Enter the link to your Bandcamp profile page', SMEDIABT_TEXT ),
                                                        '//bandcamp.com'
                                ); ?>
                                <?php smbtoolbar_media( 'dloky',
                                                        'Dloky',
                                                        'https://dloky.com/YourUsernameHere',
                                                        __( 'Enter the link to your Dloky profile page', SMEDIABT_TEXT ),
                                                        '//dloky.com'
                                ); ?>
                                <?php smbtoolbar_media( 'goodreads',
                                                        'Goodreads',
                                                        'https://www.goodreads.com/YourUsernameHere',
                                                        __( 'Enter the link to your Goodreads profile page', SMEDIABT_TEXT ),
                                                        '//www.goodreads.com'
                                ); ?>
                                <?php smbtoolbar_media( 'meetvibe',
                                                        'MeetVibe',
                                                        'https://meetvibe.com/YourUsernameHere',
                                                        __( 'Enter the link to your MeetVibe profile page', SMEDIABT_TEXT ),
                                                        '//meetvibe.com'
                                ); ?>
                                <?php smbtoolbar_media( 'meetup',
                                                        'Meetup',
                                                        'https://www.meetup.com/YourUsernameHere',
                                                        __( 'Enter the link to your Meetup profile page', SMEDIABT_TEXT ),
                                                        '//www.meetup.com'
                                ); ?>
                                <?php smbtoolbar_media( 'steam',
                                                        'Steam',
                                                        'http://store.steampowered.com/YourUsernameHere',
                                                        __( 'Enter the link to your Steam profile page', SMEDIABT_TEXT ),
                                                        '//store.steampowered.com'
                                ); ?>
                                <?php smbtoolbar_media( 'discord',
                                                        'Discord',
                                                        'https://discordapp.com/YourUsernameHere',
                                                        __( 'Enter the link to your Discord profile page', SMEDIABT_TEXT ),
                                                        '//discordapp.com'
                                ); ?>
                                <?php smbtoolbar_media( 'yelp',
                                                        'Yelp',
                                                        'https://www.yelp.com/YourUsernameHere',
                                                        __( 'Enter the link to your Yelp profile page', SMEDIABT_TEXT ),
                                                        '//www.yelp.com'
                                ); ?>
                                <?php smbtoolbar_media( 'vkontakte',
                                                        'VKontakte',
                                                        'https://vk.com/id_YourIdentifierHere',
                                                        __( 'Enter the link to your VKontakte profile page', SMEDIABT_TEXT ),
                                                        '//vk.com'
                                ); ?>
                                <?php smbtoolbar_media( 'odnoklassniki',
                                                        'Odnoklassniki',
                                                        'https://ok.ru/profile/YourIdentifierHere',
                                                        __( 'Enter the link to your Odnoklassniki profile page', SMEDIABT_TEXT ),
                                                        '//ok.ru'
                                ); ?>
                                <?php smbtoolbar_media( 'telegram',
                                                        'Telegram',
                                                        'https://telegram.me/YourUsernameHere',
                                                        __( 'Enter the link to your Telegram profile page', SMEDIABT_TEXT ),
                                                        '//telegram.org'
                                ); ?>
                                <?php smbtoolbar_media( 'github',
                                                        'GitHub',
                                                        'https://github.com/YourUsernameHere',
                                                        __( 'Enter the link to your GitHub profile page', SMEDIABT_TEXT ),
                                                        '//github.com'
                                ); ?>
                                <?php smbtoolbar_media( 'wordpress',
                                                        'WordPress',
                                                        'https://profiles.wordpress.org/YourUsernameHere',
                                                        __( 'Enter the link to your WordPress profile page', SMEDIABT_TEXT ),
                                                        '//wordpress.org'
                                ); ?>
                                <?php smbtoolbar_media( 'codepen',
                                                        'CodePen',
                                                        'http://codepen.io/YourUsernameHere',
                                                        __( 'Enter the link to your CodePen profile page', SMEDIABT_TEXT ),
                                                        '//codepen.io'
                                ); ?>
                                <?php smbtoolbar_media( 'skype',
                                                        'Skype',
                                                        'skype:YourUsernameHere?call',
                                                        __( 'Enter your Skype name with prefix <b>skype:</b> and suffix <b>?call</b>, or <b>?add</b>, or <b>?chat</b>, or <b>?userinfo</b> for view profile', SMEDIABT_TEXT ),
                                                        '//www.skype.com'
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
                                                          __( 'Display toolbar below content on Posts.', SMEDIABT_TEXT ),
                                                          'check'
                                ); ?>
                                <?php smbtoolbar_setting('show_pages',
                                                          __( 'Show on Pages', SMEDIABT_TEXT ),
                                                          __( 'Display toolbar below content on Pages.', SMEDIABT_TEXT ),
                                                          'check'
                                ); ?>
                                <?php smbtoolbar_setting('new_tab',
                                                          __( 'Open in new tab', SMEDIABT_TEXT ),
                                                          __( 'Open link in a new tab/window.', SMEDIABT_TEXT ),
                                                          'check'
                                ); ?>
                                <?php smbtoolbar_setting('tooltips',
                                                          __( 'Tooltips', SMEDIABT_TEXT ),
                                                          __( 'Enable/disable a tooltips with name of the social media above every button.', SMEDIABT_TEXT ),
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
                                                          __( 'Margin', SMEDIABT_TEXT ),
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

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
