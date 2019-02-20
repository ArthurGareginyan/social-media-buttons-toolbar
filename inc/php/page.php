<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Page
 */
function spacexchimp_p005_render_submenu_page() {

    // Put value of constants to variables for easier access
    $name = SPACEXCHIMP_P005_NAME;
    $slug = SPACEXCHIMP_P005_SLUG;
    $version = SPACEXCHIMP_P005_VERSION;
    $text = SPACEXCHIMP_P005_TEXT;

    // Call messages
    spacexchimp_p005_hello_message();
    spacexchimp_p005_error_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2 class="sxc-header">
            <?php echo $name; ?>
            <span>
                <?php
                    printf(
                        __( 'by %s Space X-Chimp %s', $text ),
                        '<a href="https://www.spacexchimp.com" target="_blank">',
                        '</a>'
                    );
                ?>
            </span>
            <p class="version"><?php _e( 'Version', $text ); ?> <?php echo $version; ?></p>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Settings', $text ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', $text ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', $text ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', $text ); ?></a></li>
                <li><a href="#tab-store" data-toggle="tab"><?php _e( 'Store', $text ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->

            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">
                <!-- INCLUDE SIDEBAR -->
                <?php require_once( SPACEXCHIMP_P005_PATH . 'inc/php/sidebar.php' ); ?>
                <!-- INCLUDE SETTINGS -->
                <?php require_once( SPACEXCHIMP_P005_PATH . 'inc/php/settings.php' ); ?>
            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage Instructions', $text ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To display the social media follow buttons bar on the front end of your website, simply follow these steps:', $text ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Settings" tab on this page.', $text ); ?></li>
                            <li><?php _e( 'Select the desired buttons and fill in the required URL fields.', $text ); ?></li>
                            <li><?php _e( 'Select the desired settings.', $text ); ?></li>
                            <li><?php _e( 'Click the "Save changes" button.', $text ); ?></li>
                            <li>
                                <?php _e( 'Now you have several methods for display the social media follow buttons bar (further just "buttons").', $text ); ?>
                                <?php _e( 'Just choose the one that is more suitable for your case.', $text ); ?>
                                <br><br>
                                <p><?php _e( '<b>A)</b> To automatically display the buttons below a content on every Posts and/or Pages, simply use the appropriate option in the "Autoload" section, then click the "Save changes" button.', $text ); ?></p>
                                <p><?php _e( '<b>B)</b> To add the buttons inside a post from WordPress Post/Page Editor use the following shortcode:', $text ); ?></p>
                                <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                <p><?php _e( '<b>C)</b> To add the buttons to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', $text ); ?></p>
                                <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                <p><?php _e( '<b>D)</b> To add the buttons directly to the theme files, just add the following code to needed place (where you want to display the buttons) in your theme files:', $text ); ?></p>
                                <p><?php highlight_string('<?php echo do_shortcode("[smbtoolbar]"); ?>'); ?></p>
                            </li>
                            <li><?php _e( 'Enjoy your fancy social media follow buttons.', $text ); ?> <?php _e( 'It\'s that simple!', $text ); ?></li>
                        </ol>
                        <p class="note">
                            <?php
                                printf(
                                    __( 'If you want more options, then %s let us know %s and we will be happy to add them.', $text ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', $text ); ?></h3>
                    <div class="inside">

                        <p class="note">
                            <?php _e( 'If you have a question, please read the Frequently Asked Questions below to see if the answer is here.', $text ); ?>
                        </p>

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '20';
                                for ( $i = 1; $i <= $loopvalue; $i++ ) {
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#collapse-group" href="#element' . $i . '">
                                                    <h4 class="panel-title"></h4>
                                                </a>
                                            </div>
                                            <div id="element' . $i . '" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                </div>
                                            </div>
                                          </div>';
                                }
                            ?>
                        </div>

                        <?php $i = 1; ?>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find a documentation for this plugin?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Please visit our %s Documentation site %s to view documentation.', $text ),
                                    '<a href="https://docs.spacexchimp.com" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Will this plugin work on my wordpress.COM website?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Sorry, this plugin is available for use only on self-hosted (wordpress.ORG) websites.', $text ); ?>
                            <br><br>
                            <?php _e( 'Please note that there is a difference between wordpress.COM and wordpress.ORG.', $text ); ?>
                            <?php _e( 'The wordpress.COM is a blog hosting service that offers a limited version of the popular self-hosted WordPress software.', $text ); ?>
                            <?php
                                printf(
                                    __( 'You can learn more about the difference here: %s .', $text ),
                                    '<a href="https://en.support.wordpress.com/com-vs-org/" target="_blank">https://en.support.wordpress.com/com-vs-org/</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Will this plugin work/compatible with the theme I use?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'This plugin is compatible with most themes.', $text ); ?>
                            <?php _e( 'But, unfortunately, we cannot check it with all third-party themes (especially paid ones) for compatibility, therefore there are cases when this plugin does not work with a third-party theme.', $text ); ?>
                            <?php _e( 'We constantly check this plugin for compatibility with third-party themes.', $text ); ?>
                            <?php _e( 'If we find that this plugin is incompatible with a third-party theme, and if we can fix it on our part, we release an update of our plugin to fix the problem.', $text ); ?>
                            <br><br>
                            <?php _e( 'If you find a conflict between our plugin and a third-party theme, please let us know and we will definitely release an update of our plugin to fix the problem.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Will this plugin work/compatible with other plugins that I use?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'This plugin is compatible with most plugins.', $text ); ?>
                            <?php _e( 'But, unfortunately, we cannot check it with all third-party plugins (especially paid ones) for compatibility, therefore there are cases when this plugin does not work with a third-party plugin.', $text ); ?>
                            <?php _e( 'We constantly check this plugin for compatibility with third-party plugins.', $text ); ?>
                            <?php _e( 'If we find that this plugin is incompatible with a third-party plugin, and if we can fix it on our part, we release an update of our plugin to fix the problem.', $text ); ?>
                            <br><br>
                            <?php _e( 'If you find a conflict between our plugin and a third-party plugin, please let us know and we will definitely release an update of our plugin to fix the problem.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Can I use this plugin on my language?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Yes.', $text ); ?>
                            <?php _e( 'This plugin is ready for translation and has already been translated into several languages.', $text ); ?>
                            <?php _e( 'But If your language is not available then you can make one.', $text ); ?>
                            <?php _e( 'It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections.', $text ); ?>
                            <?php _e( 'Many of plugin users would be delighted if you share your translation with the community.', $text ); ?>
                            <?php _e( 'Thanks for your contribution!', $text ); ?>
                            <br><br>
                            <?php
                                printf(
                                    __( 'If you want to help translate this plugin, please visit the %s.', $text ),
                                    '<a href="https://translate.wordpress.org/projects/wp-plugins/' . $slug . '" target="_blank">translation page</a>'
                                );
                            ?>
                            <?php _e( 'You can also use the POT file that is included and placed in the "languages" folder to create a translation PO file.', $text ); ?>
                            <?php
                                printf(
                                    __( 'Just send the PO file to us ( %s ) and we will include this translation within the next plugin update.', $text ),
                                    '<a href="mailto:support@spacexchimp.com?subject=New translation of the ' . $name . ' plugin">support@spacexchimp.com</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'How does it work?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'On the "Settings" tab, select the desired settings and click the "Save changes" button.', $text ); ?>
                            <?php _e( 'Enjoy your fancy social media follow buttons.', $text ); ?>
                            <?php _e( 'It\'s that simple!', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Can I configure my buttons bar instance?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Yes.', $text ); ?>
                            <?php _e( 'On the "Settings" tab, select the desired settings and click the "Save changes" button.', $text ); ?>
                            <?php _e( 'It\'s that simple!', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'How many buttons bar instances can I create?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'The free version of this plugin supports only 1 instance of the buttons bar.', $text ); ?>
                            <br><br>
                            <?php _e( 'In the premium version of this plugin you can create up to 10 of buttons bar instances.', $text ); ?>
                            <?php _e( 'This is very useful, because that way you can manage your buttons bar instances separately.', $text ); ?>
                            <?php _e( 'Soon we will remove the limit on the number of buttons bar instances so that you can create an unlimited number of buttons bar instances.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Does this plugin requires any modification of the theme?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Absolutely not.', $text ); ?>
                            <?php _e( 'This plugin is configurable entirely from the plugin settings page.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Does this require any knowledge of HTML or CSS?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Absolutely not.', $text ); ?>
                            <?php _e( 'This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'What I need to do if the Google PageSpeed test says that this plugin images must be compressed?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'The images that uses in this plugin are already compressed, but we will do our best to find out what else can be done with the images in order to compress them even better.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'It\'s not working.', $text ); ?>
                            <?php _e( 'What could be wrong?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'As with every plugin, it\'s possible that things don\'t work.', $text ); ?>
                            <?php _e( 'It\'s impossible to tell what could be wrong exactly.', $text ); ?>
                            <?php _e( 'The most common reason for this is a web browser\'s cache.', $text ); ?>
                            <?php _e( 'Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load.', $text ); ?>
                            <?php _e( 'This is called the browser\'s cache.', $text ); ?>
                            <?php _e( 'Clearing your browser\'s cache may solve the problem.', $text ); ?>
                            <br><br>
                            <?php _e( 'If you post a support request in the plugin\'s support forum on WordPress.org, we\'d be happy to give it a look and try to help out.', $text ); ?>
                            <?php _e( 'Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin.', $text ); ?>
                            <?php _e( 'Why is this?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'This plugin can not cause such problem.', $text ); ?>
                            <?php _e( 'More likely, the problem are related to the settings of the website.', $text ); ?>
                            <?php _e( 'It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser.', $text ); ?>
                            <?php _e( 'Also please try to re-login to the website, this too can help.', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'Where to report bug if found?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Bug reports are very welcome!', $text ); ?>
                            <?php
                                printf(
                                    __( 'Please visit our %s contact page %s and report.', $text ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'Please do not forget to specify the name of the plugin.', $text ); ?>
                            <?php _e( 'Thank you!', $text ); ?>
                            <br><br>
                            <?php _e( 'Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?>
                            <?php _e( 'Describe in more detail what exactly you are seeing.', $text ); ?>
                            <?php _e( 'Here are some examples:', $text ); ?>
                            <br><br>
                            <ul class="custom-list">
                                <li><?php _e( 'Elements of the plugin settings page are not working.', $text ); ?></li>
                                <li><?php _e( 'An error message is displayed on the plugin settings page.', $text ); ?></li>
                                <li><?php _e( 'An error message is displayed on the front end of website.', $text ); ?></li>
                                <li><?php _e( 'An error message is displayed on the back end of website.', $text ); ?></li>
                                <li><?php _e( 'Website is crashed.', $text ); ?></li>
                            </ul>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where to share any ideas or suggestions to make the plugin better?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Any suggestions are very welcome!', $text ); ?>
                            <?php
                                printf(
                                    __( 'Please visit our %s contact page %s.', $text ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'Please do not forget to specify the name of the plugin.', $text ); ?>
                            <?php _e( 'Thank you!', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'I love this plugin!', $text ); ?>
                            <?php _e( 'Can I help somehow?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Yes, any contributions are very welcome!', $text ); ?>
                            <?php
                                printf(
                                    __( 'Please visit our %s Support Us %s page.', $text ),
                                    '<a href="https://www.spacexchimp.com/donate.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'Thank you!', $text ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find information about your licenses, payment process and refunds?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Answers to common questions about our licenses, payment process and refunds can be found on our %s Common Questions %s page.', $text ),
                                    '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find information about your customer support?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Answers to common questions about our customer support can be found on our %s Common Questions %s page.', $text ),
                                    '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find information about your affiliate program?', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Answers to common questions about our affiliate program can be found on our %s Common Questions %s page.', $text ),
                                    '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'My question wasn\'t answered here.', $text ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'You can ask your question on %s this page %s.', $text ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'But please keep in mind that this plugin is free, and there is no a special support team, so we have no way to answer everyone.', $text ); ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support Us', $text ); ?></h3>
                    <div class="inside">
                        <span class="image-with-button pull-left">
                            <img src="<?php echo SPACEXCHIMP_P005_URL . 'inc/img/thanks.png'; ?>" alt="Thanks!">
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                <span class="btn-label">
                                    <img src="<?php echo SPACEXCHIMP_P005_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                </span>
                                <?php _e( 'Donate with PayPal', $text ); ?>
                            </a>
                        </span>
                        <p>
                            <?php _e( 'Hello!', $text ); ?>
                            <?php
                                printf(
                                    __( 'My name is %s Arthur %s, I\'m the founder of %s Space X-Chimp %s, which unites a small international team of young people.', $text ),
                                    '<a href="https://www.instagram.com/arthur_gareginyan/" target="_blank">',
                                    '</a>',
                                    '<a href="https://www.spacexchimp.com" target="_blank">',
                                    '</a>'
                                );
                           ?>
                        </p>
                        <p>
                            <?php _e( 'Our intention is to create projects that will make this world a better place.', $text ); ?>
                            <?php _e( 'Our motto is - «Follow your dreams and don’t give up».', $text ); ?>
                            <?php _e( 'We are really passionate about our work, we like what we are doing and hope that you will be enriched by our projects too.', $text ); ?>
                        </p>
                        <p>
                            <?php _e( 'We spend a lot of time and effort trying to make sure that the themes, plugins and other things we build are useful, and the ultimate proof of that for us is that you actually want to use them.', $text ); ?>
                            <?php _e( 'But we are an independent developers, without a regular income, so every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $text ); ?>
                        </p>
                        <p>
                            <?php _e( 'If you appreciate our work, you can buy us a cup of coffee!', $text ); ?>
                        </p>
                        <p>
                            <?php _e( 'Thank you for your support!', $text ); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-store">
                <div class="include-tab-store"></div>
            </div>
            <!-- END-TAB 5 -->

        </div>

    </div>
    <?php
}
