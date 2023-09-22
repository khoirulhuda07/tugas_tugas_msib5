<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .button{
            font-size: 17px;
            margin-top: 1rem;
            font-weight: bold;
        }
        .button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
    <div>
        <h1>Masukkan Data Diri Anda</h1>
        <form action="hasil.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="masukkan nama"></td>
                </tr>
                <tr>
                    <td>pekerjaan</td>
                    <td>:</td>
                    <td><select name="pekerjaan" id="">
                        <option value="">---pilih pekerjaan anda---</option>
                        <option value="pekerjaan1">pekerjaan1</option>
                        <option value="pekerjaan2">pekerjaan2</option>
                        <option value="pekerjaan3">pekerjaan3</option>
                        <option value="pekerjaan4">pekerjaan4</option>
                        <option value="pekerjaan5">pekerjaan5</option>
                        <option value="pekerjaan6">pekerjaan6</option>
                        <option value="pekerjaan7">pekerjaan7</option>
                        <option value="pekerjaan8">pekerjaan8</option>
                        <option value="pekerjaan9">pekerjaan9</option>
                        <option value="pekerjaan10">pekerjaan10</option>
                    </select></td>
                </tr>
                <tr>
                    <td>hobby</td>
                    <td>:</td>
                    <td><input type="radio" name="r1" id="" value="hobby1">hobby1
                    <input type="radio" name="r2" id="" value="hobby2">hobby2
                    <input type="radio" name="r3" id="" value="hobby3">hobby3
                    <input type="radio" name="r4" id="" value="hobby4">hobby4
                    <input type="radio" name="r5" id="" value="hobby5">hobby5
                    <input type="radio" name="r6" id="" value="hobby6">hobby6
                    <input type="radio" name="r7" id="" value="hobby7">hobby7
                    <input type="radio" name="r8" id="" value="hobby8">hobby8
                    <input type="radio" name="r9" id="" value="hobby9">hobby9
                    <input type="radio" name="r10" id="" value="hobby10">hobby10
                </td>
                </tr>
            </table>
            <input class="button" type="submit" value="kirim" name="proses">
        </form>
    </div>
    </center>
</body>
</html>