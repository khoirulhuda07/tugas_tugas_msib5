<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    ?>
    <table border="1">
        <thead>
            <tr>
            <?php
            foreach($judul as $js) {?>
            <th><?= $js?></th>
        <?php
        }?>
            </tr>
        </thead>
    </table>
</body>
</html>