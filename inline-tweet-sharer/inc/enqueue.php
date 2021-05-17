<?php

/**
 * Load the Admin Stylesheet, the right way.
 * @return void
 */
function inline_tweet_sharer_add_admin_stylesheet() {
	wp_register_style( 'inline-tweet-sharer-admin-style', ITS_URL . '/inline-tweet-sharer-admin.css', array(), ITS_PLUGIN_VERSION );
	wp_enqueue_style( 'inline-tweet-sharer-admin-style' );
}


/**
 * Load the Stylesheet, the right way.
 * @return void
 */
function inline_tweet_sharer_add_styles() {

	//this needs to depend on jQuery !
	wp_enqueue_script( 'inline-tweet-sharer-js', ITS_URL . '/inline-tweet-sharer.js' , array('jquery'), ITS_PLUGIN_VERSION );

	if ( "1" == get_option( 'inline-tweet-sharer-dashicons' ) ) {
		wp_enqueue_style( 'dashicons' );
	}

	if ( "1" != get_option( 'inline-tweet-sharer-disable-stylesheets' ) ) {
		wp_register_style( 'inline-tweet-sharer-style', ITS_URL . '/inline-tweet-sharer.css', array(), ITS_PLUGIN_VERSION );
		wp_enqueue_style( 'inline-tweet-sharer-style' );
	}
}