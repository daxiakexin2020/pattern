<?php

include_once 'ObserverInterface.php';
class DogObserver implements ObserverInterface
{
    public function update()
    {
        // TODO: Implement update() method.
        echo "Dog start update";
    }
}