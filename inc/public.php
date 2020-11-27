<?php
/**
 * Public facing features.
 *
 * @package Tracking_Code_For_Twitter_Pixel
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_head', 'tracking_code_for_twitter_pixel_do_the_script', 1, 0 );
/**
 * Output the tracking code snippet to the frontend.
 *
 * @return void
 * @since 1.0.0
 */
function tracking_code_for_twitter_pixel_do_the_script() {
	/**
	 * Filter the tag_id variable to support other methods of setting this value.
	 *
	 * @param string $tag_id The Twitter Pixel tag ID.
	 * @return string
	 * @since 1.0.0
	 */
	$tag_id = apply_filters( 'tracking_code_for_twitter_pixel_id', get_option( 'tracking_code_for_twitter_pixel', '' ) );

	if ( '' === $tag_id ) {
		return;
	}

	printf(
		// phpcs:disable
		'
		<!-- Twitter universal website tag code -->
		<script>!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);},s.version=\'1.1\',s.queue=[],u=t.createElement(n),u.async=!0,u.src=\'//static.ads-twitter.com/uwt.js\',a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,\'script\');twq(\'init\',\'%1$s\');twq(\'track\',\'PageView\');</script>
		<!-- End Twitter universal website tag code -->
		',
		// phpcs:enable
		esc_attr( $tag_id )
	);
}
