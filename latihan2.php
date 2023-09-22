<?php
$nama = "Budi Santoso";
$nilai = 85;
$grade = "";
$predikat = "";
if($nilai >= 85 &&  nilai <= 100) $grade = "A";
elseif(nilai >=75 && nilai <=84) $grade = "B";
elseif(nilai >= 60 && nilai <= 74) $grade = "C";
elseif(nilai >= 30 && nilai <= 59) $grade = "D";
elseif(nilai >=0 && nilai <= 29) $grade = "E";
else $grade = "";

switch($grade){
 case "A" : $predikat = "memuaskan"; break;
 case "B" : $predikat = "Bagus"; break;
 case "C" : $predikat = "Cukup"; break;
 case "D" : $predikat = "Kurang"; break;
 case "E" : $predikat = "Buruk"; break;
 default : $predikat = "";
}



?>
<h1>Nama Siswa = <?php echo $nama ?></h1>
<h1>Nilai = <?php echo $nilai ?></h1>
<h1>Grade = <?php echo $grade ?></h1>
<h1>Predikat = <?php echo $predikat ?></h1>