<?php

//array scalar
$a1 = ['kode' =>'0011','buah'=>'apel','harga'=>25000,'jumlah'=>5];
$a2 = ['kode' =>'0012','buah'=>'mangga','harga'=>26000,'jumlah'=>6];
$a3 = ['kode' =>'0013','buah'=>'durian','harga'=>27000,'jumlah'=>7];
$a4 = ['kode' =>'0014','buah'=>'jambu','harga'=>23000,'jumlah'=>8];
$a5 = ['kode' =>'0015','buah'=>'nanas','harga'=>24000,'jumlah'=>9];

//array asosiatif
$data =[$a1,$a2,$a3,$a4,$a5];

//deklarasi header table dengan looping

$judul = ['no', 'kode', 'buah', 'harga', 'jumlah beli','harga kotor','diskon','total harga'];
$jumlah_transaksi = count($data);

$jumlah_harga = array_column($data,'harga');
$harga_total = array_sum($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$rata2 = $harga_total / $jumlah_transaksi;
$keterangan = ['Total Harga' => $harga_total, 
'harga tertinggi'=>$harga_tertinggi, 
'harga terendah'=> $harga_terendah, 
'rata - rata harga'=> $rata2];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menggunakan array looping</title>
</head>
<body>
    <h3 style="text-align: center;">Daftar Buah</h3>
    <table style="" border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach($judul as $jd){
                    ?><th><?= $jd ?></th>
                    <?php
                }?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $no=1;
                foreach($data as $buah){
                    $bruto = $buah['harga'] * $buah['jumlah'];
                    $diskon = ($buah['buah'] == 'jambu' && $buah['jumlah']>=4) ? 0.2 : 0.1;
                    $harga_diskon = $diskon *$bruto;
                    $harga_bayar = $bruto - $harga_diskon; 
                    ?>

                    <tr>
                        <td><?= $no++; ?></td>
                  
                        <td><?= $buah ['kode'] ?></td>
                   
                   
                        <td><?= $buah ['buah']?></td>
                   
                   
                        <td><?= $buah['harga']?></td>
                 
                   
                        <td><?= $buah['jumlah']?></td>
                        <td><?= $bruto ?></td>
                        <td><?=$harga_diskon ?></td>
                        <td>Rp.<?= number_format($harga_bayar,0,',',',')?></td>
                    
                </tr>
                    <?php
                }?>
            </tr>
        </tbody>
        <tfoot>
            <?php foreach($keterangan as $ket => $hasil){?>
                <tr>
                    <td><?= $ket ?></td>
                    <td><?= $hasil ?></td>
                </tr>
                <?php
            }?>
        </tfoot>

    </table>
</body>
</html>