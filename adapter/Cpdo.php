<?php

include_once 'DatabaseInterface.php';
class Cpdo implements DatabaseInterface
{
   public function connect()
   {
       // TODO: Implement connect() method.
       echo "pdo start connect";
   }

   public function query()
   {
       // TODO: Implement query() method.
   }

   public function close()
   {
       // TODO: Implement close() method.
   }
}