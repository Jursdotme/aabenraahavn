<?php
/*
Widget Name: Mailchimp Widget
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Mailchimp_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'mailchimp-widget',
			__('Mailchimp Widget', 'mailchimp-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'mailchimp-widget-text-domain'),
			),
			array(
			),
			array(
				'action' => array(
					'type' => 'text',
					'label' => __('Form action', 'siteorigin-widgets'),
					'default' => '//domain.us10.list-manage.com/subscribe/post?u=ae7c27480eded83c545632313&amp;id=153077e6d6'
				),
				'dummy' => array(
					'type' => 'text',
					'label' => __('Dummy field name', 'siteorigin-widgets'),
					'default' => 'b_ae7c27480eded83c545632313_153077e6d6'
				),
			),
			get_template_directory_uri().'/widgets/mailchimp-widget/'
		);
	}
	function get_template_name($instance) {
		return 'mailchimp-widget-template';
	}
	function get_style_name($instance) {
		return 'mailchimp-widget-style';
	}
}
siteorigin_widget_register('mailchimp-widget', __FILE__, 'Mailchimp_Widget');
