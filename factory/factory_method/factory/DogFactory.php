<?php

include_once dirname(dirname(__FILE__))."/FactoryInterface.php";
include_once dirname(dirname(__FILE__))."/animals/Dog.php";

class DogFactory implements FactoryInterface
{
   public function operation()
   {
       // TODO: Implement operation() method.
       return new DogObserver();
   }
}