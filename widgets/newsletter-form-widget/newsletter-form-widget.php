<?php
/*
Widget Name: Nyhedsmail Formular
Description:
Author: Inzite
Author URI: http://inzite.dk
*/

class Newsletter_form extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'newsletter-form-widget',
			__('Nyhedsmail Formular', 'newsletter-form-widget-text-domain'),
			array(
				'description' => __('', 'newsletter-form-widget-text-domain'),
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
			get_template_directory_uri().'/widgets/newsletter-form-widget/'
		);
	}
	function get_template_name($instance) {
		return 'newsletter-form-widget-template';
	}
	function get_style_name($instance) {
		return 'newsletter-form-widget-style';
	}
}
siteorigin_widget_register('newsletter-form-widget', __FILE__, 'Newsletter_form');
