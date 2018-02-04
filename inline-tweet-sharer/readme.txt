=== Inline Tweet Sharer - Twitter Sharing Plugin  ===
Plugin Name: Inline Tweet Sharer
Plugin URI: https://www.winwar.co.uk/plugins/inline-tweet-sharer/  
Donate link: https://www.winwar.co.uk/plugins/inline-tweet-sharer/#donate 
Description: Create twitter links on your site that tweet memorable quotes in your text to help increase social media views, similar to the New York Times.
Version:      2.2
Author:       Rhys Wynne
Author URI:   https://www.winwar.co.uk/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Contributors: rhyswynne
Link: 
Tags: twitter, social media, social media marketing, social media promotion, tweet, new york times, gutenberg ready
Requires at least: 3.8
Tested up to: 4.9
Stable tag: trunk

== Description ==

Inline Tweet Sharer is a plugin that allows you to easily and simply create links to share your content on twitter. These links share whatever the anchor text is (as well as a prefix or suffix if context is needed), so it is designed to share tweetable content (like stats, quotes, titbits or competition entries) easily and quickly on twitter, hopefully encouraging people to click on said links, increasing traffic to your blog.

Links can either be highlighted as Twitter links or look the same as regular links, and there is a Rich Text Editor button you can use to click and easily add the links.

You can see an example on the [Inline Tweet Sharer Plugin page](https://www.winwar.co.uk/plugins/inline-tweet-sharer/?utm_source=description&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer).

For more information, please visit the [Inline Tweet Sharer Documentation page](https://www.winwar.co.uk/documentation/inline-tweet-sharer/?utm_source=description&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer).

== Inline Tweet Sharer Premium ==

[Inline Tweet Sharer Premium](https://www.winwar.co.uk/plugins/inline-tweet-sharer-premium/?utm_source=inline-tweet-sharer-premium&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer) is a plugin that will allow you to control and monitor your twitter messages from your blog. Features include:-

* Integration with Google Analytics - generate campaigns for your tweets and find out which ones are the most popular, or not.
* Add a data-related Twitter Account - After people share your tweets, you can encourage followers to follow you!

= Gutenberg Notes =
This plugin is compatible with Gutenberg. For ease of use, please create your tweet strings in the "Classic" Content Block.

= About Winwar Media =
This plugin is made by [**Winwar Media**](https://www.winwar.co.uk/?utm_source=aboutwinwarmedia&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer), a WordPress Development and Training Agency in Manchester, UK.

Why don't you?

* Check out our book, [bbPress Complete](https://www.winwar.co.uk/books/bbpress-complete/?utm_source=aboutwinwarmedia&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer)
* Check out our other [WordPress Plugins](https://www.winwar.co.uk/plugins/?utm_source=aboutwinwarmedia&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer), including [WP Email Capture](http://wpemailcapture.com)
* Follow us on Social Media, such as [Facebook](https://www.facebook.com/winwaruk), [Twitter](https://twitter.com/winwaruk) or [Google+](https://plus.google.com/+WinwarCoUk)
* [Send us an email](http://winwar.co.uk/contact-us/?utm_source=aboutwinwarmedia&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer)! We like hearing from plugin users.

= For Support =
We offer support in two places:-

* Support on the [WordPress.org Support Board](http://wordpress.org/support/plugin/inline-tweet-sharer)
* A [priority support forum](https://www.winwar.co.uk/priority-support/?utm_source=support&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer), which offers same-day responses.

= On Github =
This project is now on github, [you can view the repository here](https://github.com/rhyswynne/inline-tweet-sharer/). There are other versions, but this is the one I've put up, so where all the developmental will be tracked.

= Translation Credits =
The plugin has been translated to the following languages.

* Italian - [Davide De Maestri](http://www.gleenk.com/)

To contribute a translation, please [contact me](http://winwar.co.uk/contact-us/)!

== Screenshots ==
1. Example of how the twitter feed appears in your site.

== Changelog ==
= 2.2 =
* Added inline_tweet_sharer_change_tweet_string filter, allowing you to change the filter however you wish
* Change wording to "Tweet" from "Quote" in the editor section

= 2.1.2 =
* Change the hooks order, loading inlinetweetsharer_add_highlightbox_button on admin_init, allowing Gutenberg compatibility.

= 2.1.1 =
* Fixes bug by linking to the paginated post, rather than the front page.

= 2.1 = 
* Increase Tweet Length to the new 280 length
* Segmented Newsletter to seperate those who just want plugin updates, and those who want more of the newsletter.

= 2.0.2 =
* Bug fix in option fields, signup form.

= 2.0.1 =
* Bug fix in extrafields, too few fields being passed.

= 2.0 =
* Combined the dialog boxes into one dialog box.
* Restructured Plugin so it's a lot neater.
* Prepared for Inline Tweet Sharer Premium.

= 1.6.1 =
* Auto populate user email addresses to get bug fixes.
* Tweets were cutting off too soon. This has been improved.

= 1.6 =
* Introduced a sponsored feature - the ability to remove spaces before/after the prefix/suffix.
* Removed a debug error on a variable being used before being defined.

= 1.5.4 =
* Modified inclusion of js script to be included after jQuery to avoid undefined jQuery errors - props [teolaz](https://github.com/teolaz)
* Modified check string, now checks HTML encoding characters - props [Rachel Wise](https://github.com/WiseGirl)

= 1.5.3 =
* Fixed a bug to prevent it returning to the top of the page when clicked.

= 1.5.2 =
* Test in 4.3
* Changed the header to reflect the new styles.
* Added internal link tracking.

= 1.5.1 =
* Moved the "Extra Class" to the "Advanced" area.

= 1.5 =
* Added the ability to set a default prefix and suffix for the tweets.

Total Time Taken - 27 minutes

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
* **a.inline-twitter-link span** - style for the twitter logo at the end of the link.
* **a:hover.inline-twitter-link** - style for the entire link with when hovered over it.
* **a:hover.inline-twitter-link span** - style for the twitter logo at the end of the link when hovered.

== Found a Bug? ==
Any bugs found, please [contact us](http://winwar.co.uk/contact-us/?utm_source=foundabug&utm_medium=wordpressorgreadme&utm_campaign=inlinetweetsharer).
