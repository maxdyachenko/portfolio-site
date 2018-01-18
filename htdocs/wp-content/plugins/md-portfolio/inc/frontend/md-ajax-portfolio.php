<?php
function md_ajax_get_portfolio() {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	if (isset($_POST['id'])) {
		$id = intval(esc_attr($_POST['id']));

		$data = $wpdb->get_results("SELECT * FROM $table WHERE id = $id")[0];

		require 'html/popup.php';

	}
	wp_die();
}