<?php 
namespace AppArr;

class Arr{
    private $str;
    public function strToArr($str){
        return $array=explode(" ",$str);
    }
}