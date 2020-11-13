<?php
/**
 * Plugin Name: Institutional Website
 * Description: Plugin to create a institutional website
 * Version: 1.0
 * Author: Thales
 * License: GPLv2 or later
 * Text Domain: institutional-website
 * 
 * @package InstitutionalWebsitePlugin
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
    add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
    echo "<h1>Hello World!</h1>";
}
?>