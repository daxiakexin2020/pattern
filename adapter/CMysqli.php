<?php

include_once 'DatabaseInterface.php';
class CMysqli implements DatabaseInterface
{
    public function connect()
    {
        // TODO: Implement connect() method.
        echo "mysqli start connect";

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