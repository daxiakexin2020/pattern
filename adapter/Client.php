<?php


include_once 'CMysql.php';
include_once 'CMysqli.php';
include_once 'Cpdo.php';

class Client
{
    public function test(){
        $model = new CMysql();
        $model = new CMysqli();
        $model = new Cpdo();
        $model->connect();
    }
}

$client = new Client();
$client->test();