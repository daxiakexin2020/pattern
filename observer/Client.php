<?php


include_once 'Event.php';
include_once 'CatObserver.php';
include_once 'BirdObserver.php';
include_once 'DogObserver.php';
class Client
{
     public function test(){
         $event = new Event();
         $event->addObserver('cat',new CatObserver());
         $event->addObserver('bird',new BirdObserver());
         $event->start();
     }
}

$client = new Client();
$client->test();