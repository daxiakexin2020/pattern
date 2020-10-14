<?php


include_once 'ObserverInterface.php';
class BirdObserver implements ObserverInterface
{
   public function update()
   {
       // TODO: Implement update() method.
       echo "Bird start update";
   }
}