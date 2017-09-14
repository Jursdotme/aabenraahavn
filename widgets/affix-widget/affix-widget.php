<?php
/*
Widget Name: Affix Widget
Description:
Author: Inzite
Author URI: http://inzite.dk
*/

class Affix_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'affix-widget',
			__('Affix Widget', 'affix-widget-text-domain'),
			array(
				'description' => __('', 'affix-widget-text-domain'),
			),
			array(
			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
			),
			get_template_directory_uri().'/widgets/affix-widget/'
		);
	}
	function get_template_name($instance) {
		return 'affix-widget-template';
	}
	function get_style_name($instance) {
		return 'affix-widget-style';
	}
}
siteorigin_widget_register('affix-widget', __FILE__, 'Affix_Widget');
