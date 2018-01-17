<?php

function md_portfolio_output($atts) {
	$data = get_all_data();
	$html = "";
	foreach ($data as $value) {
		$html .= include 'html/shortcode-front.php';
	}
}