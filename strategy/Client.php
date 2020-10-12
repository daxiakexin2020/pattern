<?php


include_once 'ContextStrategy.php';
class Client
{

   public $itemName;
   public function __construct($itemName)
   {
       $this->itemName = $itemName;
   }

    public function test(){
        $item = new ContextStrategy($this->itemName);
        $item->cry();
        $item->smile();
    }
}

$client = new Client('DogItem');
$client->test();