<?php
/**
 * Book My Guitar back compat functionality
 *
 * Prevents Book My Guitar from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Book My Guitar 1.0
 */

/**
 * Prevent switching to Book My Guitar on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Book My Guitar 1.0
 */
function bookmyguitar_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'bookmyguitar_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bookmyguitar_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Book My Guitar on WordPress versions prior to 3.6.
 *
 * @since Book My Guitar 1.0
 */
function bookmyguitar_upgrade_notice() {
	$message = sprintf( __( 'Book My Guitar requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'bookmyguitar' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Book My Guitar 1.0
 */
function bookmyguitar_customize() {
	wp_die( sprintf( __( 'Book My Guitar requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'bookmyguitar' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'bookmyguitar_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Book My Guitar 1.0
 */
function bookmyguitar_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Book My Guitar requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'bookmyguitar' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'bookmyguitar_preview' );
