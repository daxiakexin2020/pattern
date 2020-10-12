<?php

/*
 *
 *   上下文切换，环境类
 *
 * */

include_once 'animal_item/CatItem.php';
include_once 'animal_item/DogItem.php';
include_once 'animal_item/BirdItem.php';
include_once 'AnimalItemInterface.php';
class ContextStrategy
{
   public $strategy;

   public function __construct($ItemName)
   {
       $className = new ReflectionClass($ItemName);
       $this->strategy = $className->newInstance();
   }

   public function cry(){
       $this->strategy->cry();
   }

   public function smile(){
       $this->strategy->smile();
   }
}