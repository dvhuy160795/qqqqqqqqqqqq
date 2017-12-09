<?php
use PHPUnit\Framework\TestCase;
require_once('Arr.php');
/**
 * 
 */
 class ArrTest extends TestCase
 {
 	public function testConnectionIsValid(){
		 
 		$arr= new Mang();
 		$serverName='www.google.com';
 		$this->assertTrue($arr->strToArr("dao vanhuy") !== false);
 	}
 } 
 ?>