<?php

/* THIS FUNCTION ADDS A BUTTON TO WORDPRESS' TINYMCE TO SHOW THE TWITTER BUTTON AND ALLOWERS USERS TO CLICK TO ADD THE SHORTCODE */
function inline_tweet_sharer_addbuttons() {
    // Don't bother doing this stuff if the current user lacks permissions
    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) )
        return;

    // Add only in Rich Editor mode
    if ( get_user_option( 'rich_editing' ) == 'true' ) {

        add_filter( "mce_external_plugins", "inline_tweet_sharer_tinymce_plugin" );
        add_filter( 'mce_buttons', 'inline_tweet_sharer_button' );
    }
}

/* THIS FUNCTION ACTUALLY ADDS THE BUTTON */
function inline_tweet_sharer_button( $buttons ) {
    array_push( $buttons, "separator", "inlinetweetsharer" );
    return $buttons;
}

// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function inline_tweet_sharer_tinymce_plugin( $plugin_array ) {
    $url = plugins_url( '/editor_plugin.js' , __FILE__ );
    $plugin_array['inlinetweetsharer'] = $url;
    return $plugin_array;
}

// init process for button control
//add_action( 'init', 'inline_tweet_sharer_addbuttons' );