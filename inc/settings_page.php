<?php

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function smbtoolbar_render_submenu_page() {

	// Declare variables
    $options = get_option( 'smbtoolbar_settings' );

	// Settings update message
	if ( isset( $_GET['settings-updated'] ) ) :
		?>
			<div id="message" class="updated">
				<p>
					<?php _e( 'Your options was sucessfully updated.', 'smbtoolbar' ); ?>
				</p>
			</div>
		<?php
	endif;

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Social Media Buttons Toolbar', 'smbtoolbar' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://mycyberuniverse.com/author.html" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'smbtoolbar' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'smbtoolbar' ); ?></h3>
                        <div class="inside">
                            <p class="about">
                                <img src="<?php echo plugins_url('thanks.png', __FILE__); ?>">
                            </p>
                            <p><?php _e( 'This plugin allows you to easily add the social media buttons toolbar to any place of your web-site.', 'smbtoolbar' ) ?></p>
                            <p><?php _e( 'To use, enter your User ID\'s, then click "Save Changes". It\'s that simple!', 'smbtoolbar' ) ?></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'smbtoolbar' ); ?></h3>
                        <div class="inside">
                            <p class="donate"><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'smbtoolbar' ) ?></p>
                            <div class="aligncenter">
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                    <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                                </a>
                            </div>
                            <p class="donate"><?php _e( 'Thanks for your support!', 'smbtoolbar' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'smbtoolbar' ); ?></h3>
                        <div class="inside">
                            <div class="aligncenter">
                                <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'smbtoolbar' ); ?></p>
                            </div>
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

                            <div class="postbox" id="UserIDs">
                                <h3 class="title"><?php _e( 'User ID’s', 'smbtoolbar' ); ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Enter your User ID for each service you choose below to make the button link directly to your profile. If you don\'t want to use any of the following options, you can just forget about these.', 'smbtoolbar' ); ?></p>
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
                                        <?php smbtoolbar_media( 'linkedin',
                                                                'LinkedIn',
                                                                'https://linkedin.com/in/arthurgareginyan',
                                                                'Enter the link to your LinkedIn profile page',
                                                                'https://linkedin.com'
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
                                    <?php submit_button( __( 'Save Changes', 'smbtoolbar' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="DisplayOptions">
                                <h3 class="title"><?php _e( 'Display options', 'smbtoolbar' ) ?></h3>
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
                                    <?php submit_button( __( 'Save Changes', 'smbtoolbar' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Preview">
                                <h3 class="title"><?php _e( 'Preview', 'smbtoolbar' ) ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Enter your User ID\'s, then click  "Save Changes" to update this preview.', 'smbtoolbar' ) ?></p></br>
                                    <?php echo smbtoolbar_shortcode(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END-FORM -->

            </form>

        </div>

	</div>
	<?php
}