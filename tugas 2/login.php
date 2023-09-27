<?php
$us = 'admin';
$pw = 'admin';
session_start();
function cekLogin($username, $password){
    if($username == 'admin' && $password == 'admin'){
        $_SESSION['username'] = $username;
        header('location:index.php');
    }else{
        echo '<script>alert("username atau password salah, silahkan cek kembali");
        document.location="login.php";</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/style1.css">
</head>
<body>
    <header>
        <h1>selamat datang</h1>
    </header>
    <div class="login">
        <form action="" method="post">
        
            <table align='center' >
            <h2>silahkan login</h2>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="user" placeholder="masukkan username anda" require></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pw" id="" placeholder="masukkan password anda" require></td>
    </tr>
            </table>
            <table align="center" class="button">
                <tr>
                    <th><button name="proses">login</button></th>
                </tr>
            </table>
            </form>
        </div>
        <?php
        if(isset($_POST['proses'])){
            $user = $_POST['user'];
            $pws = $_POST['pw'];

            cekLogin($user,$pws);
        }?>
</body>
</html>