<?php
/*
Widget Name: Marine Traffic
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Marine_Traffic_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'marine-traffic-widget',
			__('Marine Traffic', 'marine-traffic-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'marine-traffic-widget-text-domain'),
			),
			array(
			),
			array(
			),
			get_template_directory_uri().'/widgets/marine-traffic-widget/'
		);
	}
	function get_template_name($instance) {
		return 'marine-traffic-widget-template';
	}
	function get_style_name($instance) {
		return 'marine-traffic-widget-style';
	}
}
siteorigin_widget_register('marine-traffic-widget', __FILE__, 'Marine_Traffic_Widget');
