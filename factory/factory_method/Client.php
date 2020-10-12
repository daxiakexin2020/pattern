<?php

include_once 'factory/CatFactory.php';
include_once 'factory/DogFactory.php';
include_once 'factory/BirdFactory.php';

class Client
{
    public function test(){

    }
}

$client = new Client();

//TODO 使用cat工厂
$catFactory = new CatFactory();

//TODO 返回cat业务类，直接调用cay行为
$catFactory->operation()->cry();

//TODO 使用cat工厂
$dogFactory = new DogFactory();

//TODO 返回dog业务类，直接调用cay行为
$dogFactory->operation()->cry();