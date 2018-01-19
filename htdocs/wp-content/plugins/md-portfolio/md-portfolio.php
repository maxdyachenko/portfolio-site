<?php
/**
* Plugin Name: My portfolio plugin
* Description: This plugin adds portfolio items
* Version: 1.0.0
* License: GPL2
*/

if (!function_exists('add_action')) {
	wp_die('Not Allowed');
}
include 'md-config.php';

register_activation_hook(__FILE__, 'md_activate_plugin');
add_action('admin_menu', 'register_md_menu_page');
add_action('admin_enqueue_scripts', 'enqueue_assets');
add_action('admin_post_md_save_data', 'md_save_data');
add_action('admin_post_md_update_data', 'md_update_data');

add_shortcode('md_portfolio', 'md_portfolio_output');

include 'inc/md-activate-plugin.php';
include 'inc/md-register-page.php';
include 'inc/md-enqueue-assets.php';
include 'inc/md-manage-data.php';

include 'inc/shortcode/md-shortcode.php';

//frontend
add_action( 'wp_enqueue_scripts', 'md_assets' );

add_action( 'wp_ajax_get_portfolio', 'md_ajax_get_portfolio' );
add_action( 'wp_ajax_nopriv_get_portfolio', 'md_ajax_get_portfolio' );

add_action( 'wp_ajax_get_more_items', 'md_ajax_get_more_items' );
add_action( 'wp_ajax_nopriv_get_more_items', 'md_ajax_get_more_items' );

include 'inc/frontend/md-enqueue.php';
include 'inc/frontend/md-ajax-portfolio.php';
include 'inc/frontend/md-ajax-get-more.php';


