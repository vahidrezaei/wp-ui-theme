<?php
namespace Inc\Base;
 class Enqueue extends BaseController {
    public function register(){
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
    }
    
    public function enqueue(){
        wp_enqueue_style('bootstrapCss',$this->plugin_url.'/assets/bootstrap/bootstrap.rtl.min.css');
        wp_enqueue_script('bootstrapJs',$this->plugin_url.'/assets/bootstrap/bootstrap.min.js');
    }
}
