<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab
 *
 * @since 4.13
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily add the social media follow buttons bar to any place of your website.', $text ); ?></p>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', $text ); ?></a>
                    <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'If you have a question, please read the information in the FAQ section.', $text ); ?></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( SMEDIABT_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( SMEDIABT_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $alignment = !empty( $options['alignment'] ) ? $options['alignment'] : '';
                    ?>

                    <div class="postbox" id="Buttons">
                        <h3 class="title"><?php _e( 'Buttons', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Just fill in the required fields to make a buttons. The social networking buttons will lead directly to your profile pages. If you don\'t want to use any of the following buttons, you can not fill them and then they do not appear.', $text ); ?></p>

                            <table class="form-table">

                                <?php smbtoolbar_media( 'facebook',
                                                        'Facebook',
                                                        'https://www.facebook.com/YourUsernameHere',
                                                        __( 'Enter the link to your Facebook profile page', $text ),
                                                        '//www.facebook.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media(  'twitter',
                                                        'Twitter',
                                                        'https://twitter.com/YourUsernameHere',
                                                        __( 'Enter the link to your Twitter profile page', $text ),
                                                        '//twitter.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'instagram',
                                                        'Instagram',
                                                        'http://instagram.com/YourUsernameHere',
                                                        __( 'Enter the link to your Instagram profile page', $text ),
                                                        '//instagram.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'google-plus',
                                                        'Google+',
                                                        'https://plus.google.com/u/0/+YourUsernameHere',
                                                        __( 'Enter the link to your Google+ profile page', $text ),
                                                        '//plus.google.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'youtube',
                                                        'YouTube',
                                                        'https://www.youtube.com/channel/YourChannelIdentifierHere',
                                                        __( 'Enter the link to your YouTube profile page', $text ),
                                                        '//www.youtube.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'youtube-gaming',
                                                        'YouTube Gaming',
                                                        'https://gaming.youtube.com/channel/YourChannelIdentifierHere',
                                                        __( 'Enter the link to your YouTube Gaming profile page', $text ),
                                                        '//gaming.youtube.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'itunes',
                                                        'iTunes',
                                                        'https://www.apple.com/itunes/YourUsernameHere',
                                                        __( 'Enter the link to your iTunes profile page', $text ),
                                                        '//www.apple.com/itunes'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'apple-music',
                                                        'Apple Music',
                                                        'https://www.apple.com/lae/music/YourUsernameHere',
                                                        __( 'Enter the link to your Apple Music profile page', $text ),
                                                        '//www.apple.com/lae/music'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'periscope',
                                                        'Periscope',
                                                        'https://www.periscope.tv/YourUsernameHere',
                                                        __( 'Enter the link to your Periscope profile page', $text ),
                                                        '//www.periscope.tv'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'vimeo',
                                                        'Vimeo',
                                                        'https://vimeo.com/YourUsernameHere',
                                                        __( 'Enter the link to your Vimeo profile page', $text ),
                                                        '//vimeo.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'blogger',
                                                        'Blogger',
                                                        'http://YourBlogNameHere.blogspot.com',
                                                        __( 'Enter the link to your Blogger profile page', $text ),
                                                        '//www.blogger.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'buzzsprout',
                                                        'Buzzsprout',
                                                        'https://www.buzzsprout.com/YourUsernameHere',
                                                        __( 'Enter the link to your Buzzsprout profile page', $text ),
                                                        '//www.buzzsprout.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'livejournal',
                                                        'LiveJournal',
                                                        'http://YourUsernameHere.livejournal.com',
                                                        __( 'Enter the link to your LiveJournal profile page', $text ),
                                                        '//www.livejournal.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'reddit',
                                                        'Reddit',
                                                        'https://www.reddit.com/user/YourUsernameHere',
                                                        __( 'Enter the link to your Reddit profile page', $text ),
                                                        '//www.reddit.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'linkedin',
                                                        'LinkedIn',
                                                        'https://linkedin.com/in/YourUsernameHere',
                                                        __( 'Enter the link to your LinkedIn profile page', $text ),
                                                        '//linkedin.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'diaspora',
                                                        'Diaspora',
                                                        'https://diasporafoundation.org/YourUsernameHere',
                                                        __( 'Enter the link to your Diaspora profile page', $text ),
                                                        '//diasporafoundation.org'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'deviantart',
                                                        'DeviantArt',
                                                        'http://www.deviantart.com/YourUsernameHere',
                                                        __( 'Enter the link to your DeviantArt profile page', $text ),
                                                        '//www.deviantart.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'xing',
                                                        'XING',
                                                        'https://www.xing.com/YourUsernameHere',
                                                        __( 'Enter the link to your XING profile page', $text ),
                                                        '//www.xing.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'pinterest',
                                                        'Pinterest',
                                                        'https://www.pinterest.com/YourUsernameHere',
                                                        __( 'Enter the link to your Pinterest profile page', $text ),
                                                        '//www.pinterest.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'flickr',
                                                        'Flickr',
                                                        'https://www.flickr.com/YourUsernameHere',
                                                        __( 'Enter the link to your Flickr profile page', $text ),
                                                        '//www.flickr.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'tumblr',
                                                        'Tumblr',
                                                        'https://www.tumblr.com/blog/YourBlogNameHere',
                                                        __( 'Enter the link to your Tumblr profile page', $text ),
                                                        '//www.tumblr.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'snapchat',
                                                        'Snapchat',
                                                        'https://www.snapchat.com/add/YourUsernameHere',
                                                        __( 'Enter the link to your Snapchat profile page', $text ),
                                                        '//www.snapchat.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'twitch',
                                                        'Twitch',
                                                        'https://www.twitch.tv/YourUsernameHere',
                                                        __( 'Enter the link to your Twitch profile page', $text ),
                                                        '//www.twitch.tv'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'patreon',
                                                        'Patreon',
                                                        'https://www.patreon.com/YourUsernameHere',
                                                        __( 'Enter the link to your Patreon profile page', $text ),
                                                        '//www.patreon.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'imdb',
                                                        'IMDb',
                                                        'http://www.imdb.com/name/YourUsernameHere',
                                                        __( 'Enter the link to your IMDb profile page', $text ),
                                                        '//www.imdb.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'soundcloud',
                                                        'SoundCloud',
                                                        'https://soundcloud.com/YourUsernameHere',
                                                        __( 'Enter the link to your SoundCloud profile page', $text ),
                                                        '//soundcloud.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'plugdj',
                                                       'Plug.dj',
                                                       'https://plug.dj/YourUsernameHere',
                                                       __( 'Enter the link to your Plug.dj profile page', $text ),
                                                       '//plug.dj'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'spotify',
                                                        'Spotify',
                                                        'http://open.spotify.com/user/YourUsernameHere',
                                                        __( 'Enter the link to your Spotify profile page', $text ),
                                                        '//www.spotify.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'bandcamp',
                                                        'Bandcamp',
                                                        'https://bandcamp.com/YourUsernameHere',
                                                        __( 'Enter the link to your Bandcamp profile page', $text ),
                                                        '//bandcamp.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'dloky',
                                                        'Dloky',
                                                        'https://dloky.com/YourUsernameHere',
                                                        __( 'Enter the link to your Dloky profile page', $text ),
                                                        '//dloky.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'amazon',
                                                        'Amazon',
                                                        'https://www.amazon.com/YourUsernameHere',
                                                        __( 'Enter the link to your Amazon profile page', $text ),
                                                        '//www.amazon.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'bookbub',
                                                        'BookBub',
                                                        'https://www.bookbub.com/YourUsernameHere',
                                                        __( 'Enter the link to your BookBub profile page', $text ),
                                                        '//www.bookbub.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'goodreads',
                                                        'Goodreads',
                                                        'https://www.goodreads.com/YourUsernameHere',
                                                        __( 'Enter the link to your Goodreads profile page', $text ),
                                                        '//www.goodreads.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'meetvibe',
                                                        'MeetVibe',
                                                        'https://meetvibe.com/YourUsernameHere',
                                                        __( 'Enter the link to your MeetVibe profile page', $text ),
                                                        '//meetvibe.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'meetup',
                                                        'Meetup',
                                                        'https://www.meetup.com/YourUsernameHere',
                                                        __( 'Enter the link to your Meetup profile page', $text ),
                                                        '//www.meetup.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'steam',
                                                        'Steam',
                                                        'http://store.steampowered.com/YourUsernameHere',
                                                        __( 'Enter the link to your Steam profile page', $text ),
                                                        '//store.steampowered.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'mixer',
                                                        'Mixer',
                                                        'https://mixer.com/YourUsernameHere',
                                                        __( 'Enter the link to your Mixer profile page', $text ),
                                                        '//mixer.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'discord',
                                                        'Discord',
                                                        'https://discordapp.com/YourUsernameHere',
                                                        __( 'Enter the link to your Discord profile page', $text ),
                                                        '//discordapp.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'yelp',
                                                        'Yelp',
                                                        'https://www.yelp.com/YourUsernameHere',
                                                        __( 'Enter the link to your Yelp profile page', $text ),
                                                        '//www.yelp.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'stumbleupon',
                                                        'StumbleUpon',
                                                        'http://www.stumbleupon.com/YourUsernameHere',
                                                        __( 'Enter the link to your StumbleUpon profile page', $text ),
                                                        '//www.stumbleupon.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'bloglovin',
                                                        'Bloglovin',
                                                        'https://www.bloglovin.com/YourUsernameHere',
                                                        __( 'Enter the link to your Bloglovin profile page', $text ),
                                                        '//www.bloglovin.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'whatsapp',
                                                        'WhatsApp',
                                                        'https://www.whatsapp.com/YourUsernameHere',
                                                        __( 'Enter the link to your WhatsApp profile page', $text ),
                                                        '//www.whatsapp.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'medium',
                                                        'Medium',
                                                        'https://medium.com/YourUsernameHere',
                                                        __( 'Enter the link to your Medium profile page', $text ),
                                                        '//medium.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( '500px',
                                                        '500px',
                                                        'https://500px.com/YourUsernameHere',
                                                        __( 'Enter the link to your 500px profile page', $text ),
                                                        '//500px.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'behance',
                                                        'Behance',
                                                        'https://www.behance.net/YourUsernameHere',
                                                        __( 'Enter the link to your Behance profile page', $text ),
                                                        '//www.behance.net'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'polyvore',
                                                        'Polyvore',
                                                        'http://www.polyvore.com/YourUsernameHere',
                                                        __( 'Enter the link to your Polyvore profile page', $text ),
                                                        '//www.polyvore.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'yellowpages',
                                                        'Yellow Pages',
                                                        'https://www.yellowpages.com/YourUsernameHere',
                                                        __( 'Enter the link to your Yellow Pages profile page', $text ),
                                                        '//www.yellowpages.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'line',
                                                        'LINE',
                                                        'https://line.me/YourUsernameHere',
                                                        __( 'Enter the link to your LINE profile page', $text ),
                                                        '//line.me'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'hireology',
                                                        'Hireology',
                                                        'https://hireology.com/YourUsernameHere',
                                                        __( 'Enter the link to your Hireology profile page', $text ),
                                                        '//hireology.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'kompoz',
                                                        'Kompoz',
                                                        'https://www.kompoz.com/YourUsernameHere',
                                                        __( 'Enter the link to your Kompoz profile page', $text ),
                                                        '//www.kompoz.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'soundblend',
                                                        'SoundBlend',
                                                        'https://www.soundblend.com/YourUsernameHere',
                                                        __( 'Enter the link to your SoundBlend profile page', $text ),
                                                        '//www.soundblend.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'vkontakte',
                                                        'VKontakte',
                                                        'https://vk.com/id_YourIdentifierHere',
                                                        __( 'Enter the link to your VKontakte profile page', $text ),
                                                        '//vk.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'odnoklassniki',
                                                        'Odnoklassniki',
                                                        'https://ok.ru/profile/YourIdentifierHere',
                                                        __( 'Enter the link to your Odnoklassniki profile page', $text ),
                                                        '//ok.ru'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'telegram',
                                                        'Telegram',
                                                        'https://telegram.me/YourUsernameHere',
                                                        __( 'Enter the link to your Telegram profile page', $text ),
                                                        '//telegram.org'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'github',
                                                        'GitHub',
                                                        'https://github.com/YourUsernameHere',
                                                        __( 'Enter the link to your GitHub profile page', $text ),
                                                        '//github.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'wordpress',
                                                        'WordPress',
                                                        'https://profiles.wordpress.org/YourUsernameHere',
                                                        __( 'Enter the link to your WordPress profile page', $text ),
                                                        '//wordpress.org'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'codepen',
                                                        'CodePen',
                                                        'http://codepen.io/YourUsernameHere',
                                                        __( 'Enter the link to your CodePen profile page', $text ),
                                                        '//codepen.io'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'skype',
                                                        'Skype',
                                                        'skype:YourUsernameHere?call',
                                                        __( 'Enter your Skype name with prefix <b>skype:</b> and suffix <b>?call</b>, or <b>?add</b>, or <b>?chat</b>, or <b>?userinfo</b> for view profile', $text ),
                                                        '//www.skype.com'
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'website',
                                                        'Personal website',
                                                        'https://www.arthurgareginyan.com',
                                                        __( 'Enter the link to your personal website', $text ),
                                                        ''
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'email',
                                                        'Email',
                                                        'mailto:YourUsernameHere@gmail.com',
                                                        __( 'Enter your email address with prefix <b>mailto:</b>', $text ),
                                                        ''
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'telephone',
                                                        'Telephone',
                                                        'tel://1-555-555-5555',
                                                        __( 'Enter your telephone number with prefix <b>tel://</b>', $text ),
                                                        ''
                                                       );
                                ?>
                                <?php smbtoolbar_media( 'rss-feed',
                                                        'RSS Feed',
                                                        'http://YourDomainNameHere.com/feed',
                                                        __( 'Enter the link to your RSS Feed', $text ),
                                                        ''
                                                       );
                                ?>
                            </table>

                            <p class="note"><b><?php _e( 'Note!', $text ); ?></b> <?php printf(
                                                                                                __( 'If you did not find the button you need, then %s and I will gladly add it for you.', $text ),
                                                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=Request a new button for the ' . $name . ' plugin">tell me</a>'
                                                                                               ); ?></p>

                            <?php submit_button( __( 'Save changes', $text ), 'primary', 'submit', true ); ?>

                        </div>
                    </div>

                    <div class="postbox" id="DisplayOptions">
                        <h3 class="title"><?php _e( 'Display options', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'There you can configure this plugin.', $text ); ?></p>

                            <table class="form-table">
                                <?php smbtoolbar_setting( 'show_posts',
                                                          __( 'Show on Posts', $text ),
                                                          __( 'Display toolbar below content on Posts.', $text ),
                                                          'check'
                                                         );
                                ?>
                                <?php smbtoolbar_setting( 'show_pages',
                                                          __( 'Show on Pages', $text ),
                                                          __( 'Display toolbar below content on Pages.', $text ),
                                                          'check'
                                                         );
                                ?>
                                <?php smbtoolbar_setting( 'new_tab',
                                                          __( 'Open in new tab', $text ),
                                                          __( 'Open link in a new tab/window.', $text ),
                                                          'check'
                                                         );
                                ?>
                                <?php smbtoolbar_setting( 'tooltips',
                                                          __( 'Tooltips', $text ),
                                                          __( 'Enable/disable a tooltips with name of the social media above every button.', $text ),
                                                          'check'
                                                         );
                                ?>
                                <?php smbtoolbar_setting( 'icon-size',
                                                          __( 'Icon size', $text ),
                                                          __( 'Enter the size of icons (in px) in your social media follow buttons bar.', $text ),
                                                          'field',
                                                          '64',
                                                          '2'
                                                         );
                                ?>
                                <?php smbtoolbar_setting( 'margin-right',
                                                          __( 'Margin', $text ),
                                                          __( 'Enter the size of space (in px) between icons in your social media follow buttons bar.', $text ),
                                                          'field',
                                                          '10',
                                                          '2'
                                                         );
                                ?>

                                <tr>
                                    <th scope='row'>
                                        <?php _e( 'Alignment', $text ); ?>
                                    </th>
                                    <td>
                                        <ul>
                                            <li>
                                                <input type="radio" name="smbtoolbar_settings[alignment]" value="left" <?php checked( 'left', $alignment ); ?> >
                                                <?php _e( 'Left', $text ); ?>
                                            </li>
                                            <li>
                                                <input type="radio" name="smbtoolbar_settings[alignment]" value="center" <?php checked( '', $alignment ); ?> <?php checked( 'center', $alignment ); ?> >
                                                <?php _e( 'Center', $text ); ?>
                                            </li>
                                            <li>
                                                <input type="radio" name="smbtoolbar_settings[alignment]" value="right" <?php checked( 'right', $alignment ); ?> >
                                                <?php _e( 'Right', $text ); ?>
                                            </li>
                                            </ul>
                                    </td>
                                </tr>

                                <?php smbtoolbar_setting('caption',
                                                          __( 'Caption', $text ),
                                                          __( 'Enter the caption to your social media follow buttons bar. It will be displays before the toolbar.', $text ),
                                                          'field',
                                                          'Follow me in social media:',
                                                          '50'
                                ); ?>

                            </table>

                            <?php submit_button( __( 'Save changes', $text ), 'primary', 'submit', true ); ?>

                        </div>
                    </div>

                    <div class="postbox" id="Preview">
                        <h3 class="title"><?php _e( 'Preview', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Click the "Save changes" button to update this preview.', $text ); ?></p><br>
                            <?php echo smbtoolbar_shortcode(); ?>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', $text ); ?></a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
