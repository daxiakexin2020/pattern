<?php

include_once 'Single.php';
class Client
{
     public function test(){
         $single = Single::getInstance();
         $single->check();
     }
}

(new Client())->test();