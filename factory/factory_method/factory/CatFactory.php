<?php


include_once dirname(dirname(__FILE__))."/FactoryInterface.php";
include_once dirname(dirname(__FILE__))."/animals/Cat.php";

class CatFactory implements FactoryInterface
{
    public function operation()
    {
        // TODO: Implement operation() method.
        return new Cat();
    }
}