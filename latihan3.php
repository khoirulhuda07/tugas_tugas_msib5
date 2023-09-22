<form method="GET" action="">
    <label for="">Nama</label><br>
    <input type="text" name="nama"><br>
    <label for="">Alamat</label><br>
    <input type="text" name="alamat"><br>
    <input type="submit" name="proses" value="simpan">
</form>



<?php
$nama =$_GET['nama'];
$alamat =$_GET['alamat'];
//menampilkan setelah di proses
$proses = $_GET['proses'];
if(isset($proses)){
    echo "nama = " .$nama. "<br>Alamat = " .$alamat;
}

?>