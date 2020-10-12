<?php

include_once 'AnimalInterface.php';
class ErrorAnimal implements AnimalInterface
{
   public function cry()
   {
       // TODO: Implement cry() method.
       echo "暂不支持此动物";
   }
}