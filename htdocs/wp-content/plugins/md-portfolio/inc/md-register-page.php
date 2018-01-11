<?php

add_action('admin_head', 'hack_update_page');
function hack_update_page() {
	remove_submenu_page('md-admin','md_submenu_update');
}
function register_md_menu_page(){
	add_menu_page(
		'Portfolio items',
		'Portfolio',
		'manage_options',
		'md-admin',
		'display_menu_page'
	);
	add_submenu_page( 'md-admin',
		'Submenu title',
		'Add item',
		'manage_options',
		'md_submenu_add',
		'display_submenu'
	);
	add_submenu_page( 'md-admin',
		'Submenu title',
		'Update item',
		'manage_options',
		'md_submenu_update',
		'display_update'
	);
}

function display_menu_page() {
	global $title;

	$data = get_all_data();
	include 'html/main.php';
}

function get_all_data() {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	return $wpdb->get_results( "SELECT id, name, about FROM $table" );
}

function display_submenu() {
	include 'html/add.php';
}

function display_update() {
	if (isset($_GET['post'])) {
		$post_id = intval($_GET['post']);
		$post_data = get_post_data($post_id);
		include 'html/update.php';
	}
}

function get_post_data($id) {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	return $wpdb->get_results( "SELECT id, name, about, info, skills, url FROM $table WHERE id = $id" )[0];
}