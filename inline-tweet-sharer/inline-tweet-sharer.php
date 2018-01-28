<?php
/*
Plugin Name:  Inline Tweet Sharer
Plugin URI:   https://www.winwar.co.uk/plugins/inline-tweet-sharer/?utm_source=plugin-link&utm_medium=plugin&utm_campaign=inlinetweetsharer
Description:  Create twitter links on your site that tweet the anchor text - for memorable quotes to help increase social media views, similar to the New York Times.
Version:      2.1.1
Author:       Winwar Media
Author URI:   https://www.winwar.co.uk/?utm_source=author-link&utm_medium=plugin&utm_campaign=inlinetweetsharer

*/

define( 'ITS_PLUGIN_VERSION', '2.1.1' );
define( 'ITS_PATH', dirname( __FILE__ ) );
define( 'ITS_URL', plugins_url('', __FILE__) );
define( "ITS_PLUGIN_NAME", "Inline Tweet Sharer" );
define( 'ITS_PLUGIN_TAGLINE', __( 'Create twitter links on your site that tweet the anchor text - for memorable quotes to help increase social media views, similar to the New York Times.', 'inline-tweet-sharer' ) );
define( "ITS_PLUGIN_URL", "https://www.winwar.co.uk/plugins/inline-tweet-sharer/" );
define( "ITS_EXTEND_URL", "https://wordpress.org/plugins/inline-tweet-sharer/" );
define( "ITS_AUTHOR_TWITTER", "rhyswynne" );
define( "ITS_DONATE_LINK", "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SBVM5663CHYN4" );
define( "ITS_TWEET_LENGTH", 280 );

function inline_tweet_sharer_textdomain() {
	$plugin_dir = basename( dirname( __FILE__ ) );
	load_plugin_textdomain( 'inline-tweet-sharer', false, $plugin_dir .'/languages' );
}
add_action( 'plugins_loaded', 'inline_tweet_sharer_textdomain' );

/**
 * Run this function first to make sure everything is working fine.
 *
 * - Can be overwritten by other functionality.
 * 
 * @return void
 */
function inline_tweet_sharer_plugin_launcher() {

if ( is_admin() ) { // admin actions

	add_action( 'admin_menu', 'inline_tweet_sharer_menus' );
	add_action( 'admin_init', 'inline_tweet_sharer_process' );
	add_action( 'admin_enqueue_scripts', 'inline_tweet_sharer_add_admin_stylesheet' );
	add_action( 'admin_head', 'inlinetweetsharer_add_highlightbox_button');

} else {

	add_action( 'wp_enqueue_scripts', 'inline_tweet_sharer_add_styles' );

}

add_shortcode( 'inlinetweet', 'inline_tweet_sharer_shortcode' );

} add_action( 'plugins_loaded', 'inline_tweet_sharer_plugin_launcher', 10 );

include_once ITS_PATH . '/inc/core.php';