<?php

/**
 * Wrapper to add the Highlight Box Button. Checks if the user can actually the user can use the button.
 * 
 * @return void
 */
function inlinetweetsharer_add_highlightbox_button() {
    global $typenow;
    
    // check user permissions
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
        return;
    }
    
    // verify the post type
    /* if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return; */
    
    // check if WYSIWYG is enabled
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "inlinetweetshaer_add_tweet_tinymce_plugin");
        add_filter('mce_buttons', 'inlinetweetshaer_register_tweet_button');
    }
}


/**
 * Adds the button JS in the correct place
 * 
 * @param  array        $plugin_array       All current plugins and the JS associated with it
 * @return array                            All the plugins with the added highlight button
 */
function inlinetweetshaer_add_tweet_tinymce_plugin( $plugin_array ) {
    $url = ITS_URL . '/editor_plugin.js';
    $plugin_array['mce_inlinetweetsharer_button'] = $url;
    return $plugin_array;
}


/**
 * Actually adds the button to the editor
 * 
 * @param  array    $buttons        All current buttons
 * @return array                    All buttons, with the highlightbox button
 */
function inlinetweetshaer_register_tweet_button( $buttons ) {
   array_push($buttons, "mce_inlinetweetsharer_button");
   return $buttons;
}