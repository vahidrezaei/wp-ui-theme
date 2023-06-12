<?php
namespace Inc;
final class Init{
    public static function get_service(){
        return [
            Base\Enqueue::class,
            Page\Admin::class,
        ];
    }
    public static function register_services(){
        foreach (self::get_service() as $class) {
            $service = self::instantiate($class);
            if(method_exists($service,'register')){
            
                $service->register();
            }
        }
    }

    private static function instantiate($class){
        $service = new $class();
        return $service;
    }
}