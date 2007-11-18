<?php
/*
Plugin Name: Login Style
Plugin URI: http://wordpress.org/extend/plugins/login-style/
Description: Restyle your login page with custom CSS.
Version: 1.0
Author: Jeff Waugh
Author URI: http://perkypants.org/
*/

/*
Copyright (C) Jeff Waugh <http://perkypants.org/>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
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
