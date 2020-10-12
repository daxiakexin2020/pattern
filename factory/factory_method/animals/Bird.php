<?php

include_once dirname(dirname(__FILE__))."/OperationInterface.php";

class Bird implements OperationInterface
{
    public function cry(){
        echo "bird cry";
    }
}