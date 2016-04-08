=== Social Media Buttons Toolbar ===
Contributors: Arthur Gareginyan
Tags: icon, icon set, button, social, media, social button, social media, social network, toolbar, link to profile, facebook, twitter, instagram, google plus, youtube, blogger, livejournal, linkedIn, pinterest, tumblr, vkontakte, vk, odnoklassniki, ok, github, wordpress, codepen, personal website, email, rss feed, rss, feed
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.4
Stable tag: 1.5
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily add the smart toolbar with social media buttons (not share, only link to your profiles) to any place of your WordPress website.

== Description ==

An easy to use WordPress plugin that gives you the ability to easily add the smart toolbar with social media buttons to any place (post, page, widget, sidebar, footer) of your WordPress website.

The social media buttons toolbar - is a toolbar with set of icons of the popular social media which are linked directly to your profile on this social networks. I.e. clicking the Facebook icon will take the user to your Facebook page, clicking the Twitter icon will take them to your Twitter page.

Unlike the other plugins, this plugin create a live toolbar. If the buttons do not fit to the one line, then they will be placed on multiple lines. So they can be arranged horizontally or vertically, in one line or in a few and it always centered.

It give you finer control over buttons. You can configure they on plugins settings page. You can choose the size of icons, choose open link in current tab or in new, and etc. Also you can have the social media buttons automatically added to the bottom of all post or/and pages, and can position the link buttons using either a widget, a shortcode or a template action hook.

= Features =

* Icon set ["Social Buttons 2"](https://www.iconfinder.com/iconsets/social-buttons-2) by Ivlichev Victor Petrovich
* Ready for translation (.pot file included).
* Russian translation.

**Supported social media and links:**

* Facebook
* Twitter
* Instagram
* Google+
* YouTube
* Blogger
* LinkedIn
* LiveJournal
* Pinterest
* Tumblr
* VKontakte
* Odnoklassniki
* GitHub
* WordPress
* Codepen
* Personal website
* Email
* RSS Feed

**Using:**

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
>* Please [donate](http://www.arthurgareginyan.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
>* Please take the time to [rate and review](https://wordpress.org/support/view/plugin-reviews/social-media-buttons-toolbar?rate=5#postform) this plugin.
>* Please [share with me](mailto:arthurgareginyan@gmail.com) if you have any ideas or suggestions to make this plugin better.


== Installation ==
Install "Social Media Buttons Toolbar" just as you would any other WordPress Plugin.

Automatically via WordPress:

1. Log into WordPress Dashboard of your website.
2. Go to "`Plugins`" —> "`add new plugins`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manual via FTP:

1. Download a copy (zip file) of this plugin from WordPress.org.
2. Unzip the zip file.
3. Upload the unzipped directory to your website's plugin directory (`/wp-content/plugins/`).
4. Log into WordPress Dashboard of your website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Social Buttons`" menu item will appear in the "`Settings`" section. Click on this in order to view plugin's administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Q. Will this Plugin work on my WordPress.COM website? =
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


== Other Notes ==

"Social Media Buttons Toolbar" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is open-sourced software licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

Icon set [Social Buttons 2](https://www.iconfinder.com/iconsets/social-buttons-2) by Ivlichev Victor Petrovich and licensed under the [Creative Commons (Attribution 3.0 Unported)](http://creativecommons.org/licenses/by/3.0/).

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/social-media-buttons-toolbar)

== Changelog ==
= 2.0 =
* Some changes in design of settings page.
* Constants variables added.
* Text domain changed to "social-media-buttons-toolbar".
* Added compatibility with the translate.wordpress.org.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.
* Plugin URI changed to GitHub repository.
* Added my personal ad about freelance.
* .pot file updated.
* Russian translation updated.
= 1.5 =
* Fixed: "Notice: Undefined index: new_tab in .../social-media-buttons-toolbar.php on line 240".
= 1.4 =
* Added 6 new buttons (LiveJournal, Pinterest, Tumblr, VKontakte, Odnoklassniki, Personal website).
* Fixed: "Use of undefined constant media".
* Plugin URI changed to GitHub repository.
* Some changes in design of settings page.
* Added my personal ad about freelance.
* Some changes in design of settings page.
* .pot file updated.
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
* Added ready for translation (.pot file included).
* Added Russian translation.
= 0.3 =
* Release candidate.
= 0.2 =
* Beta version.
= 0.1 =
* Alfa version.


== Upgrade Notice ==
= 2.0 =
Please update to new release!
= 1.0 =
Please update to first stable release!
= 0.3 =
Prerelease.
= 0.2 =
Please update to beta version.
