<?php

include_once dirname(dirname(__FILE__))."/"."AnimalItemInterface.php";

class DogItem implements AnimalItemInterface
{
    public function cry()
    {
        // TODO: Implement cry() method.
       echo "Dog cry";
    }

    public function smile(){
        echo "Dog smile";
    }
}