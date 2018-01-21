<?php
function md_ajax_get_more_items() {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	$limit = ITEMS_PER_PAGE;

	if (isset($_POST['offset'])) {
		$offset = intval(esc_attr($_POST['offset']));
		apply_filters('md_check_content_exist', ITEMS_PER_PAGE + $offset + 1);

		$data = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC LIMIT $limit OFFSET $offset");

		require 'html/portfolio-block.php';
	}
	wp_die();
}