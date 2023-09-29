<?php
class Bank {
    //deklarasi variabel dalam kelelas dengan akses modifier

    protected $norek;
    public $nama;
    private $saldo;
    static $jlm = 0;
    const bank ='bank Syariah nurul fikri';

    public function __construct($no, $nasabah, $saldo){
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jlm++;
    }
    public function setor($uang){
        $this->saldo +=$uang;
    }
    public function ambil($uang){
        $this->saldo -=$uang;
    }
    public function cetak(){
        echo '<br><b><u>'.self::bank.'</u></b>';
        echo '<br> No. rekening : ' .$this->norek;
        echo '<br> Nama nasabah : ' .$this->nama;
        echo '<br> Salod : ' .$this->saldo;
    }
}


?>