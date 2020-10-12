<?php

include_once dirname(dirname(__FILE__))."/animals/Bird.php";
include_once dirname(dirname(__FILE__))."/FactoryInterface.php";
class BirdFactory implements FactoryInterface
{
   public function operation()
   {
       // TODO: Implement operation() method.
       return new BirdItem();
   }
}