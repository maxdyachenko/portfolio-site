<?php

function md_portfolio_output($atts) {
	$data = get_portfolio_data();
	$html = "";
	apply_filters('md_check_content_exist', ITEMS_PER_PAGE);
	foreach ($data as $value) {
		$html .= include 'html/shortcode-front.php';
	}
}

function get_portfolio_data() {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	$limit = ITEMS_PER_PAGE;
	return $wpdb->get_results( "SELECT id, name, about FROM $table ORDER BY id DESC LIMIT $limit" );
}