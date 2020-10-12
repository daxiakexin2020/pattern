<?php

include_once 'AnimalInterface.php';

class Dog implements AnimalInterface
{
   public function cry()
   {
       // TODO: Implement cry() method.
       echo "dog cry";
   }
}