<?php
/**
 * Get the tracking ID.
 *
 * @package Tracking_Code_For_Twitter_Pixel
 */

namespace Tracking_Code_For_Twitter_Pixel;

use const Tracking_Code_For_Twitter_Pixel\CONFIG_NAME;
use const Tracking_Code_For_Twitter_Pixel\FILTER_NAME;
use const Tracking_Code_For_Twitter_Pixel\OPTION_NAME;

/**
 * Get the tracking ID.
 *
 * @return string
 * @since 2.0.0
 */
function get_the_id() : string {
	/**
	 * Define the tracking ID in your wp-config file.
	 *
	 * @see https://www.wpbeginner.com/glossary/wp-config-php/
	 *
	 * @since 2.0.0
	 */
	if ( defined( CONFIG_NAME ) ) {
		return \TRACKING_CODE_FOR_TWITTER_PIXEL_ID;
	}

	/**
	 * Define the tracking ID with a filter.
	 *
	 * @param string $tag_id The Twitter Pixel tag ID.
	 *
	 * @return string
	 *
	 * @since 1.0.0
	 */
	if ( has_filter( FILTER_NAME ) ) {
		return (string) apply_filters( FILTER_NAME, '' );
	}

	/**
	 * If we are not defining the tracking ID with a definition in our wp-config file,
	 * and we are not defining the tracking ID with a PHP filter,
	 * then we will query the tracking ID from the database.
	 *
	 * @since 1.0.0
	 */
	return (string) get_option( OPTION_NAME, '' );
}
