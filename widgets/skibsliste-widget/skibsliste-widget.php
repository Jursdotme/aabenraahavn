<?php
/*
Widget Name: Skibsliste
Description: Visning af skibsliste i fuld eller kompakt visning.
Author: Inzite
Author URI: http://inzite.dk
*/

class Skibsliste_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'skibsliste-widget',
			__('Skibsliste Widget', 'skibsliste-widget-text-domain'),
			array(
				'description' => __('Visning af skibsliste.', 'skibsliste-widget-text-domain'),
			),
			array(
			),
			array(
				'list_type' => array(
					'type' => 'select',
			        'label' => __( 'Visning', 'skibsliste-widget-text-domain' ),
			        'default' => 'compact',
			        'options' => array(
			            'compact' => __( 'Kompakt visning', 'skibsliste-widget-text-domain' ),
			            'full' => __( 'Fuld visning', 'skibsliste-widget-text-domain' ),
			        )
				),
			),
			get_template_directory_uri().'/widgets/skibsliste-widget/'
		);
	}
	function get_template_name($instance) {
		return 'skibsliste-widget-template';
	}
	function get_style_name($instance) {
		return 'skibsliste-widget-style';
	}
	// function enqueue_frontend_scripts($scripts){
	// 	wp_enqueue_script('skibsliste-scripts');		
	// }
	function initialize() {
	    $this->register_frontend_scripts(
	        array(
	            array( 'skibsliste-scripts', get_template_directory_uri().'/widgets/skibsliste-widget/js/script.js', array( 'jquery' ), '1.0' )
	        )
	    );
	}

}
siteorigin_widget_register('skibsliste-widget', __FILE__, 'Skibsliste_Widget');

// function skibsliste_register_scripts(){
// 	wp_register_script('skibsliste-scripts', get_template_directory_uri().'/widgets/skibsliste-widget/js/script.js', array(''), 1.0, false);
// 	wp_enqueue_script('skibsliste-scripts');
// }
// add_action('wp_enqueue_scripts', 'skibsliste_register_scripts', 1);