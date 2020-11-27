<?php
/**
 * Admin facing features.
 *
 * @package Tracking_Code_For_Twitter_Pixel
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'admin_init', 'tracking_code_for_twitter_pixel_add_settings_field', 10, 0 );
/**
 * Register the settings field for the tag ID.
 *
 * @return void
 * @since 1.0.0
 */
function tracking_code_for_twitter_pixel_add_settings_field() {
	add_settings_field(
		'tracking_code_for_twitter_pixel_id_field',
		esc_html__( 'Twitter Pixel', 'tracking-code-for-twitter-pixel' ),
		'tracking_code_for_twitter_pixel_text_settings_field',
		'general',
		'default',
		array(
			'id'          => 'tracking-code-for-twitter-pixel',
			'name'        => 'tracking_code_for_twitter_pixel',
			'value'       => get_option( 'tracking_code_for_twitter_pixel', '' ),
			'description' => esc_html__( 'Enter your Twitter Pixel tag ID eg. 123456789', 'tracking-code-for-twitter-pixel' ),
		)
	);

	register_setting(
		'general',
		'tracking_code_for_twitter_pixel',
		array(
			'type'              => 'string',
			'description'       => esc_html__( 'Twitter Pixel tag ID', 'tracking-code-for-twitter-pixel' ),
			'sanitize_callback' => 'sanitize_text_field',
			'show_in_rest'      => true,
			'default'           => '',
		)
	);
}

/**
 * Text field for tag ID.
 *
 * @param array $args The field settings.
 * @return void
 * @since 1.0.0
 */
function tracking_code_for_twitter_pixel_text_settings_field( $args ) {
	$args = wp_parse_args(
		$args,
		array(
			'id'          => '',
			'name'        => '',
			'value'       => '',
			'description' => '',
		)
	);

	printf(
		'<input type="text" id="%1$s" name="%1$s" value="%2$s" aria-describedby="%3$s-description" class="regular-text ltr" /><p class="description" id="%3$s-description">%4$s</p>',
		esc_attr( $args['name'] ),
		esc_attr( $args['value'] ),
		esc_attr( $args['id'] ),
		esc_html( $args['description'] )
	);
}
