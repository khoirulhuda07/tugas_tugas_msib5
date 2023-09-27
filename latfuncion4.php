<?php

function hitung ($a1,$a2,$tombol){
    if($tombol == '+') $hasil = $a1 + $a2;
    elseif($tombol == '-') $hasil = $a1 - $a2;
    elseif($tombol == '*') $hasil = $a1 * $a2;
    elseif($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}

?>
<h1>kalkulator</h1>
<form action="" method="POST">
    <div class="inputan">
        <label for="">angka 1
            <input type="text" name='a1' id="a1" require>
        </label><br>
        <label for="">angka 2
            <input type="text" id='a2' name='a2' require>
        </label><br>

        <input type="submit" name="tombol" value='+'>
        <input type="submit" name="tombol" value='-'>
        <input type="submit" name="tombol" value='*'>
        <input type="submit" name="tombol" value='/'>
        
    </div>
</form>
<div class="hasi">
    <?php
    if(isset($_POST['tombol'])){
        $a1 =$_POST['a1'];
        $a2 = $_POST['a2'];
        $tombol = $_POST['tombol'];
        $hasil = hitung($a1,$a2,$tombol);
        echo "hasilnya adalah " .$hasil;
    }

    ?>
</div>