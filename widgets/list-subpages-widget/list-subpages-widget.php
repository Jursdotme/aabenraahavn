<?php
/*
Widget Name: List Subpages
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Subpage_Menu_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'list-subpages-widget',
			__('List Subpages', 'list-subpages-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'list-subpages-widget-text-domain'),
			),
			array(
			),
			array(
				'affix' => array(
		        'type' => 'checkbox',
		        'label' => __( 'Fix menu', 'widget-form-fields-text-domain' ),
		        'default' => true
		    )
			),
			get_template_directory_uri().'/widgets/list-subpages-widget/'
		);
	}
	function get_template_name($instance) {
		return 'list-subpages-widget-template';
	}
	function get_style_name($instance) {
		return 'list-subpages-widget-style';
	}
}
siteorigin_widget_register('list-subpages-widget', __FILE__, 'Subpage_Menu_Widget');
