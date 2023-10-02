<?php

require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$l1 = new lingkaran(4);
$p1 = new persegiPanjang(2,4);
$s1 = new segitiga(4,4);
$judul = ['No','Nama Bidang','keterangan','Luas Bidang','keliling Bidang'];
$data = [$l1,$p1,$s1];
$no = 1;
?>
<table align='center' width="50%" border='1' cellpadding="10" cellspacing="2">
<thead>
    <tr>
    <?php
foreach($judul as $j){
?>
        <th><?= $j?></th>
        <?php
    }?>
    </tr>
</thead>
<tbody>
    <?php
    foreach($data as $d){
        ?>
        <tr>
            <td> <?= $no++?></td>
            <td><?= $d->namaBIdang(); ?></td>
            <td><?= $d->cetak(); ?></td>
            <td><?= number_format($d->luasBidang(), 1) . 'cm';?></td>
            <td><?= number_format($d->kelilingBidang(), 1) . 'cm';?></td>
        </tr>
        <?php
    }?>
</tbody>
</table>
