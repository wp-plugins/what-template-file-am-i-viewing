<?php
/*
Plugin Name: What Template File Am I Viewing?
Plugin URI: http://www.themightymo.com
Description: This is a debugging plugin that displays the current php file that is loading on the front end of the website.
Version: 1.1
Author: The Mighty Mo! Design Co.
Author URI: http://www.themightymo.com

------------------------------------------------------------------------
Copyright 2012 The Mighty Mo! Design Co. LLC with props to VegasGeek.com for writing the code that forms the basis of this plugin (http://vegasgeek.com/which-template-is-being-used/)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/


add_action('wp_head', 'show_template'); 
 
function show_template() { 	
	if (current_user_can('administrator')) {	
		global $template;
		print_r($template);
	}
}
?>