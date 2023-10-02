<?php

require_once 'abstrack.php';


class persegiPanjang extends Bentuk2D{
    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        echo 'persegi panjang';
    }
    public function kelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function cetak(){
        echo 'panjang : ' .$this->panjang . 'cm';
        echo '<br> lebar : ' .$this->lebar . 'cm';
    }

}