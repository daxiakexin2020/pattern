<?php

include_once 'AnimalInterface.php';

class Cat implements AnimalInterface
{
    public function cry(){
        echo "cat cry";
    }
}