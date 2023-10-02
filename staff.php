<?php

require_once 'person.php';

class staff extends person{
    public $nip;
    public $devisi;
    public $gaji;
    public function __construct($nama,$gender,$nip,$devisi,$gaji){
        parent::__construct($nama,$gender);
        $this->nip = $nip;
        $this->devisi = $devisi;
        $this->gaji = $gaji;
    }

    public function cetak(){
        parent::cetak();
        echo '<br> nomor nip = '.$this->nip;
        echo '<br> devisi = '.$this->devisi;
        echo '<br> gaji = ' .$this->gaji;
    }
}