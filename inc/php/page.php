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
        <h2>
            <?php echo $name; ?>
            <span>
                <?php printf(
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
                            <li><?php _e( 'Go to the "Settings" tab.', $text ); ?></li>
                            <li><?php _e( 'Fill in the required fields.', $text ); ?></li>
                            <li><?php _e( 'Select the desired settings.', $text ); ?></li>
                            <li><?php _e( 'Click the "Save changes" button.', $text ); ?></li>
                            <li><?php _e( 'Now you have several methods for display the social media follow buttons bar (further just "buttons"). Just choose the one that is more suitable for your case.', $text ); ?><br><br>
                                <p><?php _e( '<b>A)</b> For display the buttons below a content on every Posts or/and Pages, just check the checkbox "Show on Posts" or/and "Show on Pages" in the section "Display options", then click the "Save changes" button.', $text ); ?></p>
                                <p><?php _e( '<b>B)</b> For add the buttons inside a post from WordPress Post/Page Editor use the following shortcode:', $text ); ?></p>
                                <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                <p><?php _e( '<b>C)</b> For add the buttons to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', $text ); ?></p>
                                <p><?php highlight_string('[smbtoolbar]'); ?></p>
                                <p><?php _e( '<b>D)</b> For add the buttons directly to a theme files, just add the following code to needed place (where you want to display the buttons) in your theme files:', $text ); ?></p>
                                <p><?php highlight_string('<?php echo do_shortcode("[smbtoolbar]"); ?>'); ?></p>
                            </li>
                            <li><?php _e( 'Enjoy your fancy social media follow buttons.', $text ); ?> <?php _e( 'It\'s that simple!', $text ); ?></li>
                        </ol>
                        <p class="note"><b><?php _e( 'Note!', $text ); ?></b> <?php printf(
                                                                                            __( 'If you want more options then %s tell us %s and we will be happy to add it.', $text ),
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
                                $loopvalue = '12';
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

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', $text ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', $text ); ?></div>

                        <div class="question-2"><?php _e( 'Can I use this plugin on my language?', $text ); ?></div>
                        <div class="answer-2"><?php _e( 'Yes. This plugin is ready for translation and has already been translated into several languages.', $text ); ?><br><br>
                                              <?php printf(
                                                            __( 'If you want to help translate this plugin then please visit the %s. You can also use the POT file, that is included and placed in the "languages" folder, in order to create a translation PO file. Just send the PO file to us at the %s and we will include this translation within the next plugin update.', $text ),
                                                                '<a href="https://translate.wordpress.org/projects/wp-plugins/' . $slug . '" target="_blank">translation page</a>',
                                                                '<a href="mailto:support@spacexchimp.com?subject=New translation of the ' . $name . ' plugin">support@spacexchimp.com</a>'
                                                           );
                                              ?><br><br>
                                              <?php _e( 'Maybe not all existed translations are up to date. You are welcome to contribute corrections!', $text ); ?><br><br>
                                              <?php _e( 'Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!', $text ); ?></div>

                        <div class="question-3"><?php _e( 'How does it work?', $text ); ?></div>
                        <div class="answer-3"><?php _e( 'On the "Settings" tab, select the desired settings and click the "Save changes" button. Enjoy your fancy social media follow buttons. It\'s that simple!', $text ); ?></div>

                        <div class="question-4"><?php _e( 'Does this plugin requires any modification of the theme?', $text ); ?></div>
                        <div class="answer-4"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', $text ); ?></div>

                        <div class="question-5"><?php _e( 'Does this require any knowledge of HTML or CSS?', $text ); ?></div>
                        <div class="answer-5"><?php _e( 'Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', $text ); ?></div>

                        <div class="question-6"><?php _e( 'What I need to do if the Google PageSpeed test says that this plugin images must be compressed?', $text ); ?></div>
                        <div class="answer-6"><?php _e( 'The images that uses in this plugin are already compressed, but I will do my best to find out what else can be done with the images in order to compress them even better.', $text ); ?></div>

                        <div class="question-7 question-red"><?php _e( 'It\'s not working. What could be wrong?', $text ); ?></div>
                        <div class="answer-7"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', $text ); ?><br><br>
                                              <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, we\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?></div>

                        <div class="question-8 question-red"><?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin. Why is this?', $text ); ?></div>
                        <div class="answer-8"><?php _e( 'This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.', $text ); ?></div>

                        <div class="question-9 question-red"><?php _e( 'Where to report bug if found?', $text ); ?></div>
                        <div class="answer-9"><?php printf(
                                                            __( 'Bug reports are very welcome! Please visit %s our contact page %s and report. Please do not forget to specify the name of the plugin. Thank you!', $text ),
                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                '</a>'
                                                          );
                                              ?></div>

                        <div class="question-10"><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', $text ); ?></div>
                        <div class="answer-10"><?php printf(
                                                            __( 'Any suggestions are very welcome! Please visit %s our contact page %s. Please do not forget to specify the name of the plugin. Thank you!', $text ),
                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                '</a>'
                                                          );
                                              ?></div>

                        <div class="question-11"><?php _e( 'I love this plugin! Can I help somehow?', $text ); ?></div>
                        <div class="answer-11"><?php printf(
                                                            __( 'Yes, any contributions are very welcome! Please visit %s our donation page %s. Thank you!', $text ),
                                                                '<a href="https://www.spacexchimp.com/donate.html" target="_blank">',
                                                                '</a>'
                                                          );
                                              ?></div>

                        <div class="question-12"><?php _e( 'My question wasn\'t answered here.', $text ); ?></div>
                        <div class="answer-12"><?php printf(
                                                            __( 'You can ask your question on %s this page %s. But please keep in mind that this plugin is free, and there is no a special support team, so we have no way to answer everyone.', $text ),
                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

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
                        <p><?php
                                 printf(
                                         __( 'Hello! My name is %s Arthur %s, I\'m the founder of %s Space X-Chimp %s, which unites a small international team of young people.', $text ),
                                         '<a href="https://www.instagram.com/arthur_gareginyan/" target="_blank">',
                                         '</a>',
                                         '<a href="https://www.spacexchimp.com" target="_blank">',
                                         '</a>'
                                       );
                           ?>
                        </p>
                        <p><?php _e( 'Our intention is to create projects that will make this world a better place. Our motto is - «Follow your dreams and don’t give up». We are really passionate about our work, we like what we are doing and hope that you will be enriched by our projects too.', $text ); ?></p>
                        <p><?php _e( 'We spend a lot of time and effort trying to make sure that the themes, plugins and other things we build are useful, and the ultimate proof of that for us is that you actually want to use them. But we are an independent developers, without a regular income, so every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $text ); ?></p>
                        <p><?php _e( 'If you appreciate our work, you can buy us a cup of coffee!', $text ); ?></p>
                        <p><?php _e( 'Thank you for your support!', $text ); ?></p>
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
