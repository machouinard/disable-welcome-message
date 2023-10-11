<?php
/**
 * Plugin Name: Disable Block Editor Welcome Message
 * Description: Stop that awful "Welcome to the block editor" message from appearing.
 * Author: Mark Chouinard
 * Version: 1.0.1
 */

defined( 'ABSPATH' ) || die();

define( 'DWM_PATH', plugin_dir_path( __FILE__ ) );
define( 'DWM_URL', plugin_dir_url( __FILE__ ) );

add_action( 'enqueue_block_editor_assets', 'dwm_block_assets' );
function dwm_block_assets() {

	$assets = require DWM_PATH . 'build/index.asset.php';
	wp_enqueue_script( 'cf-block-js',
		DWM_URL . 'build/index.js',
		$assets['dependencies'],
		$assets['version'] );
}
