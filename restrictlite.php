<?php
/*
Plugin Name: Restrict lite
Plugin URI: http://wordpress.org/extend/plugins/restrict-lite/
Description: An easy way to limit what data is shown to users with a simple a shortcode. Any content placed inside the shortcode will be restricted to logged in users only with the correct capabilities.
Version: 1.102
Author: Shaune West
Author URI: http://shaunewest.com
License: GPL2
*/
add_shortcode('restrict', 'restrict_shortcode');
function restrict_shortcode($atts, $content = null) {
	$defaults = array(
		'role' => '',
		'capability' => ''
	);
	extract(shortcode_atts($defaults, $atts));
	$roles = explode(',', $role); 
	if (is_user_logged_in()) {
		if (!empty($roles)) {
			foreach($roles as $role) {
				if (current_user_can($role))
					return $content;
			}
		}elseif (!empty($capability)) {
			foreach($capability as $capability) {
				if (current_user_can($capability))
					return $content;
			}
		}
	}
}