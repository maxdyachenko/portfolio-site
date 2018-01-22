<?php
function md_assets() {
	if(is_home() || is_front_page() ) {
		wp_enqueue_script( 'md_portfolio', plugins_url( 'js/portfolio.js', __FILE__ ), array( 'jquery' ), false, true );

		wp_localize_script( 'md_portfolio', 'mdPortfolio', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		) );

	}
}