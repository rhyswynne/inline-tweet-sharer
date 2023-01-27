<?php

function inline_tweet_sharer_shortcode( $atts, $content = null ) {
	$tweeter = get_option( 'inline-tweet-sharer-default' );

	$prefix = "";
	$suffix = "";
	$tweeter = "";
	$removespaces = get_option( 'inline-tweet-sharer-removespaces' );


	extract( shortcode_atts( array(
		'prefix' => $prefix,
		'tweeter' => $tweeter,
		'suffix' => $suffix,
		'removespaces' => $removespaces
		), $atts ) );

	$tweetlink = inline_tweet_sharer_create_tweet( esc_attr( $prefix ), esc_attr( $tweeter ), esc_attr( $suffix ), esc_attr( $removespaces ), $content );

	return $tweetlink;
}

function inline_tweet_sharer_create_tweet( $prefix = "", $tweeter = "", $suffix = "", $removespaces = false, $content = "", $linktotweet = "", $extrafields = "")
{

    $tweetlinkstring = "";

    if ($removespaces) {
        $spacestring = "";
    } else {
        $spacestring = " ";
    }

    if (!$linktotweet) {
        $linktotweet = get_pagenum_link();
    }

    if ("1" == get_option('inline-tweet-sharer-bitly')) {
        $urlshortener = get_option('inline-tweet-sharer-urlshortened');
        if (!$urlshortener) {
            $urlshortener = "bit.ly";
        }
        $results   = bitly4_shorten_a_link($linktotweet, $urlshortener);
        $permalink = $results['url'];
    } else {
        $permalink = $linktotweet;
    }

    if ("" != $prefix && "null" != $prefix) {
        $tweetlinkstring .= $prefix . $spacestring;
    } elseif ("" != $tweeter && "null" != $tweeter) {
        $tweeter = str_replace("@", "", $tweeter);
        $tweetlinkstring .= "RT @" . $tweeter . ": ";
    } elseif ("" != get_option('inline-tweet-sharer-default')) {
        $tweeter = get_option('inline-tweet-sharer-default');
        $tweeter = str_replace("@", "", $tweeter);
        $tweetlinkstring .= "RT @" . $tweeter . ": ";
    } elseif (1 == get_option('inline-tweet-sharer-usedefault')) {
        $prefix = get_option('inline-tweet-sharer-dprefix');
        $tweetlinkstring .= $prefix . $spacestring;
    }

    $content = strip_tags($content);
    $tweetlinkstring .= $content . $spacestring;

    if ("" != $suffix && "null" != $suffix) {
        $tweetlinkstring .= $suffix;
    } elseif (1 == get_option('inline-tweet-sharer-usedefault')) {
        $prefix = get_option('inline-tweet-sharer-dsuffix');
        $tweetlinkstring .= $prefix . $spacestring;
    }


    /**
     * Filter inline_tweet_sharer_change_tweet_string
     *
     * Changes the tweet string to whatever you wish.
     *
     * @var string
     */
    $tweetlinkstring = apply_filters('inline_tweet_sharer_change_tweet_string', $tweetlinkstring);

    $bypassutfdecode = get_option('inline-tweet-sharer-bypassutfdecode');

    if (!$bypassutfdecode) {
        if (function_exists('utf8_decode')) {
            $tweetlinkstring = utf8_decode($tweetlinkstring);
        }
    }



    if ((strlen($tweetlinkstring) + 24) > ITS_TWEET_LENGTH) {
        $tweetlinkstring = substr($tweetlinkstring, 0, (ITS_TWEET_LENGTH - (strlen($tweetlinkstring) + 25)));
        $tweetlinkstring = preg_replace('/ [^ ]*$/', '...', $tweetlinkstring);
    }

    if ("1" == get_option('inline-tweet-sharer-capitalise')) {
        $tweetlinkstring = ucfirst($tweetlinkstring);
    }

    $tweetlinkstring = urlencode(html_entity_decode($tweetlinkstring, ENT_COMPAT, get_bloginfo('charset')));

    $extraclass = get_option('inline-tweet-sharer-extraclass');

    if ($extraclass) {
        $extraclass = '<div class="' . $extraclass . '">';
    }

    $link = $extraclass . '<a class="';

    if ("1" == get_option('inline-tweet-sharer-marker')) {
        $link .= 'inline-twitter-link';
    }

    $url = 'https://twitter.com/intent/tweet?url=' . urlencode($permalink) . '&text=' . $tweetlinkstring . $extrafields;
    $url = str_replace(array("\n", "\r"), "", $url);
    $url = str_replace(array("/"), "\/", $url);

    $link .= ' inline-tweet-click" href="#" onclick="inline_tweet_sharer_open_win(\'' . $url . '\');"';
    //$link .= ' href="#" onclick="window.open(\''.$url.'\',\'tweetwindow\',\'width=566,height=592,location=yes,directories=no,channelmode=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no\')"';
    $link .= ' title="' . __('Tweet This!', 'inline-tweet-sharer') . '">' . $content;

    if ("1" == get_option('inline-tweet-sharer-marker')) {
        if ("1" == get_option('inline-tweet-sharer-dashicons')) {
            $link .= ' <span class="dashicons dashicons-twitter dashicons-inline-tweet-sharer"></span>';
        } else {
            $link .= ' <span class="non-dashicons"> </span>';
        }
    }

    $link .= "</a>";

    if ($extraclass) {
        $link .= "</div>";
    }

    return $link;
}
