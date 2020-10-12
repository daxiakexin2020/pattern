<?php

include_once 'Cat.php';
include_once 'Register.php';

class Client
{
    public function set(){
        $cat = new Cat();
        Register::set('cat',$cat);
    }

    public function get(){
        Register::get('cat')->cry();
    }
}

$client = new Client();
$client->set();
$client->get();