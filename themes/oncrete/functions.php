<?php

    /**
	 * Enqueue scripts
	 *
	 */
	function peccole_styles() {
		wp_enqueue_style( 'primo-biz', get_template_directory_uri() . '/style.css');

        wp_enqueue_script( 'google-maps', 'http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7&ver=3.9.3', array(),'', true );
        wp_enqueue_script( 'maplace', get_stylesheet_directory_uri() . '/inc/maplace-0.1.3.min.js', array('google-maps'),'', true );
        wp_enqueue_script( 'peccole-maplace', get_stylesheet_directory_uri() . '/inc/peccole-maplace.js', array('maplace'),'', true );

        wp_enqueue_script( 'unslider', get_stylesheet_directory_uri() . '/inc/unslider.min.js', array('jquery'),'', true );
        wp_enqueue_script( 'peccole-unslider', get_stylesheet_directory_uri() . '/inc/peccole-unslider.js', array('unslider'),'', true );
	}

	add_action( 'wp_enqueue_scripts', 'peccole_styles' );


?>
