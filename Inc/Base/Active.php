<?php
namespace Inc\Base;
class Active{
    public static function activate(){
        flush_rewrite_rules();
    }
}