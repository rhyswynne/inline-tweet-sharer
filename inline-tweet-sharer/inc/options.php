<?php

/* THIS FUNCTION CREATES THE MENU IN THE "SETTINGS" SECTION OF WORDPRESS */
function inline_tweet_sharer_menus() {

	add_options_page( 'Inline Tweet Sharer', 'Inline Tweet Sharer', 'manage_options', 'inlinetweetshareroptions', 'inline_tweet_sharer_options' );

}

/* THIS FUNCTION CREATES THE OPTIONS PAGE WITH ALL OPTIONS */
function inline_tweet_sharer_options() {

	$current_user = wp_get_current_user();
	?>
	<div class="pea_admin_wrap">
		<div class="pea_admin_top">
			<h1><?php echo ITS_PLUGIN_NAME?> <small> - <?php echo ITS_PLUGIN_TAGLINE?></small></h1>
		</div>

		<div class="pea_admin_main_wrap">
			<div class="pea_admin_main_left">
				<div class="pea_admin_signup">
					<?php _e( 'Want to know about updates to this plugin without having to log into your site every time? Want to know about other cool plugins we\'ve made? Add your email and we\'ll add you to our very rare mail outs.', 'inline-tweet-sharer' ); ?>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="http://gospelrhys.us1.list-manage.com/subscribe/post?u=c656fe50ec16f06f152034ea9&amp;id=d9645e38c2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div class="mc-field-group">
								<label for="mce-EMAIL"> <?php _e( 'Email Address', 'inline-tweet-sharer' ); ?>
								</label>
								<input type="hidden" value="Inline Tweet Sharer" name="SIGNUP" class="" id="mce-SIGNUP">
								<input type="email" value="<?php echo $current_user->user_email; ?>" name="EMAIL" class="required email" id="mce-EMAIL" tabindex="10">
								<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="pea_admin_green"  tabindex="20">Sign Up!</button><br/>
								<label for="mce-MMERGE4">I want to Receive The Winwar Media Newsletter: </label>
								<input type="checkbox" value="yes" name="MMERGE4" class="" id="mce-MMERGE4" tabindex="15">

							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>  <div class="clear"></div>
						</form>
					</div>
					<!--End mc_embed_signup-->

				</div>

				<form method="post" action="options.php" id="options">

					<?php wp_nonce_field( 'update-options' ); ?>
					<?php settings_fields( 'inline-tweet-sharer-group' ); ?>

					<table class="form-table">
						<tbody>

							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-default"><?php _e( 'Default Twitter Handle (leave blank for none)', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="text" name="inline-tweet-sharer-default" id="inline-tweet-sharer-default" class="regular-text code" value="<?php echo esc_attr( get_option( 'inline-tweet-sharer-default' ) ); ?>" />
									<br /><?php _e( 'This is the "RT @______: section for tweets before the quoted text, leave blank for no quoted text', 'inline-tweet-sharer' ); ?>
									<br /><?php _e( 'Just place the twitter username, no @, no http://twitter.com/', 'inline-tweet-sharer' ); ?>
								</td>
							</tr>

							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-marker"><?php _e( 'Mark Twitter Links', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-marker" id="inline-tweet-sharer-marker" value="1" <?php if ( get_option( 'inline-tweet-sharer-marker' ) == 1 ) { echo "checked"; } ?> /></td>
							</tr>

							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-dashicons"><?php _e( 'Use Dashicons', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-dashicons" id="inline-tweet-sharer-dashicons" value="1" <?php if ( get_option( 'inline-tweet-sharer-dashicons' ) == 1 ) { echo "checked"; } ?> /></td>
							</tr>

							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-disable-stylesheets"><?php _e( 'Disable Stylesheets', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-disable-stylesheets" id="inline-tweet-sharer-disable-stylesheets" value="1" <?php if ( get_option( 'inline-tweet-sharer-disable-stylesheets' ) == 1 ) { echo "checked"; } ?> /></td>
							</tr>

							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-capitalise"><?php _e( 'Capitalise first letter of Tweet?', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-capitalise" id="inline-tweet-sharer-capitalise" value="1" <?php if ( get_option( 'inline-tweet-sharer-capitalise' ) == 1 ) { echo "checked"; } ?> /></td>
							</tr>

						</tbody>
					</table>

					<h3><?php _e( 'Default Options', 'inline-tweet-sharer' ); ?></h3>

					<table class="form-table">
						<tbody>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-usedefault"><?php _e( 'Use Default Prefix?', 'inline-tweet-sharer' ); ?>:</label></th>
								<td>
									<input type="checkbox" name="inline-tweet-sharer-usedefault" id="inline-tweet-sharer-usedefault" value="1" <?php checked( get_option( 'inline-tweet-sharer-usedefault' ), 1, true ); ?> />
									<br /><?php _e( 'If ticked, the prefix/suffix below will be used if not specified.', 'inline-tweet-sharer' ); ?>
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-dprefix"><?php _e( 'Default Prefix', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="text" name="inline-tweet-sharer-dprefix" id="inline-tweet-sharer-dprefix" class="regular-text code" value="<?php echo esc_attr( get_option( 'inline-tweet-sharer-dprefix' ) ); ?>" />
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-dsuffix"><?php _e( 'Default Suffix', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="text" name="inline-tweet-sharer-dsuffix" id="inline-tweet-sharer-dsuffix" class="regular-text code" value="<?php echo esc_attr( get_option( 'inline-tweet-sharer-dsuffix' ) ); ?>" />
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-removespaces"><?php _e( 'Remove Spaces between prefix/suffix and tweet?', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-removespaces" id="inline-tweet-sharer-removespaces" value="1" <?php checked( 1, get_option( 'inline-tweet-sharer-removespaces' ) ); ?>/>
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-bypassutfdecode"><?php _e( 'Bypass UTF-8 Decode', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-bypassutfdecode" id="inline-tweet-sharer-bypassutfdecode" value="1" <?php checked( 1, get_option( 'inline-tweet-sharer-bypassutfdecode' ) ); ?>/>
								<br /><?php _e( 'Tick this box if you use languages such as Arabic, Hebrew, non western characters, or characters with accents or mutations.', 'inline-tweet-sharer' ); ?>
								</td>
							</tr>
						</tbody>
					</table>

					<h3><?php _e( 'Advanced Options', 'inline-tweet-sharer' ); ?></h3>
					<table class="form-table">
						<tbody>
					<p><?php _e( 'To connect your bit.ly account you need a Generic Access Token.', 'inline-tweet-sharer' ); ?></p>
					<p><strong><?php _e( 'To get your Generic Access Token:-', 'inline-tweet-sharer' ); ?></strong></p>
					<ol>
						<li><?php _e( 'Go to ', 'inline-tweet-sharer' ); ?> <a href="https://bitly.com/">https://bitly.com/</a></li>
						<li><?php _e( 'Click the hamburger menu in the top right hand corner to access your profile ', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Click on your username/email that when the menu pops out.', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Click on "Set Default API Group"', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Make sure it is set and click "save"', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Click on "Generic Access Token".', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Re-enter your password and then click "Generate Token"', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Add your Bitly Username Below.', 'inline-tweet-sharer' ); ?></li>
						<li><?php _e( 'Add your Generic Access Token Below.', 'inline-tweet-sharer' ); ?></li>
					</ol>
					<table class="form-table">
						<tbody>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-bitly"><?php _e( 'Enable Bitly Integration', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="checkbox" name="inline-tweet-sharer-bitly" id="inline-tweet-sharer-bitly" value="1" <?php if ( get_option( 'inline-tweet-sharer-bitly' ) == 1 ) { echo "checked"; } ?> /></td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-bitlyusername"><?php _e( 'Your Bitly Username', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="text" name="inline-tweet-sharer-bitlyusername" id="inline-tweet-sharer-bitlyusername" class="regular-text code" value="<?php echo esc_attr( get_option( 'inline-tweet-sharer-bitlyusername' ) ); ?>" />
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-bitlyapikey"><?php _e( 'Your Generic Access Token', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="text" name="inline-tweet-sharer-bitlyapikey" id="inline-tweet-sharer-bitlyapikey" class="regular-text code" value="<?php echo esc_attr(  get_option( 'inline-tweet-sharer-bitlyapikey' ) ); ?>" />
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-urlshortened"><?php _e( 'Enter Your Shortened URL', 'inline-tweet-sharer' ); ?>:</label></th>
								<td>
									<select name="inline-tweet-sharer-urlshortened" id="inline-tweet-sharer-urlshortened">
										<option value="bit.ly" <?php if ( "bit.ly" == get_option( 'inline-tweet-sharer-urlshortened' ) ) { echo "selected"; } ?>>bit.ly</option>
										<option value="bitly.com" <?php if ( "bitly.com" == get_option( 'inline-tweet-sharer-urlshortened' ) ) { echo "selected"; } ?>>bitly.com</option>
										<option value="j.mp" <?php if ( "j.mp" == get_option( 'inline-tweet-sharer-urlshortened' ) ) { echo "selected"; } ?>>j.mp</option>
									</select>
								</td>
							</tr>
							<tr valign="top">
								<th scope="row" style="width:400px"><label for="inline-tweet-sharer-extraclass"><?php _e( 'Added class for the wrapper div (advanced)', 'inline-tweet-sharer' ); ?>:</label></th>
								<td><input type="text" name="inline-tweet-sharer-extraclass" id="inline-tweet-sharer-extraclass" class="regular-text code" value="<?php echo esc_attr( get_option( 'inline-tweet-sharer-extraclass' ) ); ?>" />
									<br /><?php _e( 'Use this to add an extra class to the wrapper, use this to control what your tweet link looks like.', 'inline-tweet-sharer' ); ?>
								</td>
							</tr>
						</tbody>
					</table>

					<?php do_action('inline_tweet_sharer_additional_options' ); ?>

					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="page_options" value="inline-tweet-sharer-default" />

					<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'inline-tweet-sharer' ); ?>" /></p>

				</form>

			</div>
		</div>

		<div class="pea_admin_main_right">
			<?php if ( !defined( 'INLINE_TWEET_SHARER_HIDE_AD' ) ) { ?>

			<div class="pea_admin_box inline_tweet_sharer_admin_box">
				<h2><?php _e( 'Inline Tweet Sharer Premium', 'inline-tweet-sharer' ); ?></h2>

				<p class="pea_admin_clear"><?php _e( 'Want more features? Inline Tweet Sharer has a premium version, that allows you to do the following:-', 'inline-tweet-sharer' ); ?></p>

				<ul>
					<li><strong><?php _e( 'Google Analytics Tracking', 'inline-tweet-sharer' ); ?>:</strong> <?php _e( 'Track each of your tweets in Google Analytics, find out which are successful, and which are not!', 'inline-tweet-sharer' ); ?></li>
					<li><strong><?php _e( 'Add Related Followers', 'inline-tweet-sharer' ); ?>:</strong> <?php _e( 'Encourage your tweeters to follow you with added related information after you tweet.', 'inline-tweet-sharer' ); ?></li>
				</ul>

				<p class="pea_admin_clear"><?php _e( 'To get a 10% off discount, use the discount code ', 'inline-tweet-sharer' ); ?><strong>10FREE</strong>.</p>

				<p class="pea_admin_clear text-center"><a href="https://www.winwar.co.uk/plugins/inline-tweet-sharer-premium/?utm_source=options-page&utm_medium=plugin&utm_campaign=inlinetweetsharer"><button class="pea_admin_green"><?php _e( 'Buy Inline Tweet Sharer Premium', 'inline-tweet-sharer' ); ?></button></a></p>

			</div>

			<?php } ?>

			<div class="pea_admin_box">

				<h2><?php _e( 'Like this Plugin?', 'inline-tweet-sharer' ); ?></h2>
				<a href="<?php echo ITS_EXTEND_URL; ?>" target="_blank"><button type="submit" class="pea_admin_green"><?php _e( 'Rate this plugin', 'inline-tweet-sharer' ); ?> &#9733; &#9733; &#9733; &#9733; &#9733;</button></a><br><br>

				<div id="fb-root"></div>

				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=181590835206577";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

			<div class="fb-like" data-href="<?php echo ITS_PLUGIN_URL; ?>" data-send="true" data-layout="button_count" data-width="250" data-show-faces="true"></div>
			<br>
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo ITS_PLUGIN_URL; ?>" data-text="Just been using <?php echo ITS_PLUGIN_NAME; ?> #WordPress plugin" data-via="<?php echo ITS_AUTHOR_TWITTER; ?>" data-related="WPBrewers">Tweet</a>

			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			<br>
			<a href="https://bufferapp.com/add" class="buffer-add-button" data-text="Just been using <?php echo ITS_PLUGIN_NAME; ?> #WordPress plugin" data-url="<?php echo ITS_PLUGIN_URL; ?>" data-count="horizontal" data-via="<?php echo ITS_AUTHOR_TWITTER; ?>">Buffer</a><script type="text/javascript" src="https://static.bufferapp.com/js/button.js"></script>


		</div>

		<div class="pea_admin_box">
			<h2><?php _e( 'About the Author', 'inline-tweet-sharer' ); ?></h2>

			<?php
			$default = "http://reviews.evanscycles.com/static/0924-en_gb/noAvatar.gif";
			$size = 70;
			$rhys_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( "rhys@rhyswynne.co.uk" ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
			?>

			<p class="pea_admin_clear"><img class="pea_admin_fl" src="<?php echo $rhys_url; ?>" alt="Rhys Wynne" /> <h3>Rhys Wynne</h3><br><a href="https://twitter.com/rhyswynne" class="twitter-follow-button" data-show-count="false">Follow @rhyswynne</a>
				<div class="fb-subscribe" data-href="https://www.facebook.com/rhysywynne" data-layout="button_count" data-show-faces="false" data-width="220"></div>
			</p>

			<p class="pea_admin_clear"><?php _e( 'Rhys Wynne is a Digital Marketing Consultant currently at FireCask and a freelance WordPress developer and blogger. His plugins have had a total of 100,000 downloads, and his premium plugins have generated four figure sums in terms of sales. Rhys likes rubbish football (supporting Colwyn Bay FC) and Professional Wrestling.', 'inline-tweet-sharer' ); ?></p>

		</div>

	</div>
</div>

<?php

}

/* THIS FUNCTION SAVES THE OPTIONS FROM THE PREVIOUS FUNCTION */
function inline_tweet_sharer_process() { // whitelist options

	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-default' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-marker' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-dashicons' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-capitalise' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-extraclass' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-usedefault' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-dprefix' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-dsuffix' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-removespaces' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-bypassutfdecode' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-bitly' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-bitlyusername' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-bitlyapikey' );
	/* register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-bitly-client-id' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-bitly-client-secret' ); */
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-urlshortened' );
	register_setting( 'inline-tweet-sharer-group', 'inline-tweet-sharer-disable-stylesheets' );

	do_action( 'inline_tweet_sharer_additional_save_options' );
}