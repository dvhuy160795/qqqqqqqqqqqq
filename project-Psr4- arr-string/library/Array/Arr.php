<?php 
namespace AppArr;

class Mang{
    private $str;
    public function strToArr($str){
        return $array=explode(" ",$str);
    }
}