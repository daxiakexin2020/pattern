<?php


class Register
{
     private static $objects;

     public static function set($alias,$value){
         self::$objects[$alias] = $value;
     }

     public static function get($alias){
         if(!isset(self::$objects[$alias])){
             return null;
         }
         return self::$objects[$alias];
     }

     public static function _unset($alias){
         if(!isset(self::$objects[$alias])){
             return false;
         }

         unset(self::$objects[$alias]);

         return true;
     }
}