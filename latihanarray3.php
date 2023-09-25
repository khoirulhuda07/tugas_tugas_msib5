<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th{
            background-color: aqua;

        }
        table td{
            background-color: aquamarine;
            font-size: 17px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
$n1 =['nim'=> '112110130', 'nama'=> 'anam', 'nilai'=> 70];
$n2 =['nim'=> '112110131', 'nama'=> 'huda', 'nilai'=> 75];
$n3 =['nim'=> '112110132', 'nama'=> 'riski', 'nilai'=> 80];
$n4 =['nim'=> '112110133', 'nama'=> 'aan', 'nilai'=> 85];
$n5 =['nim'=> '112110134', 'nama'=> 'rok', 'nilai'=> 90];
$n6 =['nim'=> '112110135', 'nama'=> 'nis', 'nilai'=> 76];
$n7 =['nim'=> '112110136', 'nama'=> 'ana', 'nilai'=> 77];
$n8 =['nim'=> '112110137', 'nama'=> 'rozak', 'nilai'=> 80];
$n9 =['nim'=> '112110138', 'nama'=> 'putra', 'nilai'=> 82];
$n10 =['nim'=> '112110139', 'nama'=> 'faris', 'nilai'=> 84];

$judul = ['no','NIM','nama mahasiswa','nilai','keterangan','grade','predikat'];
$mahasiswa=[$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10];
$jlm = count($mahasiswa);
$jumlah_nilai = array_column($mahasiswa,'nilai');
$nilai_total = array_sum($jumlah_nilai);
$rata2 = $nilai_total / $jlm;
$nT = max($jumlah_nilai);
$nR = min($jumlah_nilai);
$kT = ['nilai tertinggi'=> $nT,
'nilai terendah'=> $nR,
'rata - rata '=> $rata2,
'jumlah mahasiswa'=> $jlm,
'jumlah keseluruhan nilai'=> $nilai_total]



    ?>
    <table border="1" align="center" width="50%" cellpadding="10" cellspacing="2">
        <thead>
            <tr>
            <?php
            foreach($judul as $js) {
                ?>
            <th><?= $js?></th>
        <?php
        }?>
            </tr>
        </thead>
        <tbody>
         
                <?php $no= 1;
                foreach($mahasiswa as $mhs){
                    $grade = "";
                    $predikat = "";
                    $ket = ($mhs['nilai'] >= 60) ? 'lulus' : 'tidak lulus';
                   if($mhs['nilai'] >= 85 &&  $mhs['nilai'] <= 100) $grade = "A";
                   elseif($mhs['nilai'] >=75 && $mhs['nilai'] <=84) $grade = "B";
                   elseif($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade = "C";
                   elseif($mhs['nilai'] >= 30 && $mhs['nilai']<= 59) $grade = "D";
                   elseif($mhs['nilai'] >=0 && $mhs['nilai'] <= 29) $grade = "E";
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
                      <tr>
                        <td><?= $no++; ?></td>
                   <td><?= $mhs['nim'] ?></td>
                   <td><?= $mhs['nama']?></td>
                   <td><?= $mhs['nilai']?></td>
                   <td><?= $ket ?></td>
                   <td><?= $grade ?></td>
                   <td><?= $predikat ?></td>
                   </tr>
                <?php   
                }?>
        </tbody>
        <tfoot>
            <?php
            foreach($kT as $ket1 => $hasil){?>
            <tr>
                <td colspan="4"><?=$ket1 ?></td>
                <td colspan="3"><?= $hasil ?></td>
            </tr>
            <?php
            }?>
        </tfoot>
    </table>
</body>
</html>