<?php require "../vendor/autoload.php";

use AppArr\Arr;
use AppStr\Str;

$arr= new Arr();
$arrShow=$arr->strToArray("sdf adfa asdfas");
var_dump($arrShow);
$str=new Str();
echo $strShow=$str->showStr("asdfas adsfasd");
