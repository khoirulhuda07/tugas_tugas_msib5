<style>
table td, th{
    padding: 7px;
    text-align: center
}
table, th, td:hover{
    background-color: aqua;
    font-weight: bold;
    transition: 0.3s linear;
}
</style>



<?php

require 'method.php';

$s1 = new KonversiSuhu ('Celsius',30,'Fahrenheit');
$s2 = new KonversiSuhu ('Fahrenheit',10,'Celcius');
$s3 = new KonversiSuhu ('Celsius',20,'Rheamur');
$s4 = new KonversiSuhu  ('Rheamur',40,'Celcius');
$s5 = new KonversiSuhu ('Celsius',5,'Fahrenheit');
$s6 = new KonversiSuhu ('Fahrenheit',15,'Celcius');
$s7 = new KonversiSuhu ('Celsius',25,'Rheamur');
$s8 = new KonversiSuhu  ('Rheamur',45,'Celcius');

?>
 <table border='1' align='center' width='50%' >
<tr>
    <th>Satuan awal</th>
    <th>Besaran suhu</th>
    <th>Satuan Tujuan</th>
    <th>Hasil konversi</th>
</tr>

<?php
$s1->cetak();
$s2->cetak();
$s3->cetak();
$s4->cetak();
$s5->cetak();
$s6->cetak();
$s7->cetak();
$s8->cetak();

?>

</table>