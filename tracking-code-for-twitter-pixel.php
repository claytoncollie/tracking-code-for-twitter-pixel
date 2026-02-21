<?php
/**
 * Plugin Name:     Tracking Code For Twitter Pixel
 * Plugin URI:      https://github.com/claytoncollie/tracking-code-for-twitter-pixel
 * Description:     Simple, lightweight solution for inserting your X (formerly Twitter) Pixel.
 * Author:          Clayton Collie
 * Author URI:      https://github.com/claytoncollie
 * Text Domain:     tracking-code-for-twitter-pixel
 * Version:         2.0.0
 *
 * @package         Tracking_Code_For_Twitter_Pixel
 */

namespace Tracking_Code_For_Twitter_Pixel;

const OPTION_NAME = 'tracking_code_for_twitter_pixel';
const FILTER_NAME = 'tracking_code_for_twitter_pixel_id';
const CONFIG_NAME = 'TRACKING_CODE_FOR_TWITTER_PIXEL_ID';

require_once __DIR__ . '/inc/tracking-id.php';
require_once __DIR__ . '/inc/admin.php';
require_once __DIR__ . '/inc/public.php';
