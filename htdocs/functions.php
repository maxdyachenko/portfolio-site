<?php
add_action('wp_enqueue_scripts', 'md_styles_scripts');
add_action( 'init', 'md_menu' );
add_action( 'widgets_init', 'md_register_sidebars' );
add_action('after_setup_theme', 'md_setup');


add_theme_support( 'post-thumbnails' );
add_theme_support('custom-logo');
add_theme_support( 'title-tag' );

add_filter( 'post_thumbnail_html', 'md_post_image_html', 10, 3);
add_filter( 'pre_get_document_title', 'md_filter_title');
add_filter ('document_title_separator', 'md_document_title_separator') ;



function md_setup() {
	load_theme_textdomain('dyachenko', get_template_directory());
}
function md_register_sidebars() {
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Social links' ),
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
function md_document_title_separator ($sep)
{
	return '|';
}
function md_filter_title() {
	return get_bloginfo() . ' | ' . get_the_title();
}
function md_post_image_html( $html, $post_id, $post_thumbnail_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;

}
function md_menu() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
			//'extra-menu' => __( 'Extra Menu' )
		)
	);
}
function md_styles_scripts()
{

	wp_register_style( 'owlcarousel', get_template_directory_uri() . '/css/owlcarousel/owl.carousel.min.css' );
	wp_register_style( 'owlcarouseltheme', get_template_directory_uri() . '/css/owlcarousel/owl.theme.default.min.css' );

	wp_register_script('main_js', get_template_directory_uri()  . '/js/main.js', array('jquery'), null, true);
	wp_register_script('owlcarousel_js', get_template_directory_uri()  . '/js/owl.carousel.min.js',array('jquery'), null, true);
	wp_register_script( 'touch_js', get_template_directory_uri() . '/js/touch.js', array('jquery'), null, true );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'main_js');
	wp_enqueue_script( 'touch_js');

	if(is_home() || is_front_page() ) {
		wp_enqueue_style('owlcarousel');
		wp_enqueue_style('owlcarouseltheme');

		wp_enqueue_script( 'owlcarousel_js');
	}

}

?>