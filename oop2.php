<?php
class Gempa{
    private $skala;
    private $lokasi;

    //konstruktor untuk mengantarkan variabel ke dalam file lain
    public function __construct($skala,$lokasi){
        $this->lokasi = $skala;
        $this->skala = $skala;
    }
    private function dampak($skala){
        $this->skala = $skala;
        if($skala >=0 && $skala <=2) $dampak = 'tidak terasa';
        elseif($skala >= 2 && $skala <= 4) $dampak = 'bangunan retak - retak';
        elseif($skala >= 4 && $skala <= 6) $dampak = 'bangunan roboh';
        else  $dampak = "berpotensi tsunami";
        return $dampak;
    }
    public function cetak(){
        echo 'lokasi : ' .$this->lokasi;
        echo '<br> skala : ' .$this->skala;
        echo '<br> dampak : ' .$this->dampak($this->skala);
        echo '<br>';
    }
}

?>