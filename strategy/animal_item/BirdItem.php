<?php


include_once dirname(dirname(__FILE__))."/"."AnimalItemInterface.php";

class BirdItem implements AnimalItemInterface
{
    public function cry()
    {
        // TODO: Implement cry() method.
     echo "Bird cry";
    }

    public function smile(){
        echo "Bird smile";
    }
}