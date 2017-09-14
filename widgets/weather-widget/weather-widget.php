<?php
/*
Widget Name: Weather info
Description: Show weather info based on location.
Author: Inzite
Author URI: http://inzite.dk
*/

class Weather_widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'weather-widget',
			__('Weather info', 'weather-widget-text-domain'),
			array(
				'description' => __('Show weather info based on location.', 'weather-widget-text-domain'),
			),
			array(
			),
			array(
				'latitude' => array(
					'type' => 'text',
					'label' => __('Latitude', 'siteorigin-widgets'),
					'default' => '57.159617'
				),
				'longtitude' => array(
					'type' => 'text',
					'label' => __('Longtitude', 'siteorigin-widgets'),
					'default' => '10.287716'
				),
			),
			get_template_directory_uri().'/widgets/weather-widget/'
		);
	}
	function get_template_name($instance) {
		return 'weather-widget-template';
	}
	function get_style_name($instance) {
		return 'weather-widget-style';
	}
}
siteorigin_widget_register('weather-widget', __FILE__, 'Weather_widget');
