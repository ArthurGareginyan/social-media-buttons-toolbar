=== Social Media Buttons Toolbar ===
Contributors: Arthur Gareginyan
Tags: icon, icon set, button, social, media, social button, social media, social network, follow, follow button, follow link, follow icon, follow me, toolbar, link to profile, facebook, twitter, instagram, google plus, youtube, vimeo, blogger, livejournal, linkedIn, pinterest, tumblr, soundcloud, spotify, meetvibe, vkontakte, vk, vk.com, odnoklassniki, ok, ok.ru, telegram, github, wordpress, codepen, skype, personal website, email, rss feed, rss, feed,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.6
Stable tag: 3.7
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily add the smart toolbar with social media buttons (not share, only link to your profiles) to any place of your WordPress website.

== Description ==

An easy to use WordPress plugin that gives you the ability to easily add the smart toolbar with social media buttons to any place (post, page, widget, sidebar, footer) of your WordPress website.

The social media buttons toolbar - is a toolbar with set of icons of the popular social media which are linked directly to your profile on this social networks. I.e. clicking the Facebook icon will take the user to your Facebook page, clicking the Twitter icon will take them to your Twitter page.

Unlike the other plugins, this plugin creates a live toolbar. The toolbar automatically adapt to the width of the block where it placed. If the buttons do not fit to the one line, then they will be placed on multiple lines. So they can be arranged horizontally or vertically, in one line or in a few, and all of this is done automatically. Also it can be aligned to left, center or right.

It give you finer control over buttons. You can configure they on plugins settings page. You can choose the size of icons, choose open link in current tab or in new, and etc. Also you can have the social media buttons automatically added to the bottom of all post or/and pages, and can position the link buttons using either a widget, a shortcode or a template action hook.

= Features =

* Icon set ["Social Buttons 2"](https://www.iconfinder.com/iconsets/social-buttons-2?ref=ArthurGareginyan) by Ivlichev Victor Petrovich
* [Some icons](https://www.iconfinder.com/iconsets/meetvibe?ref=ArthurGareginyan) by [Arthur Gareginyan](http://www.arthurgareginyan.com)
* Plugin settings page with many settings
* Preview on plugin settings page
* Shortcode for add social media buttons from Post/Page Editor
* PHP/HTML code for add social media buttons directly in your theme files
* Ready for translation (POT file included)

**Supported social media and links:**

* Facebook
* Twitter
* Instagram
* Google+
* YouTube
* Vimeo
* Blogger
* LinkedIn
* LiveJournal
* Reddit
* Pinterest
* Tumblr
* Snapchat
* SoundCloud
* Spotify
* MeetVibe
* VKontakte (vk.com)
* Odnoklassniki (ok.ru)
* Telegram
* GitHub
* WordPress
* Codepen
* Skype
* Personal website
* Email
* RSS Feed

**Got more ideas? Tell me!**

= Translation =

Please keep in mind that not all translations are up to date. You are welcome to contribute!

* English (default)
* Russian
* Spanish (translation by [Ramiro Garcés](http://www.ramirogarces.com.ve/))

= Using =

You have several methods for display the social media buttons toolbar (further just "toolbar") on your website. But first, enter a links for each buttons, then click "Save Changes".

A) For display the toolbar below content on every Posts or/and Pages, just check the checkbox "Show on Posts" or/and "Show on Pages" in the section "Display options", then click "Save Changes". It's that simple!

B) For add the toolbar inside a post from WP Post/Page Editor use the following shortcode:
`[smbtoolbar]`

C) For add the toolbar to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:
`[smbtoolbar]`

D) For add the toolbar directly to a theme files, just add one of the following code (both variants do the same) to needed place (where you want to display the toolbar) in your theme files:
`<?php echo do_shortcode("[smbtoolbar]"); ?>`

`<?php echo smbtoolbar_shortcode(); ?>`

