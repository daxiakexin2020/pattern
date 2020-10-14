<?php

include_once 'DatabaseInterface.php';
class CMysql implements  DatabaseInterface
{
    public function connect()
    {
        // TODO: Implement connect() method.
        echo "mysql start connect";
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