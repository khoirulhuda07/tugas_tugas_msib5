<?php

require_once 'abstrack.php';


class segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;

    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo 'segitiga';
    }
    public function kelilingBidang(){
        //saya menggunakan rumus keliling segitiga sama siku
        //rumus untuk menentukan sisi miring pada segitiga
        //fungsi sqrt adalah untuk menghitung akar kuadrat dari suatu nilai
        $c = sqrt($this->alas * $this->alas + $this->tinggi * $this->tinggi);
        
        //rumus untuk menghitung kelilingnya
        $keliling = $this->alas + $this->tinggi + $c;
        return $keliling; 
       
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function cetak(){
        echo 'Alas :' .$this->alas .'cm';
        echo '<br> Tinggi : ' .$this->tinggi .'cm';
    }
}