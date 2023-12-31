<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Razia
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses razia_header_style()
 */
function razia_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'razia_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '343434',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'razia_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'razia_custom_header_setup' );

if ( ! function_exists( 'razia_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see razia_custom_header_setup().
	 */
	function razia_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}
	}
endif;
