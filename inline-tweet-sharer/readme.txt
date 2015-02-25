=== Plugin Name ===
Plugin Name:  Inline Tweet Sharer
Plugin URI: http://winwar.co.uk/plugins/inline-tweet-sharer/  
Donate link: http://winwar.co.uk/plugins/inline-tweet-sharer/#donate 
Description: Create twitter links on your site that tweet memorable quotes in your text to help increase social media views, similar to the New York Times.
Version:      1.5
Author:       Rhys Wynne
Author URI:   http://winwar.co.uk/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Contributors: rhyswynne
Link: 
Tags: twitter, social media, social media marketing, social media promotion, tweet, new york times
Requires at least: 3.8
Tested up to: 4.1
Stable tag: 1.5

== Description ==

Inline Tweet Sharer is a plugin that allows you to easily and simply create links to share your content on twitter. These links share whatever the anchor text is (as well as a prefix or suffix if context is needed), so it is designed to share tweetable content (like stats, quotes, titbits or competition entries) easily and quickly on twitter, hopefully encouraging people to click on said links, increasing traffic to your blog.

Links can either be highlighted as Twitter links or look the same as regular links, and there is a Rich Text Editor button you can use to click and easily add the links.

You can see an example on the [Inline Tweet Sharer Plugin page](http://winwar.co.uk/plugins/inline-tweet-sharer/).

For more information, please visit the [Inline Tweet Sharer Documentation page](http://winwar.co.uk/documentation/inline-tweet-sharer/).

= Translation Credits =
The plugin has been translated to the following languages.

* Italian - [Davide De Maestri](http://www.gleenk.com/)

To contribute a translation, please [contact me](http://winwar.co.uk/contact-us/)!

= About Winwar Media =
This plugin is made by [**Winwar Media**](http://winwar.co.uk/), a WordPress Development and Training Agency in Manchester, UK.

Why don't you?

* Check out our book, [bbPress Complete](http://winwar.co.uk/books/bbpress-complete/)
* Check out our other [WordPress Plugins](http://winwar.co.uk/plugins/), including [WP Email Capture](http://wpemailcapture.com)
* Follow us on Social Media, such as [Facebook](https://www.facebook.com/winwaruk), [Twitter](https://twitter.com/winwaruk) or [Google+](https://plus.google.com/+WinwarCoUk)
* [Send us an email](http://winwar.co.uk/contact-us/)! We like hearing from plugin users.

= For Support =
We offer support in two places:-

* Support on the [WordPress.org Support Board](http://wordpress.org/support/plugin/inline-tweet-sharer)
* A [priority support forum](http://winwar.co.uk/priority-support/), which offers same-day responses.

= On Github =
This project is now on github, [you can view the repository here](https://github.com/rhyswynne/inline-tweet-sharer/). There are other versions, but this is the one I've put up, so where all the developmental will be tracked.

== Screenshots ==
1. Example of how the twitter feed appears in your site.

== Changelog ==
= 1.5 =
* Added the ability to set a default prefix and suffix for the tweets.

Total Time Taken - 23 minutes

= 1.4.5 =
* Fixed WP_DEBUG notices in the back end - calling has_cap with a proper capability, rather than by user level.
* Fixed WP_DEBUG notices in the front end - calling the script enqueuing in the correct place, rather than at init.
* Called admin_enqueue_scripts to enqueue the scripts, rather than using admin_init
* Added blank variables for Prefix/Suffix/Tweeter to stop the "Underfined Variable" notice in WP_DEBUG.

Total Time Taken - 23 minutes

= 1.4.4 =
* Changed version number of admin CSS as people were having issues with it updating.

= 1.4.3 =
* Fix to Dashicons for WordPress 3.9 (post TinyMCE 4.0).

= 1.4.2 =
* Fixed Dashicons in admin to be compatible with 3.9

= 1.4.1 =
* Fixed a few display issues that made Inline Tweet Sharer not, well, inline when using dashicons.

= 1.4 =
* Integrated dashicons so WordPress v3.8+ dashboards look cleaner.
* Added the option to use dashicons on the tweets on the front end.

= 1.3 =
* Added bit.ly Integration.

= 1.2.1 =
* Bug fix so that special characters are encoded in the URL.
* Tested with WordPress 3.8

= 1.2.0 =
* Added an extra option where you can create a wrapper div around the tweet. Use this to make the Inline Tweet Sharer not inline :). 

= 1.1.0 =
* Added Internationalisation.
* Added an Italian Translation - thanks [Davide De Maestri](http://www.gleenk.com/).

= 1.0.7.1 & 1.0.7.2 =
* Fixed a spelling mistake in the readme file :)

= 1.0.7 =
* Fixed a bug when people clicked "Cancel" the word "null" was shared. 

= 1.0.6.1 =
* Spelling mistake in the readme.txt affected the look of the wordpress.org listing. 

= 1.0.6 =
* Bug fix that strips the HTML tags for tweeted text
* Bug fix that removes @'s should users put in extra @'s.

= 1.0.5 =
* Updated Stable tag so it works. Whoops! Sorry guys!

= 1.0.4 =
* Added an option to "Capitalise" the first letter of the tweet.
* Fixed a bug that so now the "Default" twitter handle can be used.

= 1.0.3 =
* Add a title attribute to the link.

= 1.0.2 =
* Fixed an error in the options page that displayed the wrong plugin title should you have one or more plugins installed of mine.

= 1.0.1 =
* Fixed a small bug in the readme file.

= 1.0 =
* First Release

== Installation ==

To install, please do the following:-

1. Upload the plugin to the `/wp-content/plugins/` directory or use the Add New feature
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Decide on the look of the links in the Settings > Inline Tweet Sharer menu.

== CSS Help ==
The CSS classes for the plugin are the following:-

* **a.inline-twitter-link** - style for the entire link.
* **a.inline-twitter-link span** – style for the twitter logo at the end of the link.
* **a:hover.inline-twitter-link** – style for the entire link with when hovered over it.
* **a:hover.inline-twitter-link span** - style for the twitter logo at the end of the link when hovered.

== Found a Bug? ==
Any bugs found, please [contact us](http://winwar.co.uk/contact-us/).
