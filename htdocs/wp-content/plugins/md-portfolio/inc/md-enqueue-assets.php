<?php
function enqueue_assets($hook) {
	if ($hook == 'toplevel_page_md-admin' || $hook == 'portfolio_page_md_submenu_add' | $hook == 'portfolio_page_md_submenu_update') {
		wp_register_style( 'md_styles', plugins_url('md-portfolio/assets/style.css'));
		wp_enqueue_style('md_styles');
	}
}