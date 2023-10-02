<?php
require_once 'hewan1.php';
require_once 'hewan2.php';
require_once 'hewan3.php';

$h1 = new kucing();
$h2 = new kambing();
$h3 = new anjing();

$suaraHewan = [$h1,$h2,$h3];

foreach($suaraHewan as $hewan){
    echo '<br>'.$hewan->bersuara();
}

?>