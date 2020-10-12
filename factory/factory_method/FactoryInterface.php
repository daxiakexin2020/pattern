<?php

/*
 *   抽象工厂类
 *   抽象工厂中的方法
 *   用于各个工厂实现operation， 具体工厂中的operation 一般返回具体的业务类
 * */

interface FactoryInterface
{
   function operation();
}