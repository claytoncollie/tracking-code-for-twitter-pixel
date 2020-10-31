# Tracking Code For Pinterest Pixel

Tracking Code For Pinterest Pixel is a simple, lightweight WordPress plugin for inserting your Pinterest Pixel Universal Analytics tracking code. The plugin does one thing and one thing only; prints the standard Pinterest Pixel tacking script to the `<head>` of your website. To insert your measurement ID, navigate to Settings > General and then scroll to the bottom of the page.

This plugin will not work with Pinterest Pixel 4; only the Universal Analytics version. 

### Getting Started

1. Upload `tracking-code-for-pinterest-pixel` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to Settings > General > scroll to the bottom of the page
4. Insert your measurement ID
5. Save your changes

### Composer

`composer require claytoncollie/tracking-code-for-pinterest-pixel`

### Filters

If you want to set the measurement ID without using the wp-admin user interface, use the filter below.

```php
add_filter(
	'tracking_code_for_pinterest_pixel_id',
	/**
	 * Set Pinterest Pixel measurement ID.
	 *
	 * @param string $measurement_id Measurement ID.
	 *
	 * @return string
	 */
	function ( $measurement_id ) {
		return 'UA-7654321';
	}
);
```

### Frequently Asked Questions

##### Why did you build this plugin?

The plugins I have used in the past to solve this problem have too many features for my liking. This plugin is comprised two functions. One for registering a settings field on the Options General page. And another for printing the tracking code to the frontend. I want a lightweight solution for the websites that I build without all of the extra bells and whistles. If you are expecting this plugin to do more or grow in the future, please do not use it.

##### Where is the tracking code inserted?

The tracking code is inserted into the `<head>` section.

##### Will this plugin slow down my website?

No. This plugin is intentionally lightweight. All it does is register a settings field, saves to the database, and then inserts the tracking code. Nothing more.

##### I found a bug. How do I report it?

https://github.com/claytoncollie/tracking-code-for-pinterest-pixel/issues

##### Can I use this plugin with Composer?

https://packagist.org/packages/claytoncollie/tracking-code-for-pinterest-pixel
