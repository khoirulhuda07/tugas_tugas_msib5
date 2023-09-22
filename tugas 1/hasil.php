<?php
error_reporting(0);
$nama = $_POST['nama'];
$pk = $_POST['pekerjaan'];
$hobby1 = $_POST['r1'];
$hobby2 = $_POST['r2'];
$hobby3 = $_POST['r3'];
$hobby4 = $_POST['r4'];
$hobby5 = $_POST['r5'];
$hobby6 = $_POST['r6'];
$hobby7 = $_POST['r7'];
$hobby8 = $_POST['r8'];
$hobby9 = $_POST['r9'];
$hobby10 = $_POST['r10'];
$proses = $_POST['proses'];
if(isset($proses))
{
    ?>
    <style>
        table{
            background-color: aqua;
            padding: 12px 20px;
          
        }
        .border {
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
        th, td{
            font-weight: bold;
            font-size: 20px;
        }
        button{
            margin-top: 1rem;
        }
        a{
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 17px;
        }
    </style>
    <center>
        <h1>Data Diri Anda</h1>
    <table>
        <tr>
            <th class="border">Nama</th>
            <th>Pekerjaan</th>
            <th class="border">Hobi</th>
        </tr>
        <tr>
            <td class="border"><?php echo $nama?></td>
            <td><?php echo $pk?></td>
            <td class="border"><?php echo $hobby1 ?>
            <?php echo $hobby2 ?> 
            <?php echo $hobby3 ?> 
            <?php echo $hobby4 ?> 
            <?php echo $hobby5 ?> 
            <?php echo $hobby6 ?> 
            <?php echo $hobby7 ?> 
            <?php echo $hobby8 ?> 
            <?php echo $hobby9 ?> 
            <?php echo $hobby10 ?> 
        </td>
        </tr>
    </table>

    <button><a href="Tugas1.php">kembali ke form input</a></button>
    </center>
    
<?php

}?>