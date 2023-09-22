<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form penilaian</h1>
    <form action="" method="post">
        <label for="">nama</label>
        <input type="text" name="nama" placeholder="masukkan nama"><br>
        <label for="">Mata kuliah</label>
        <select name="matkul" id="">
            <option value="">---pilihan matakuliah ----</option>
            <option value="html">HTML dan CSS</option>
            <option value="js">Javascript</option>
            <option value="ui">ui/ux</option>
            <option value="php">PHP</option>
        </select><br>
        <label for="">nilai</label>
        <input type="text" name="nilai" placeholder="masukkan nama"><br>
        <input type="submit" name="proses" value="kirim">
    </form>


<?php
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];
$proses = $_POST['proses'];
$grade = "";
$predikat = "";

$ket = ($nilai >= 60) ? 'lulus' : 'tidak lulus';
if($nilai >= 85 &&  $nilai <= 100) $grade = "A";
elseif($nilai >=75 && $nilai <=84) $grade = "B";
elseif($nilai >= 60 && $nilai <= 74) $grade = "C";
elseif($nilai >= 30 && $nilai <= 59) $grade = "D";
elseif($nilai >=0 && $nilai <= 29) $grade = "E";
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
<?php if(isset($proses)){ ?>
<h1>Nama Siswa = <?php echo $nama ?></h1>
<h1>mata kuliah = <?php echo $matkul?></h1>
<h1>Nilai = <?php echo $nilai ?></h1>
<h1>Grade = <?php echo $grade ?></h1>
<h1>Predikat = <?php echo $predikat ?></h1>
<h1>keterangan = <?php echo $ket?></h1>
<?php
}?>
</body>
</html>