>**Contribution**
>
>Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to:
>
>* [Donate](http://www.arthurgareginyan.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
>* [Rate and Review](https://wordpress.org/support/view/plugin-reviews/social-media-buttons-toolbar?rate=5#postform) this plugin.
>* [Share with me](mailto:arthurgareginyan@gmail.com) or view the [GitHub Repo](https://github.com/ArthurGareginyan/social-media-buttons-toolbar) if you have any ideas or suggestions to make this plugin better.


== Installation ==
Install "Social Media Buttons Toolbar" just as you would any other WordPress Plugin.

Automatically via WordPress:

1. Log into Dashboard of your WordPress website.
2. Go to "`Plugins`" —> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manual via FTP:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log into Dashboard of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Social Buttons`" menu item will appear in the "`Settings`" section. Click on this in order to view plugin's administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Q. Will this plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.

= Q. Can I use this plugin on my language? =
A. Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= Q. How does it work? =
A. First, go to page "`Settings`" —> "`Social Buttons`".
On the plugins page you find the fields where you can enter your `User ID's`, `URL` to your social network profile.

= Q. Does this plugin require modification to the theme? =
A. Absolutely not. This plugin is added/configured entirely from the website's Admin section.

= Q. Does this require any knowledge of HTML or CSS? =
A. Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using a simple WordPress settings page.

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is that the plugin has a conflict with another plugin you're using. It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, I'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. Where to report bug if found? =
A. Please visit [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/social-media-buttons-toolbar) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Please send me email [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com).

= Q. I love this plugin! Can I help somehow? =
A. Yes, any financial contributions are welcome! Just visit my website and click on the donate link, and thank you! [My website](http://www.arthurgareginyan.com/donate.html)


== Screenshots ==
1. Plugin settings page.
2. Social Media Buttons Toolbar displayed below the content of a post (Twenty Sixteen theme).
3. Social Media Buttons Toolbar displayed in the sidebar using a shortcode in text widget (Twenty Sixteen theme).
4. Social Media Buttons Toolbar displayed in the footer using a shortcode in text widget (Anarcho Notepad theme).
5. Social Media Buttons Toolbar displayed in the footer using a simple call the function directly from theme file (vCard theme).
6. Shortcode placed in the Text Widget.
7. All buttons.


== Other Notes ==

"Social Media Buttons Toolbar" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is open-sourced software licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

Icon set [Social Buttons 2](https://www.iconfinder.com/iconsets/social-buttons-2?ref=ArthurGareginyan) by Ivlichev Victor Petrovich and licensed under the [Creative Commons (Attribution 3.0 Unported)](http://creativecommons.org/licenses/by/3.0/).

Icons snapchat.png and [meetvibe.png](https://www.iconfinder.com/iconsets/meetvibe?ref=ArthurGareginyan) by [Arthur Gareginyan](http://www.arthurgareginyan.com) and licensed under the [Creative Commons (Attribution 3.0 Unported)](http://creativecommons.org/licenses/by/3.0/).

[Bootstrap](http://getbootstrap.com) released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).

[Bootstrap-checkbox](https://github.com/vsn4ik/bootstrap-checkbox) is a project of [Vasily A.](https://github.com/vsn4ik), shared under the [MIT license](https://github.com/vsn4ik/bootstrap-checkbox/blob/master/LICENSE).

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/social-media-buttons-toolbar)

== Changelog ==
= 3.7 =
* Added option for Vimeo button.
* Translations updated.
* Ad banner replaced with new.
= 3.6 =
* Added option for Snapchat button.
= 3.5 =
* Added Spanish translation. (Thanks [Ramiro Garcés](http://www.ramirogarces.com.ve/))
= 3.4 =
* Added option for SoundCloud button.
* Added option for Spotify button.
* Improved examples in the fields on the settings page.
* POT file updated.
* Russian translation updated.
= 3.3 =
* Added option to adjust the alignment of toolbar.
* Added the Readme.txt file for translation contribution.
* Added global constant for plugin text-domain.
= 3.2 =
* Added option for Skype button.
* Ready for translation improved.
* Texts on settings page improved.
* Russian translation improved.
= 3.1 =
* Added prefixes to the stylesheet and script names when using wp_enqueue_style() and wp_enqueue_script().
* Added constant for storing the plugin version number.
= 3.0 =
* The structure of files changed.
* Style sheet of settings page improved and better commented.
* Style sheet of settings page optimized for mobile devices.
* Added JavaScript file for settings page.
* Added JavaScript function of automatic remove the "successful" message after 3 seconds.
* Checkboxes replaced with cool triggers by using Bootstrap framework and Bootstrap-checkbox component.
= 2.3.1 =
* POT file updated.
* Russian translation updated.
* Image "thanks.png" removed.
* Advertisement replaced by new.
* Added the subject with plugin name to email address on settings page.
* Function "smbtoolbar_enqueue_scripts" renamed to "smbtoolbar_load_scripts".
= 2.3 =
* Added Telegram button.
= 2.2.1 =
* Added the `!important` flag to the display property of `<a>` element.
= 2.2 =
* Added MeetVibe button.
* Fixed the display property of `<li>` and `<a>` elements.
* Fixed the issue with border that sometimes appeared at bottom of an icons.
= 2.1 =
* Added Reddit button.
= 2.0 =
* Some changes in design of settings page.
* Constants variables added.
* Text domain changed to "social-media-buttons-toolbar".
* Added compatibility with the translate.wordpress.org.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.
* Plugin URI changed to GitHub repository.
* Added my personal ad about freelance.
* `.pot` file updated.
* Russian translation updated.
= 1.5 =
* Fixed: `Notice: Undefined index: new_tab in .../social-media-buttons-toolbar.php on line 240`.
= 1.4 =
* Added 6 new buttons (LiveJournal, Pinterest, Tumblr, VKontakte, Odnoklassniki, Personal website).
* Fixed: "Use of undefined constant media".
* Plugin URI changed to GitHub repository.
* Some changes in design of settings page.
* Added my personal ad about freelance.
* Some changes in design of settings page.
* `.pot` file updated.
* Russian translation updated.
= 1.3 =
* Some changes in design of settings page.
* On settings page added section "Using" with the using details. (Thanks Hubert O'Brien)
= 1.2 =
* Fixed the compatibility issue with some themes. The issue was caused by not a unique class names in the html tags.
* The default caption now is empty. The text "Follow me on social media:" is removed.
* Removed extra settings update message.
* The thanks.png image replaced.
= 1.1 =
* Authors URI changed.
* Icons updated.
= 1.0 =
* Initial release.
* Added ready for translation (`.pot` file included).
* Added Russian translation.
= 0.3 =
* Release candidate.
= 0.2 =
* Beta version.
= 0.1 =
* Alfa version.


== Upgrade Notice ==
= 3.0 =
Please update to new release!
= 2.0 =
Please update to new release!
= 1.0 =
Please update to first stable release!
= 0.3 =
Prerelease.
= 0.2 =
Please update to beta version.
