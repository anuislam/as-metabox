<?php
/*
Plugin Name: As Metabox
Plugin URI: http://wordpress.org/plugins/as-metabox/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: anuislam
Version: 1.0
Author URI: sdsdsd
*/
//as-metabox
define('as_root_metabox', dirname(__FILE__));
//echo basename(__DIR__);
$chack_dir = explode("\\", as_root_metabox);
if (in_array("plugins", $chack_dir)) {
	define('as_root_metabox_url', plugins_url( '', __FILE__ ));
}else{
	$basename_dir = basename(__DIR__);
	define('as_root_metabox_url', get_template_directory_uri().'/'.$basename_dir);
}



require_once(as_root_metabox.'/inc/scripts.php');
require_once(as_root_metabox.'/inc/icons_array.php');
require_once(as_root_metabox.'/core/functions.php');
require_once(as_root_metabox.'/core/as_get_wp_data.php');
require_once(as_root_metabox.'/core/core-option.php');
require_once(as_root_metabox.'/core/core.php');
require_once(as_root_metabox.'/core/load-options.php');


add_action('as_metabox_init', function (){

	$asmeta = new As_metabox(array(
			'title' 		=> __('this is tile', 'asm'),
			'id'			=> 'my_id',
			'screen'		=> array('post', 'page'),
			'context'		=> 'advanced',
			'priority'		=> 'low'
		));
	$asmeta->add_section(array(
			'title' 	=> 	__('my title', 'asm'),
			'id' 		=> 	'section-1',
			'icon' 		=> 	'fa-facebook',
			'fields'	=> 	array(	
					array(
						'id'    				=> 'mesdsdtabox_mdsdetasdsd',
						'type'  				=> 'group',
						'desc' 					=> 'An TextAn TextAn TextAn TextAn Text',
						'title' 				=> 'group filed',
						'tabs_title_field'		=> 'meta_radion', // Return a field id for tab title text (note) support only text, url, email like text field
						'tabs_title'			=> 'first title', // You may change default tab title text
						'button_text'			=> 'first button', // You may change default add new button text
						'remove_text'			=> 'Remove', // You may change default Remove button text
						'group_fields' 			=> array(
										array(
											'id'    			=> 'meta_wp_select',
											'type'  			=> 'wp_select',
											'desc' 				=> 'An TextAn TextAn TextAn TextAn Text',
											'title' 			=> 'icon option',
											'options' 			=> 'wp_post_type_data',
											'multiple' 			=> true,
											'query' 			=> array(
													'post_type'	=> 'post' // default post
												)
										)
									)

					),	

					array(
						'id'    				=> 'mesdsdewewex_mdsdetasdsd',
						'type'  				=> 'group',
						'desc' 					=> 'An TextAn TextAn TextAn TextAn Text',
						'title' 				=> 'group filed',
						'tabs_title_field'		=> 'meta_radion', // Return a field id for tab title text (note) support only text, url, email like text field
						'tabs_title'			=> 'first title', // You may change default tab title text
						'button_text'			=> 'first button', // You may change default add new button text
						'remove_text'			=> 'Remove', // You may change default Remove button text
						'group_fields' 			=> array(
										array(
											'id'    			=> 'meta_wp_aaselect',
											'type'  			=> 'wp_select',
											'desc' 				=> 'An TextAn TextAn TextAn TextAn Text',
											'title' 			=> 'icon option',
											'options' 			=> 'wp_post_type_data',
											'multiple' 			=> true,
											'query' 			=> array(
													'post_type'	=> 'post' // default post
												)
										)
									)

					),	

					array(
						'id'    			=> 'meta_wp_selecsst',
						'type'  			=> 'wp_select',
						'desc' 				=> 'An TextAn TextAn TextAn TextAn Text',
						'title' 			=> 'icon option',
						'options' 			=> 'wp_post_type_data',
						'multiple' 			=> true,
						'query' 			=> array(
								'post_type'	=> 'page' // default post
							)
					),

					array(
						'id'    			=> 'meta_wpdsdcsaast',
						'type'  			=> 'wp_select',
						'desc' 				=> 'An TextAn TextAn TextAn TextAn Text',
						'title' 			=> 'icon option',
						'options' 			=> 'wp_post_type_data',
						'multiple' 			=> false,
						'query' 			=> array(
								'post_type'	=> 'page' // default post
							)
					)
				)
			)
	);

});

do_action('as_metabox_init');