<?php
namespace Inc\Base;
 class Enqueue extends BaseController {
    public function register(){
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
        add_action('wp_head',array($this,'frontStyle'));
        add_action('wp_footer',array($this,'frontScript'));
    }
    
    public function enqueue(){
        wp_enqueue_style('bootstrapCss',$this->plugin_url.'/assets/bootstrap/bootstrap.rtl.min.css');
        wp_enqueue_style('fontCss',$this->plugin_url.'/assets/fonts/font.css','bootstrapCss');
        wp_enqueue_style('styleCss',$this->plugin_url.'/assets/velementor_style.css','fontCss');
        wp_enqueue_script('bootstrapJs',$this->plugin_url.'/assets/bootstrap/bootstrap.min.js');

        
    }
    public function frontStyle(){
  
        wp_enqueue_style('bootstrapCss',$this->plugin_url.'/assets/bootstrap/bootstrap.rtl.min.css');
        wp_enqueue_style('styleCss',$this->plugin_url.'/assets/velementor_style.css');
       
    }
    public function frontScript(){
     
     
        wp_enqueue_script( 'bootstrapJs',$this->plugin_url.'/assets/bootstrap/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('appJs', $this->plugin_url. '/js/app.js', null, null, true);
    }
}
