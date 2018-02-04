// Search for Highlight Box in new expedia theme

(function() {
	tinymce.PluginManager.add('mce_inlinetweetsharer_button', function( editor, url ) {
		editor.addButton( 'mce_inlinetweetsharer_button', {
			title: 'Add Inline Tweet',
			//icon: 'icon dashicons-lightbulb',
			onclick: function() {
				editor.windowManager.open( {
					title: 'Add Inline Tweet',
					icon: 'icon dashicons-twitter',
					body: [
					{
						type: 'textbox',
						name: 'prefix',
						label: 'Prefix for Tweet'
					},
					{
						type: 'textbox',
						name: 'user',
						label: 'User for retweet'
					},
					{
						type: 'textbox',
						name: 'suffix',
						label: 'Suffix for Tweet'
					}],
					onsubmit: function( e ) {

						var openstring 	= "";
						var content 	= editor.selection.getContent();

						if ( '' != e.data.title ) {
							openstring = '[inlinetweet prefix="' + e.data.prefix + '" tweeter="' + e.data.user + '" suffix="' + e.data.suffix + '"]';
						}

						editor.insertContent( openstring + content + "[/inlinetweet]");
					}
				});
			}
		});
	});
})();


/* (function() {
	tinymce.create('tinymce.plugins.mce_inlinetweetsharer_button', {
		init : function(ed, url){
			ed.addButton( 'mce_inlinetweetsharer_button', {
				title: 'Add Inline Tweet',
				onclick: function() {
					ed.windowManager.open( {
						title: 'Add Inline Tweet',
						icon: 'icon dashicons-twitter',
						body: [
						{
							type: 'textbox',
							name: 'prefix',
							label: 'Prefix for Quote'
						},
						{
							type: 'textbox',
							name: 'user',
							label: 'User for retweet'
						},
						{
							type: 'textbox',
							name: 'suffix',
							label: 'Suffix for Quote'
						}],
						onsubmit: function( e ) {

							var openstring 	= "";
							var content 	= ed.selection.getContent();

							if ( '' != e.data.title ) {
								openstring = '[inlinetweet prefix="' + e.data.prefix + '" tweeter="' + e.data.user + '" suffix="' + e.data.suffix + '"]';
							}

							ed.insertContent( openstring + content + "[/inlinetweet]");
						}
					});
				}
			});
		}
	});

	tinymce.PluginManager.add('mce_inlinetweetsharer_button', tinymce.plugins.mce_inlinetweetsharer_button );
})(); */
