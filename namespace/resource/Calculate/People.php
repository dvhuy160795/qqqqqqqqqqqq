<?php namespace Huy;
class People{
    private $name;
    private $age;
    function showName($name){
        return $name;
    }
    function showYear($age){
        return (2017 -$age);
    }
}