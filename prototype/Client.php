<?php


include_once 'Img.php';

class Client
{
     public function test(){
         $img = new Img();
         $img->init();

         $img1 = clone $img;
         $img1->start();
         echo $img1->name;

         echo "<br/>\n";

         $img2 = clone $img;
         $img2->start();
         echo $img2->name;
     }
}
$client = new Client();
$client->test();
