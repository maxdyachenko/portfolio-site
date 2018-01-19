<?php
function md_assets() {
	if(is_home() || is_front_page() ) {
		wp_enqueue_script( 'md_portfolio', plugins_url( 'js/portfolio.js', __FILE__ ), array( 'jquery' ) );
		wp_enqueue_script( 'md_load_more', plugins_url( 'js/load-more.js', __FILE__ ), array( 'jquery' ) );

		wp_localize_script( 'md_portfolio', 'mdPortfolio', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		) );
		wp_localize_script( 'md_load_more', 'mdLoadMore', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		) );
	}
}