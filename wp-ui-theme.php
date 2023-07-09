<?php


/**
 * @package Hello_Dolly
 * @version 1.7.2
 */

use Inc\Shortcode\AlaPostList;

/*
Plugin Name: wp-ui-theme
Plugin URI: http://ala.org.ir
Description: this is ui short code for use theme.
Author: Vahid Rezaei
Version: 1.0.0
Author URI: 
*/

/**
 * page_title: The title of the page.
 * menu_title: Menu title that will be displayed on the dashboard.
 * capability: Minimum capability to view the menu.
 * menu_slug: Unique name used for the menu item.
 * function:  Used to display page content.
 * icon_url: URL to custom image used as an icon.
 * position: Location in the menu order.
 * add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
 */

 defined('ABSPATH') || die('Can\t access to config...'  );

 if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
  require_once dirname(__FILE__).'/vendor/autoload.php';
 }

$perfix = "fadak_";

 /* ACTIVE & DEACTIVATE ***************/
function activate_wp_theme_plugin(){
	\Inc\Base\Active::activate();
}
function deactivate_wp_theme_plugin(){
	\Inc\Base\Deactivate::deactivate();
}
 register_activation_hook(__FILE__,'activate_wp_theme_plugin');
 register_deactivation_hook(__FILE__,'deactivate_wp_theme_plugin');
/* ACTIVE & DEACTIVATE ***************/



if (class_exists('Inc\\Init')) {
  Inc\Init::register_services();
  Inc\Init::register_shortcode();
}

