<?php

add_action('wp_enqueue_scripts', 'md_styles_scripts');
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