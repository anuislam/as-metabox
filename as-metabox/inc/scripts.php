<?php
if (!function_exists('as_metabox_enqueue_scription')) {
	function as_metabox_enqueue_scription(){

		wp_enqueue_style( 'as_font_awesome_css', as_root_metabox_url.'/assets/css/font-awesome.min.css' );
		wp_enqueue_style( 'as_main_css', as_root_metabox_url.'/assets/css/as_main.css' );
		wp_enqueue_style( 'as_animate_css', as_root_metabox_url.'/assets/css/animate.css' );
		wp_enqueue_style( 'as_jquery_ui_css', as_root_metabox_url.'/assets/css/jquery-ui.min.css' );

		wp_register_script( 'as_main_js', as_root_metabox_url.'/assets/js/as_main.js', 'jquery', 1.0, true );
		wp_register_script( 'as_jquery-ui_js', as_root_metabox_url.'/assets/js/jquery-ui.min.js', 'jquery', 1.0, true );

	    wp_localize_script( 'as_main_js', 'as_meta_local',
	        array( 
	            'nonce_local' => wp_create_nonce( 'as_metabox_for_ajax' ),
	        )
	    );

		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script('wp-color-picker');
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'as_jquery-ui_js' );

		wp_enqueue_script('as_tabulous_js');
		wp_enqueue_script('as_main_js');
	}

	add_action('admin_enqueue_scripts','as_metabox_enqueue_scription');
}
