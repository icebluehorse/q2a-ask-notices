<?php
/*
	Plugin Name: Ask Notices
	Plugin URI: https://github.com/svivian/q2a-tagging-tools
	Plugin Description: Display error notices if the user types
	Plugin Version: 0.9
	Plugin Date: 2012-03-07
	Plugin Author: Scott Vivian
	Plugin Author URI: http://codelair.co.uk/
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.4

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.gnu.org/licenses/gpl.html
*/

if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
}


qa_register_plugin_module('module', 'qa-ask-notices.php', 'qa_ask_notices', 'Ask Notices');
qa_register_plugin_layer('qa-an-layer.php', 'Ask Notices Layer');
