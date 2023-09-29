<?php

require 'oop.php';

$n1 = new Bank('001','andi',700000);
$n2 = new Bank('002','huda',80000);
$n3 = new Bank('003','anam',90000);
$n4 = new Bank('004','aan',10000);
$n5 = new Bank('005','putra',20000);

$n1->setor(100000);
$n2->ambil(10000);

echo '<h3 align="center">' .Bank::bank. '</h3>';

$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();
?>
