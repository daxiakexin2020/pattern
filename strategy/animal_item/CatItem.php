<?php


include_once dirname(dirname(__FILE__))."/"."AnimalItemInterface.php";

class CatItem implements AnimalItemInterface
{
   public function cry()
   {
       // TODO: Implement cry() method.
     echo "Cat cry";
   }

   public function smile(){
       echo "Cat smile";
   }

   public function eat(){
       echo "Cat eat";
   }
}