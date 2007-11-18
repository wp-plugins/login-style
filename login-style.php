<?php
/*
Plugin Name: Login Style
Plugin URI: http://wordpress.org/extend/plugins/login-style/
Description: Restyle your login page with custom CSS.
Version: 1.0
Author: Jeff Waugh
Author URI: http://perkypants.org/
*/

function login_style_wp_head() {
	// This is ornery, but needs to be to support WordPress *and* WPMU.
	$blf = dirname(__FILE__);
	if(is_file("$blf/login-style.css")) {
		$css = trailingslashit(get_option('siteurl')) . trailingslashit(substr($blf, strpos($blf, 'wp-content'))) . 'login-style.css';
		echo '<link rel="stylesheet" href="'.$css.'" type="text/css" media="screen" />';
	}
}
add_action('login_head', 'login_style_wp_head');
?>
