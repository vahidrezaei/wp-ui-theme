<?php
namespace Inc\Base;
 class Enqueue {
    public function register(){
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
    }
    
    public function enqueue(){
        wp_enqueue_style('bootstrapCss',PLUGIN_URL.'/assets/bootstrap/bootstrap.rtl.min.css');
        wp_enqueue_script('bootstrapJs',PLUGIN_URL.'/assets/bootstrap/bootstrap.min.js');
    }
}
