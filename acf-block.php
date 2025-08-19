<?php
/**
 * Plugin Name:       ACF Block
 * Description:       A plugin to register custom ACF blocks.
 * Version:           1.0.0
 * Author:            MG
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       acf-block
 *
 * @package           mg
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom ACF blocks.
 */
function custom_acf_block_init() {
	if ( function_exists( 'register_block_type' ) ) {

		register_block_type( __DIR__ . '/blocks/promo-section' );
	}
}
add_action( 'init', 'custom_acf_block_init' );

/**
 * Enqueue global plugin assets.
 */
function custom_acf_block_enqueue_assets() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style(
        'custom-acf-block-main-styles',
        $plugin_url . 'assets/css/main.css',
        [],
        '1.0.0'
    );

    // Single entrypoint: promo-section CSS contains merged styles (card/header)
}
add_action( 'enqueue_block_assets', 'custom_acf_block_enqueue_assets' );

/**
 * Add local JSON load point for ACF.
 */
add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = plugin_dir_path(__FILE__) . 'blocks/promo-section';
    return $paths;
});