<?php


include_once  'ObserverInterface.php';

interface EventInterface
{
    public function addObserver($key,ObserverInterface $observer);

    public function removeObserver($key);

    public function notify();
}