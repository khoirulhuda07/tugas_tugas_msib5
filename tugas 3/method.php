<?php

class KonversiSuhu{
private $satuanSuhuAwal;
private $besaranSuhu;
private $satuanSuhuTujuan;


public function __construct($satuanSuhuAwal, $besaranSuhu,$satuanSuhuTujuan){
    $this->satuanSuhuAwal= $satuanSuhuAwal;
    $this->besaranSuhu = $besaranSuhu;
    $this->satuanSuhuTujuan = $satuanSuhuTujuan; 
    }
public function konversi($satuanSuhuAwal,$satuanSuhuTujuan){
    if($this->satuanSuhuAwal = 'Celsius' && $this->satuanSuhuTujuan = 'Fahrenheit'){
         $hasil =($this->besaranSuhu *9/2) +32; 
    }elseif($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
         $hasil = ($this->besaranSuhu - 32) * 5/9;
    }elseif($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
         $hasil = $this->besaranSuhu * 4/5;
    }elseif($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
         $hasil = $this->besaranSuhu * 5/4;
    }else{
        return null;
    }
    return $hasil;
    } 
    public function cetak(){?>

     <tr>
        <td><?php echo $this->satuanSuhuAwal; ?></td>
        <td><?php echo $this->besaranSuhu; ?></td>
        <td><?php echo $this->satuanSuhuTujuan;?></td>
        <td><?php echo number_format($this->konversi($this->satuanSuhuAwal,$this->satuanSuhuTujuan));?></td>
     </tr>

   
    <?php
    }
}?>





