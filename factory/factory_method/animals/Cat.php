<?php

include_once dirname(dirname(__FILE__))."/OperationInterface.php";

class Cat implements OperationInterface
{
    public function cry(){
         echo "cat cry";
    }
}