<?php


include_once 'AnimalFactory.php';

class Client
{
     public function getAnimal(int $type){
         return (new AnimalFactory())->getAnimal($type);
     }
}

$client = new Client();
$animal = $client->getAnimal(31);
$animal->cry();