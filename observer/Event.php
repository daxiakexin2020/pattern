<?php

include_once 'EventInterface.php';
include_once 'ObserverInterface.php';
class Event implements EventInterface
{

   public $observers=[];
   public function addObserver($key, ObserverInterface $observer)
   {
       // TODO: Implement addObserver() method.
       $this->observers[$key] = $observer;
   }

   public function removeObserver($key)
   {
       // TODO: Implement removeObserver() method.
       if(isset($this->observers[$key])){
           unset($this->observers[$key]);
       }
   }

   public function notify()
   {
       // TODO: Implement notify() method.
       foreach ($this->observers as $observer){
           $observer->update();
       }
   }

   public function start(){
       $this->notify();
   }
}