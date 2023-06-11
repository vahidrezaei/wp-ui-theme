<?php
namespace Inc\Page;
class ComponentList 
{
   
    function register(){
        // add_action('admin_enqueue_scripts',array($this,'addStyle'));
        // add_action('admin_enqueue_scripts',array($this,'addJs'));

        //افزودن منو
        add_action('admin_menu',array($this,'adminPage'));
       }
   
       function adminPage(){
         add_menu_page('لیست کامپوننت ها', 'آلا ولمنتور', 'manage_options', 'wp-velemtor-list', array($this,'adminView'), 'dashicons-schedule');
       }
   
       function adminView(){
         require_once PLUGIN_PATH.'view/componentList.php';
       }
}
