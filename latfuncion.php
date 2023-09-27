<?php
$ar_prodi =['SI'=> 'sistem informasi', 'TI'=> 'teknik informatika', 'TE'=> 'teknik elektro'];
$ar_skill = ['html'=>10, 'css'=>10, 'javascript'=>20, 'RWD'=>20, 'PHP'=>20, 'laravel'=>40, 'mysql' =>40];
$domisili = ['jakarta','bandung','surabaya','malang','bali','lainnya'];

?>

<fieldset style="backgound-color: aqua ;">
    <legend>form regirtrasi IT clup</legend>
    <table>
        <thead>
            <tr>
                <td>form registrasi</td>
            </tr>
        </thead>
        <tbody>
           <form action="" method="post">
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" size="30"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-Laki" id="">laki - lak
                <input type="radio" name="jk" value="perembuan" id="">perempuan</td>
            </tr>
            <tr>
                <td>Program studi</td>
                <td>:</td>
                <td><select name="prodi" id="">
                    <?php
                    foreach($ar_prodi as $pd => $a){
                        ?>
                        <option  value="<?=$pd?>"><?=$a ?></option>
                        <?php
                    }?>
                </select></td>
            </tr>
            <tr>
                <td>Skill programming</td>
                <td>:</td>
                <td>
                    <?php
                    foreach($ar_skill as $sk => $b){ ?>
                        <input type="checkbox" name="skill[]" value="<?=$sk?>" id=""><?= $sk?>
                        <?php
                    }?>
                </td>
            </tr>
            <tr>
                <td>domisili</td>
                <td>:</td>
                <td><select name="domisili" id="">
                    <?php
                    foreach($domisili as $dm){
                        ?>
                        <option value="<?=$dm?>"><?= $dm?></option>
                        <?php
                    }?>
                </select></td>
            </tr>
            <tfoot>
                <tr>
                    <th><button name= "proses">submit</button></th>
                </tr>
            </tfoot>
           </form> 
        </tbody>
    </table>
</fieldset>

<?php
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $dm = $_POST['domisili'];
    echo "nim : $nim<br>";
    echo "Nama ; $nama<br>";
    echo "jenis kelamin ; $jk<br>";
    echo "prodi ; $prodi<br>";
    $total = 0;

    foreach($skill as $skor){
        $total +=$ar_skill[$skor];

    }
    function skor_skill ($total){
        if($total >= 100 && $total <=170){
            return 'sangat baik';
        }
        elseif($total >= 60 && $total <=100){
            return 'Baik';
        }elseif($total >= 40 && $total <= 60){
            return 'cukup';
        }elseif($total >= 0 && $total <= 40){
            return 'kurang';
        }else {
            return 'tidak memadai';
        }
    }
    echo "skill : ";
    foreach($skill as $skor){
        echo " $skor, ";
    }
    echo "<br>";
    echo 'total Skor';
    echo'kategori skill : ' .skor_skill($total). "<br>";
    echo "domisili $dm <br>";
}
?>