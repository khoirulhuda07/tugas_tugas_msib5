<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar Persegi</title>
</head>
<body>
    <h1>Rumus Bangun Datar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>sisi 1</td>
                <td>:</td>
                <td><input type="text" name="sisi1" require></td>
            </tr>
            <tr>
                <td>sisi 2</td>
                <td>:</td>
                <td><input type="text" name="sisi2" require></td>
            </tr>
            <tr>
                <td><input type="submit" value="hitung" name="kirim"></td>
            </tr>
        </table>
    </form>

    <?php 
    if (isset($_POST['kirim'])){
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];

        $luaspersegi = $sisi1 * $sisi2;
        echo 'hasil perhitungan luas persegi';
        echo '<br> diketahui :';
        echo '<br>sisi pertama = '.$sisi1;
        echo '<br>sisi kedua = ' .$sisi2;
        echo '<br> hasilnya = ' .$luaspersegi;
    }
    ?>
</body>
</html>