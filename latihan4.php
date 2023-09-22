<form method="POST" action="">
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <label for="">password</label><br>
    <input type="text" name="pass"><br>
    <input type="submit" name="proses" value="login">
</form>

<?php 
$username = $_POST['username'];
$pw = $_POST["pass"];
$proses = $_POST['proses'];

if (isset($proses)){
    echo 'hallo = ' .$username. '<br>and password anda = '.$pw;
}
?>
