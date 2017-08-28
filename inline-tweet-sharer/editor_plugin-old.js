/* function inlinetweetsharer(content) {
    var prefix = prompt("Prefix for Quote", "");
	var tweeter = prompt("User for retweet", "");
    var suffix = prompt("Suffix for Quote", "");
	inpost = '[inlinetweet prefix="' + prefix + '" tweeter="' + tweeter + '" suffix="' + suffix + '"]' + content + '[/inlinetweet]';
    return inpost;
}

(function() {

    tinymce.create('tinymce.plugins.inlinetweetsharer', {

        init : function(ed, url){
            ed.addButton('inlinetweetsharer', {
                title : 'Insert tweetable link',
                onclick : function() {
                    ed.execCommand(
                        'mceInsertContent',
                        false,
                        inlinetweetsharer(ed.selection.getContent())
                        );
                },
                //image: url + "/twitter.png"
            });
        },

        getInfo : function() {
            return {
                longname : 'Contnet Mage plugin',
                author : 'Grzegorz Winiarski',
                authorurl : 'http://ditio.net',
                infourl : '',
                version : "1.0"
            };
        }
    });

    tinymce.PluginManager.add('inlinetweetsharer', tinymce.plugins.inlinetweetsharer);
    
})(); */





/*
( function() {

    // Register plugin
    tinymce.create( 'tinymce.plugins.inlinetweetsharer', {

        init: function( editor, url )  {

            // Add the Insert Gistpen button
            editor.addButton( 'inlinetweetsharer', {
                title : 'Insert tweetable link',
                cmd: 'inlinetweetsharer_command'
            });

            // Called when we click the Insert Gistpen button
            editor.addCommand( 'inlinetweetsharer_command', function() {
                // Calls the pop-up modal
                editor.windowManager.open({
                    // Modal settings
                    title: 'Insert Tweetable Link',
                    width: jQuery( window ).width() * 0.7,
                    // minus head and foot of dialog box
                    height: (jQuery( window ).height() - 36 - 50) * 0.7,
                    inline: 1,
                    id: 'inline_tweet_sharer',
                    buttons: [{
                        text: 'Insert',
                        id: 'plugin-slug-button-insert',
                        class: 'insert',
                        onclick: function( e ) {
                            inlinetweetsharer();
                        },
                    },
                    {
                        text: 'Cancel',
                        id: 'inline-tweet-sharer-cancel',
                        onclick: 'close'
                    }],
                });

                appendInsertDialog();

            });

        }

    });

    tinymce.PluginManager.add( 'inlinetweetsharer', tinymce.plugins.inlinetweetsharer );

    function appendInsertDialog () {
        var dialogBody = jQuery( '#inlinetweetsharer-body' ).append( 'Loading...' );

        // Get the form template from WordPress
        jQuery.post( ajaxurl, {
            action: 'plugin_slug_insert_dialog'
        }, function( response ) {
            template = response;

            dialogBody.children( '.loading' ).remove();
            dialogBody.append( template );
            jQuery( '.spinner' ).hide();
        });
    }
})(); */