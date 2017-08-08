<?php namespace Huy;

class Calculate {

    private $a;
    private $b;

    public function TinhTong($a,$b){
        return $a+$b;
    }
    public function TinhHieu($a,$b){
        return $a-$b;
    }
    public function TinhTich($a,$b){
        return $a.$b;
    }
    public function TinhThuong($a,$b){
        return $a/$b;
    }
}