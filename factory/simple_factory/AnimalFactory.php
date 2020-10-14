<?php

include_once 'Cat.php';
include_once 'Dog.php';
include_once 'Bird.php';
include_once 'ErrorAnimal.php';

class AnimalFactory
{
    public function getAnimal(int $type)
    {

        switch ($type) {

            case "1":
                return new Cat();
                break;

            case "2":
                return new DogObserver();
                break;

            case "3":
                return new BirdItem();
                break;

            default:
                return new ErrorAnimal();
        }
    }
}