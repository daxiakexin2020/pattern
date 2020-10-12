<?php


class Single
{
    private static $instance;

    private function __construct(){

    }
    private function __clone(){

    }

    public static function getInstance(){

        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function check(){
         echo "单例check";
    }
}