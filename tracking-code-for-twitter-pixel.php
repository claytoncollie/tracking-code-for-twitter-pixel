<?php
/**
 * Plugin Name:     Tracking Code For Twitter Pixel
 * Plugin URI:      https://github.com/claytoncollie/tracking-code-for-twitter-pixel
 * Description:     Simple, lightweight solution for inserting your Twitter Pixel.
 * Author:          Clayton Collie
 * Author URI:      https://github.com/claytoncollie
 * Text Domain:     tracking-code-for-twitter-pixel
 * Version:         1.0.0
 *
 * @package         Tracking_Code_For_Twitter_Pixel
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/inc/admin.php';
require_once __DIR__ . '/inc/public.php';
