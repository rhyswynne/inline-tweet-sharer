function inlinetweetsharer(content) {
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
    
})();