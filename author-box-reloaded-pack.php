<?php
/*
Plugin Name: Author Box Reloaded Pack - External Contact Addons
Plugin URI: http://wordpress.org/extend/plugins/author-box-reloaded-pack/
Description: Adds External Contact fields to your profile. Just need to insert your UserID. Requires Author Box Reloaded 2.0 or greater.
Version: 1.0
Author: Lopo Lencastre de Almeida - iPublicis.com
Author URI: http://www.ipublicis.com
Donate link: http://smsh.me/7kit
License: GNU GPL v3 or later

    Copyright (C) 2010 iPublicis!COM

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$plugins = get_option('active_plugins');
$required_plugin = 'author-box-2/authorbox.php';
if ( !in_array( $required_plugin , $plugins ) ) {
	$wpfr = '<a href="http://wordpress.org/extend/plugins/author-box-2/" target="_blank">Author Box Reloaded</a>';
	$dieMessage  = sprintf( 'The %s plugin must be installed and active.', $wpfr );
	$notice = "<div id=\"message\" class=\"error fade\"><p><strong> Additional External Contacts</strong></p><p>".$dieMessage."</p></div>\n";
	add_action('admin_notices', create_function( '', "echo '$notice';" ) );
}

?>