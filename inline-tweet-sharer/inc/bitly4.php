<?php

/**
*
*/
function bitly4_shorten_a_link( $url, $domain ) {

	if ( !get_transient ( 'its_group_id' ) ) {
		$groupid = bitly4_get_group_id();
		set_transient('its_group_id', $groupid, 14 * 24 * HOUR_IN_SECONDS );
	} else {
		$groupid = get_transient( 'its_group_id' );
	}

	// Return the URL if group ID isn't present.
	if ( $groupid ) {

		$apikey   = get_option( 'inline-tweet-sharer-bitlyapikey' );

		$body = array(
			'group_guid' => $groupid,
			'domain'     => $domain,
			'long_url'   => $url
		);

		$jsonbody = json_encode( $body );

		$args = array(
			'headers' => array(
				'Authorization' => $apikey,
				'Accept'        => 'application/json',
				'Content-Type'  => 'application/json'
			),
			'body' => $jsonbody
		);

		$urlshorten = wp_remote_post( 'https://api-ssl.bitly.com/v4/shorten', $args );

		if ( is_array( $urlshorten ) ) {
			$body = $urlshorten['body']; // use the content
			$bodyarray = json_decode( $body, true );

			if ( array_key_exists( 'link', $bodyarray ) ) {
				return array( 'url' => $bodyarray['link'] );
			}
		}

	}

	// If we get all the way here, just return the URL;
	return array( 'url' => $url );

}

/**
* Get the Bitly Group ID
*
* @return mixed string for the group ID, false if empty.
*/
function bitly4_get_group_id() {
	$username = get_option( 'inline-tweet-sharer-bitlyusername' );
	$apikey   = get_option( 'inline-tweet-sharer-bitlyapikey' );

	$args = array(
		'headers' => array(
			'Authorization' => $apikey,
			'Accept'        => 'application/json',
			'Content-Type'  => 'application/json'
			)
		);

		$apiconnection = wp_remote_get( 'https://api-ssl.bitly.com/v4/user', $args );

		if ( is_array( $apiconnection ) ) {
			$body = $apiconnection['body']; // use the content
			$bodyarray = json_decode( $body, true );

			if ( array_key_exists( 'default_group_guid', $bodyarray ) ) {

				return $bodyarray['default_group_guid'];
			}
		}

		return false;
	}
