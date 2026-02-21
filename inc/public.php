<?php
/**
 * Public facing features.
 *
 * @package Tracking_Code_For_Twitter_Pixel
 */

namespace Tracking_Code_For_Twitter_Pixel;

use function Tracking_Code_For_Twitter_Pixel\get_the_id;

add_action( 'wp_head', __NAMESPACE__ . '\tracking_script', 1 );
/**
 * Output the tracking code snippet to the frontend.
 *
 * @return void
 * @since 1.0.0
 */
function tracking_script() : void {
	$tag_id = get_the_id();

	if ( '' === $tag_id ) {
		return;
	}

	printf(
		// phpcs:disable
		'
		<!-- Twitter universal website tag code -->
		<script>!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);},s.version=\'1.1\',s.queue=[],u=t.createElement(n),u.async=!0,u.src=\'//static.ads-twitter.com/uwt.js\',a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,\'script\');twq(\'init\',\'%1$s\');twq(\'track\',\'PageView\');</script>
		<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=%1$s&p_id=Twitter" />
		</noscript>
		<!-- End Twitter universal website tag code -->
		',
		// phpcs:enable
		esc_attr( $tag_id )
	);
}
