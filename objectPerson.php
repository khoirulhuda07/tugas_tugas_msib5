<?php

require_once 'dosen.php';
require_once 'mahasiswa.php';
require_once 'staff.php';

$d1 = new dosen ('budi','laki-laki',001,'guru');
$m1 = new mahasiswa ('andi','Laki-laki',2,'Ti');
$s1 = new staff ('huda','Laki-laki',002,'admin',1000000);

$data = [$d1,$m1,$s1];
echo '<h3>data kampus</h3>';
echo '<p>';
foreach ($data as $d){
    echo $d->cetak();
    echo'<hr>';
}

echo '</p>';
?>