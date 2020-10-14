<?php


interface DatabaseInterface
{
    public function connect();

    public function query();

    public function close();
}