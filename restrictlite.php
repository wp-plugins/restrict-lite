<?php
/*
Plugin Name: Restrict lite
Plugin URI: http://shaunewest.com/plugin
Description: Accordian tabs
Version: 0.01
Author: Shaune West
Author URI: http://shaunewest.com
License: GPL2
*/
add_shortcode('restrict', 'restrict_shortcode');
function restrict_shortcode($atts, $content = null) {
	$defaults = array(
		'role' => 'read'
	);
	extract(shortcode_atts($defaults, $atts));
	$roles = explode(',', $role); 
	if (is_user_logged_in()) {
		if (!empty($roles)) {
			foreach($roles as $role) {
				if (current_user_can($role))
					return $content;
			}
		}
	}
}