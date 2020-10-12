<?php


include_once dirname(dirname(__FILE__))."/OperationInterface.php";
class Dog implements OperationInterface
{
   public function cry()
   {
       // TODO: Implement cry() method.
     echo "dog cry";
   }
}