<?php
function md_check_content_exist($items_on_page = ITEMS_PER_PAGE) {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	$items_exist = $wpdb->get_var("SELECT COUNT(*) FROM $table");
	if ($items_exist < $items_on_page) {
		?>
		<style>
			#show-more {
				display: none;
			}
		</style>
<?php
	}
}