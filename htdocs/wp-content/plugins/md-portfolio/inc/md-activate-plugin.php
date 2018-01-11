<?php
function md_activate_plugin() {
	global $wpdb;
	$table = $wpdb->prefix . PORTFOLIO_LIST_TABLE;
	$sql = "CREATE TABLE IF NOT EXISTS `$table` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `name` varchar(255) NOT NULL,
          `about` varchar(255) NOT NULL,
          `skills` varchar(255) NOT NULL,
          `info` varchar(255) NOT NULL,
          `url` varchar(30) NOT NULL,
          `images` varchar(255) NOT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
	$wpdb->query($sql);
}