<?php

include_once 'ObserverInterface.php';
class CatObserver implements ObserverInterface
{
   public function update()
   {
       // TODO: Implement update() method.
       echo "Cat start update";
   }
}